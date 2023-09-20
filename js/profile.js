////////*modal////////
const mainmodal = document.querySelector(".main-modal");
const mainmodal2 = document.querySelector(".main-modal2");
const mainmodal3 = document.querySelector(".main-modal3");
const mainmodal4 = document.querySelector(".main-modal4");
const openmodal = document.querySelector(".link-color");
const openmodal2 = document.querySelector(".activity");
const openmodal3 = document.querySelector(".auth");
const openmodal4 = document.querySelector(".feedback");
const closemodal = document.querySelector(".modal-close");
const closemodal2 = document.querySelector(".modal-close2");
const closemodal3 = document.querySelector(".modal-close3");
const closemodal4 = document.querySelector(".modal-close4");

openmodal.addEventListener('click', function(){


  mainmodal.style.display = 'block';

});
openmodal2.addEventListener('click', function(){


  mainmodal2.style.display = 'block';
});

openmodal3.addEventListener('click', function(){


  mainmodal3.style.display = 'block';
});
openmodal4.addEventListener('click', function(){


  mainmodal4.style.display = 'block';
});
closemodal.addEventListener('click', function(){

  mainmodal.style.display = 'none';
});
closemodal2.addEventListener('click', function(){

  mainmodal2.style.display = 'none';
});
closemodal3.addEventListener('click', function(){

  mainmodal3.style.display = 'none';
});
closemodal4.addEventListener('click', function(){

  mainmodal4.style.display = 'none';
});


/////////////edit form 


function validateString(string) {
   
   // Defining the regular expression
   let strRegex = new RegExp(/^[a-zA-Zآ-ی\s]+$/);
   
   // match the regex with the string
   let result = strRegex.test(string);
   if (result) {
      return false;
   } else {
      return true;
   }
}

document.forms['edit-form'].onsubmit = function(event){ 
  /////name
  var name = document.getElementById('name1').value;

  
 if( validateString(name) && this.in_u_name.value.trim() != ""){
 
    
    document.querySelector(".in_u_name-error").innerHTML = " نام فقط می‌تواند شامل حروف باشد";
    document.querySelector(".in_u_name-error").style.display = "block";
    event.preventDefault();
  }else if(name.length <3  && this.name1.value.trim() != "")
  {
    document.querySelector(".in_u_name-error").innerHTML = "نام نمی‌تواند از 3 کاراکتر کمتر باشد.";
    document.querySelector(".in_u_name-error").style.display = "block";
    event.preventDefault();

  }
  else {
    let myElement2 = document.querySelector(".in_u_name-error");
   
    myElement2.style.display = "none";
  } 
    /////lastname
    var name = document.getElementById('lastname1').value;

  
    if( validateString(name) && this.in_u_lastname.value.trim() != ""){
    
       
       document.querySelector(".in_u_lastname-error").innerHTML = " نام خانوادگی فقط می‌تواند شامل حروف باشد";
       document.querySelector(".in_u_lastname-error").style.display = "block";
       event.preventDefault();
     }else if(name.length <3 && this.in_u_lastname.value.trim() != "")
     {
       document.querySelector(".in_u_lastname-error").innerHTML = "نام خانوادگی نمی‌تواند از 3 کاراکتر کمتر باشد.";
       document.querySelector(".in_u_lastname-error").style.display = "block";
       event.preventDefault();
   
     }
     else {
       let myElement2 = document.querySelector(".in_u_lastname-error");
      
       myElement2.style.display = "none";
     } 

         /////phonenum
     var phonenum = document.getElementById('phone').value;
     if(phonenum.length>11 || phonenum < 11){
      document.querySelector(".in_u_phone-error").innerHTML = "شماره موبایل باید 11 رقم باشد";
       document.querySelector(".in_u_phone-error").style.display = "block";
       event.preventDefault();

     }
     else if(isNaN(phonenum) && this.in_u_phone.value.trim() != "")
     {
      document.querySelector(".in_u_phone-error").innerHTML = "شماره موبایل نمیتواند شامل حروف  باشد";
      document.querySelector(".in_u_phone-error").style.display = "block";
      event.preventDefault();
     } 
     else{
      let myElement2 = document.querySelector(".in_u_phone-error");
      
      myElement2.style.display = "none";
     }


 
  }

  /////email
  var email = document.getElementById('error_x').innerHTML;
  console.log(email);

  switch(email) {
    case '0':
      alert("ویرایش اطلاعات بدلیل تکراری بودن ایمیل انجام نشد!");
      break;
    case '1':
      alert("ویرایش اطلاعات با موفقیت انجام شد!");
      break;
      case '-1':
        alert("ویرایش اطلاعات بدلیل تکراری بودن شماره موبایل انجام نشد!");
        break;
    default:
      // code block
  }








