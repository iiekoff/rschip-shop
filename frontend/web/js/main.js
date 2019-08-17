// hamburger menu
$(".hamburger").click(function(){
	$('.menu-collapse').toggleClass('d-none').css('order' , '1');
	$(this).toggleClass("hamburger-active");
	$('.menu').toggleClass('hamburger-opened').css('opacity' , '1');
});


// drop-down box in the cart
$('.info-price__link').click(function(event) {
	$('.info-price__wrap-main').slideToggle();
		if(this.innerHTML == "Hide details")
	{
		this.innerHTML = "Show order details";
		return;
	}
		else this.innerHTML = "Hide details";
	$(this).removeClass('info-price__link').addClass('info-price__link_2');
	event.preventDefault();
});


// fixed navigation
$(window).scroll(function() {
        if ($(this).scrollTop() > 1){  
            $('.navigation').addClass("sticky");
        }
        else{
            $('.navigation').removeClass("sticky");
        }
    });


// modal window
$('.header-btn, .offer-link').click(function(e) {
		e.preventDefault();
		$('#exampleModal').arcticmodal();
	});


// move to section
$("a.product-list__link, a.instal-wrapper-list__link").click(function (e) {
        e.preventDefault();
        elementClick = $(this).attr("href");
        destination = $(elementClick).offset().top;
        $("body,html").animate({scrollTop: destination }, 800);
    });


// input plus monus
$(document).ready(function() {
            $('.minus').click(function () {
                var $input = $(this).parent().find('input');
                var count = parseInt($input.val()) - 1;
                count = count < 1 ? 1 : count;
                $input.val(count);
                $input.change();
                return false;
            });
            $('.plus').click(function () {
                var $input = $(this).parent().find('input');
                $input.val(parseInt($input.val()) + 1);
                $input.change();
                return false;
            });
        });

// change classes in the list link
$('.install-wrapper-list__item').click(function(e) {
    $('.instal-wrapper-list__link').removeClass('instal-wrapper-list__link_active', 100, "easeInOutQuad");
		$(this).children('.instal-wrapper-list__link').addClass('instal-wrapper-list__link_active', 200, "easeInOutQuad");
		return false;
});


// focus&active
$('#focus1, #focus2').addClass('install-wrap-list__item_active');

$('#block1, #block3').addClass('active');


// change classes in the list block and slider
$('.install-wrap-list__item').click(function(e) {
    $('.install-wrap-list__item').removeClass('install-wrap-list__item_active', 500, "easeInOutQuad");
		$(this).addClass('install-wrap-list__item_active', 700, "easeInOutQuad");
	$('.install-slider').removeClass('active', 500, "easeInOutQuad")
	var num = $(this).attr('data-num');
	$('#block'+num).addClass('active', 500, "easeInOutQuad");
});

$('.install-wrap-list2__item').click(function(e) {
    $('.install-wrap-list2__item').removeClass('install-wrap-list__item_active', 500, "easeInOutQuad");
		$(this).addClass('install-wrap-list__item_active', 700, "easeInOutQuad");
	$('.install-slider2').removeClass('active', 500, "easeInOutQuad")
	var num = $(this).attr('data-num');
	$('#block'+num).addClass('active', 500, "easeInOutQuad");
});


// slick slider page install
$('.install-slider, .install-slider2').slick({
    infinite: false,
	autoplay: false,
	dots: true,
	prevArrow: '<button type="button" class="slick-prev"><svg class="slick-prev__svg"><use xlink:href="img/sprite.svg#arrow-left-slider"></use></svg></button>',
	nextArrow: '<button type="button" class="slick-next"><svg class="slick-next__svg"><use xlink:href="img/sprite.svg#arrow-right-slider"></use></svg></button>',
});


// slick slider mobile version
$('.introduction-slider, .app-slider, .advantage-slider, .news-slider, .gt-plus-slider, .description-slider, .shop-slider, .support-slider').slick({
    infinite: true,
	autoplay: true,
	prevArrow: '<button type="button" class="slick-prev"><svg class="slick-prev__svg2"><use xlink:href="img/sprite.svg#arrow-left-slider"></use></svg></button>',
	nextArrow: '<button type="button" class="slick-next"><svg class="slick-next__svg2"><use xlink:href="img/sprite.svg#arrow-right-slider"></use></svg></button>',
});

$('.products-slider').slick({
    infinite: true,
	autoplay: false,
	dots: true,
	prevArrow: '<button type="button" class="slick-prev"><svg class="slick-prev__svg2"><use xlink:href="img/sprite.svg#arrow-left-slider"></use></svg></button>',
	nextArrow: '<button type="button" class="slick-next"><svg class="slick-next__svg2"><use xlink:href="img/sprite.svg#arrow-right-slider"></use></svg></button>',
});


// number animation gt page and gtr
$('.spincrement').spincrement({
    duration: 4000,
    thousandSeparator: ""
});
var show = true;
var countbox = ".performance-gain__list";
$(window).on("scroll load resize", function () {
    if (!show) return false;
    var w_top = $(window).scrollTop();
    var e_top = $(countbox).length ? $(countbox).offset().top : 0;
    var w_height = $(window).height();
    var d_height = $(document).height();
    var e_height = $(countbox).outerHeight();
    if (w_top + 700 >= e_top || w_height + w_top == d_height || e_height + e_top < w_height) {
        $(".performance-gain__item span").spincrement({
            thousandSeparator: "",
            duration: 3000
        });
        show = false;
    }
});

// Animate row gt&gtr
$(window).scroll(function() {
	$('.performance-gain__item').each(function(){
        var imagePos = $(this).offset().top;
        var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow+550) {
            $(this).addClass("fadeInLeft");
        }
    });
});

