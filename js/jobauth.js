/////job authentication form
document.forms['job-form'].onsubmit = function(event){
  var ncompany = document.getElementById('ncompany').value;
  var landnum = document.getElementById('landnum').value;
  var postcode = document.getElementById('postcode').value;

   //////company name
  if(this.company_name.value.trim() === ""){
     document.querySelector(".company_name-error").innerHTML = "نام شرکت خود را وارد کنید.";
     document.querySelector(".company_name-error").style.display = "block";
     event.preventDefault();


  }
  
  else {
    let myElement3 = document.querySelector(".company_name-error");
   
    myElement3.style.display = "none";
  }
 

  /////////company national

  if(this.company_national.value.trim() === ""){
    document.querySelector(".company_national-error").innerHTML = "شناسه ملی خود را وارد کنید.";
    document.querySelector(".company_national-error").style.display = "block";
    event.preventDefault();
 }
 else if(ncompany.length !=11 && this.company_national.value.trim() != ""){

    
  document.querySelector(".company_national-error").innerHTML = "شناسه ملی  باید یارده رقم باشد.";
  document.querySelector(".company_national-error").style.display = "block";
  event.preventDefault();
}
else if(isNaN(ncompany) && this.company_national.value.trim() != ""){

    
  document.querySelector(".company_national-error").innerHTML = "شناسه ملی  فقط باید شامل عدد باشد.";
  document.querySelector(".company_national-error").style.display = "block";
  event.preventDefault();
}
 else {
  let myElement4 = document.querySelector(".company_national-error");
 
  myElement4.style.display = "none";
}

  
   /////////landline num
   

   if(this.landline_num.value.trim() === ""){
    document.querySelector(".landline_num-error").innerHTML = "شماره تلفن ثابت خود را وارد کنید.";
    document.querySelector(".landline_num-error").style.display = "block";
    event.preventDefault();
 }
 else if(landnum.length !=8 && this.landline_num.value.trim() != ""){

    
  document.querySelector(".landline_num-error").innerHTML = "شماره تلفن باید هشت رقم باشد.";
  document.querySelector(".landline_num-error").style.display = "block";
  event.preventDefault();
}
else if(isNaN(landnum) && this.landline_num.value.trim() != ""){

    
  document.querySelector(".landline_num-error").innerHTML = "شماره تلفن فقط باید شامل عدد باشد.";
  document.querySelector(".landline_num-error").style.display = "block";
  event.preventDefault();
}
 else {
  let myElement5 = document.querySelector(".landline_num-error");
 
  myElement5.style.display = "none";
}
/////////postal code

if(this.postal_code.value.trim() === ""){
  document.querySelector(".postal_code-error").innerHTML = "کدپستی شرکت خود را وارد کنید.";
  document.querySelector(".postal_code-error").style.display = "block";
  event.preventDefault();
}
else if(postcode.length !=10 && this.postal_code.value.trim() != ""){

  
document.querySelector(".postal_code-error").innerHTML = "کدپستی باید ده رقم باشد.";
document.querySelector(".postal_code-error").style.display = "block";
event.preventDefault();
}
else if(isNaN(postcode) && this.postal_code.value.trim() != ""){

    
  document.querySelector(".postal_code-error").innerHTML = "کدپستی فقط باید شامل عدد باشد.";
  document.querySelector(".postal_code-error").style.display = "block";
  event.preventDefault();
}
else {
let myElement6 = document.querySelector(".postal_code-error");

myElement6.style.display = "none";
}
/////////address

if(this.address.value.trim() === ""){
  document.querySelector(".address-error").innerHTML = "آدرس شرکت خود را وارد کنید.";
  document.querySelector(".address-error").style.display = "block";
  event.preventDefault();


}

else {
 let myElement3 = document.querySelector(".address-error");

 myElement3.style.display = "none";
}

}