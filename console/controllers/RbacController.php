<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $authManager = Yii::$app->authManager;
        $authManager->removeAll();

        //Add permissions 'stat' Stat
        $stat = $authManager->createPermission('stat');
        $stat->description = 'Статистика';
        $authManager->add($stat); //перевод


        //create role 'manager' Manager
        $manager = $authManager->createRole('manager');
        $manager->description = 'Manager';
        $authManager->add($manager);

        //create role 'admin' Administrator
        $admin = $authManager->createRole('admin');
        $admin->description = 'Administrator';
        $authManager->add($admin);
    }
}

