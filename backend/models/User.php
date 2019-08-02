<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user".
 */
class User extends \common\models\User
{
    public $password;
    public $role;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [[['status', 'updated_at', 'created_at'], 'integer'],
            [['username', 'auth_key', 'email', 'updated_at', 'created_at', 'role',], 'required'],
            [['username', 'password', 'password_reset_token', 'email'], 'string', 'max' => 100],
            [['auth_key'], 'string', 'max' => 32],
            [['username', 'email'], 'unique'],];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {

        return ['id' => 'ID',
            'username' => 'Имя пользователя',
            'auth_key' => 'Auth Key',
            'password' => 'Пароль',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\rbac\Role[]
     */
    public function getRoles()
    {
        $auth = Yii::$app->authManager;

        return $auth->getRolesByUser($this->id);
    }

    public function signup()
    {
        $this->setPassword($this->password);
        $this->generateAuthKey();
        $this->status = self::STATUS_ACTIVE;
        $this->updated_at = time();
        $this->created_at = time();
        if ($this->validate()) {
            $this->save();
            $auth = Yii::$app->authManager;
            foreach ((array)$this->role as $role_value) {
                $authorRole = $auth->getRole($role_value);
                $auth->assign($authorRole, $this->getId());
            }

            return $this;
        } else {
            return $errors = $this->errors;
        }
        //        return null;
    }

    public function update_user()
    {
        $model = User::findOne($this->id);
        if (!empty($this->password)) {
            $this->setPassword($this->password);
        } else {
            $this->password_hash = $model->password_hash;
        }
        $this->updated_at = time();
        $this->save();
        $auth = Yii::$app->authManager;
        $auth->revokeAll($this->id);
        foreach ((array)$this->role as $role_value) {
            $authorRole = $auth->getRole($role_value);
            $auth->assign($authorRole, $this->getId());
        }

        return $this;
    }
}
