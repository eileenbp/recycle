
/////personal authentication form
document.forms['personal-form'].onsubmit = function(event){
  var ncode = document.getElementById('ncode').value;
  var cnum = document.getElementById('cnum').value;

   //////national code
  if(this.national_code.value.trim() === ""){
     document.querySelector(".national_code-error").innerHTML = "کدملی خود  را وارد کنید.";
     document.querySelector(".national_code-error").style.display = "block";
     event.preventDefault();


  }
  

  else if(ncode.length !=10 && this.national_code.value.trim() != ""){

    
    document.querySelector(".national_code-error").innerHTML = "کدملی باید ده رقمی باشد.";
    document.querySelector(".national_code-error").style.display = "block";
    event.preventDefault();
  }

  else if(isNaN(ncode) && this.national_code.value.trim() != ""){

    
    document.querySelector(".national_code-error").innerHTML = "کدملی فقط باید شامل اعداد باشد.";
    document.querySelector(".national_code-error").style.display = "block";
    event.preventDefault();
  }
  else {
    let myElement = document.querySelector(".national_code-error");
   
    myElement.style.display = "none";
  }
 

  /////////acount number

  if(this.count_num.value.trim() === ""){
    document.querySelector(".acount_num-error").innerHTML = "شماره حساب خود را وارد کنید.";
    document.querySelector(".acount_num-error").style.display = "block";
    event.preventDefault();
 }
 else if(cnum.length !=10 && this.count_num.value.trim() != ""){

    
  document.querySelector(".acount_num-error").innerHTML = "شماره حساب باید ده رقم باشد.";
  document.querySelector(".acount_num-error").style.display = "block";
  event.preventDefault();
}
else if(isNaN(cnum) && this.count_num.value.trim() != ""){

    
  document.querySelector(".acount_num-error").innerHTML = "شماره حساب فقط باید شامل اعداد باشد.";
  document.querySelector(".acount_num-error").style.display = "block";
  event.preventDefault();
}
else {
  let myElement1 = document.querySelector(".acount_num-error");
 
  myElement1.style.display = "none";
}

  
   /////////bank
   

   if(this.image.value.trim() === ""){
    document.querySelector(".image-error").innerHTML = "لطفا تصویر کارت ملی خود را انتخاب کنید.";
    document.querySelector(".image-error").style.display = "block";
    event.preventDefault();
 }
 else {
  let myElement2 = document.querySelector(".image-error");
 
  myElement2.style.display = "none";
}
  

}
console.log("slm");

