// --------------------------------------------------------------------enteghal beyn form login v registration-----------------------------------------------------------

const link_login    = document.querySelector("#link-login");
const link_register = document.querySelector("#link-register");
const form_login    = document.querySelector(".form-login");
const form_registration   = document.querySelector(".form-registration");


link_login.addEventListener('click', function(){
    event.preventDefault();

    form_login.style.display = "none";
    form_registration.style.display = "block";
    
});

link_register.addEventListener('click', function(){
    event.preventDefault();

    form_registration.style.display = "none";
    form_login.style.display = "block";
    
});



// --------------------------------------------------------------------etebar sangi form login -----------------------------------------------------------


const form_login_f = document.querySelector(".form_login_f");
const username_login = document.querySelector("#username_login");
const username_error_login = document.querySelector("#username_error_login");
const password_login = document.querySelector("#password_login");
const password_error_login = document.querySelector("#password_error_login");

const btn_login = document.querySelector(".btn_login");

form_login_f.addEventListener('submit', function(){

    if(username_login.value == ""){

        username_error_login.style.display = 'block';
        event.preventDefault();
    }

    // braye inke agar dorost kard dige error nayad
    if(username_login.value){

        username_error_login.style.display = 'none';
    }


    if(password_login.value.length < 6){

        password_error_login.style.display = 'block';
        event.preventDefault();
    }

    // braye inke agar dorost kard dige error nayad
    if( 6 <= password_login.value.length){

        password_error_login.style.display = 'none';
    }

})



// --------------------------------------------------------------------etebar sangi form registration -----------------------------------------------------------



const form_registration_f = document.querySelector(".form_registration_f");
const username_registration = document.querySelector("#username_registration");
const username_error_registration = document.querySelector("#username_error_registration");
const email_registration = document.querySelector("#email_registration");
const email_error = document.querySelector("#email_error");
const password_registration = document.querySelector("#password_registration");
const password_error_registration = document.querySelector("#password_error_registration");

form_registration_f.addEventListener('submit', function(){

    if(username_registration.value == ""){

        username_error_registration.style.display = 'block';
        event.preventDefault();
    }

    // braye inke agar dorost kard dige error nayad
    if(username_registration.value){

        username_error_registration.style.display = 'none';
    }
    

    var pattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    var address   = email_registration.value;

    if(pattern.test(address) === false){

        email_error.style.display = 'block';
        event.preventDefault();
    }

    // braye inke agar dorost kard dige error nayad   (pattern.test(address) === true)
    else{

        email_error.style.display = 'none';
    }


    if(password_registration.value.length < 6){

        password_error_registration.style.display = 'block';
        event.preventDefault();
    }

    // braye inke agar dorost kard dige error nayad   ( 6 <= password_login.value.length)
    else{

        password_error_login.style.display = 'none';
    }
    

})
