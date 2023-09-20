
//show hamburger_menu 
const btn_hamburgermenu = document.querySelector(".icon-hamburger-d");
const d_hamburger_item  = document.querySelector(".d-hamburger-item");
const btn_cross_icon    = document.querySelector(".cross-icon");


btn_hamburgermenu.addEventListener('click', function(){

    d_hamburger_item.classList.add('show-hamburger-menu');
    

});

btn_cross_icon.addEventListener('click', function(){


    d_hamburger_item.classList.remove('show-hamburger-menu');

});
// show Products in hamburger_menu 

const btn_Products = document.querySelector("#btn-Products");
const btn_Products2 = document.querySelector("#btn-Products2");
const Products     = document.querySelector(".Products");
const Products2     = document.querySelector(".Products2");
let counter        = true;
let counter2        = true;

const plus_btn = document.querySelector(".plus_btn");

btn_Products.addEventListener('click', function(){

    if (counter){

        Products.style.display = "block";
        counter = false;


    }
    else{
        Products.style.display = "none";
        counter = true;
    }

});
btn_Products2.addEventListener('click', function(){

    if (counter2){

        Products2.style.display = "block";
        counter2 = false;


    }
    else{
        Products2.style.display = "none";
        counter2 = true;
    }

});


// slide show 
// owl-carouser
$(".carousel").owlCarousel({
    margin: 20,
    loop: true,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsive: {
    0:{
        items:1,
        nav: false
    },
    600:{
        items:2,
        nav: false
    },
    1000:{
        items:3,
        nav: false
    }
    }

})

// show product menu in navbar in header 
const show_product_menu = document.querySelector('#show-product-menu');
const Products_menu = document.querySelector('.Products-menu');

show_product_menu.addEventListener('mouseenter', function(){

    Products_menu.style.animation = 'showup 0.35s 1';
    Products_menu.style.display = 'block';
});

show_product_menu.addEventListener('mouseleave', function(){

    Products_menu.style.display = 'none';
});


// show skin menu in navbar in header 
const show_skin_menu = document.querySelector('#show-skin-menu');
const skin_menu = document.querySelector('.skin-menu');

show_skin_menu.addEventListener('mouseenter', function(){

    skin_menu.style.animation = 'showup 0.35s 1';
    skin_menu.style.display = 'block';
});

show_skin_menu.addEventListener('mouseleave', function(){

    skin_menu.style.display = 'none';
});


// show makeup menu in navbar in header 
const show_makeup_menu = document.querySelector('#show-makeup-menu');
const makeup_menu = document.querySelector('.makeup-menu');

show_makeup_menu.addEventListener('mouseenter', function(){

    makeup_menu.style.animation = 'showup 0.35s 1';
    makeup_menu.style.display = 'block';
});

show_makeup_menu.addEventListener('mouseleave', function(){

    makeup_menu.style.display = 'none';
});



