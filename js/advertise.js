
document.forms['advertise-form'].onsubmit = function(event){

  var weight = document.getElementById('cnum1').value;

//////title
  if(this.title.value.trim() === ""){
    document.querySelector(".title-error").innerHTML = "عنوان آگهی را وارد کنید.";
    document.querySelector(".title-error").style.display = "block";
    event.preventDefault();


  }
  else {
    let myElement2 = document.querySelector(".title-error");
   
    myElement2.style.display = "none";
  }

///w
if(this.w.value.trim() === ""){
  document.querySelector(".w-error").innerHTML = "وزن تقریبی را وارد کنید.";
  document.querySelector(".w-error").style.display = "block";
  event.preventDefault();


}
else if(isNaN(weight) && this.w.value.trim() != ""){

    
  document.querySelector(".w-error").innerHTML = "وزن تقریبی باید شامل اعداد باشد.";
  document.querySelector(".w-error").style.display = "block";
  event.preventDefault();
}
else {
  let myElement2 = document.querySelector(".w-error");
 
  myElement2.style.display = "none";
}


 /////price
 

 var adver = document.getElementById('adver').value;
 if (adver=="sell" || adver=="buy" ){
  var gheymat = document.getElementById('cnum2').value;
  if(this.price.value.trim() === ""){


    document.querySelector(".price-error").innerHTML = "قیمت را وارد کنید.";
    document.querySelector(".price-error").style.display = "block";
    event.preventDefault();
 
 
  }
  else if(isNaN(gheymat) && this.price.value.trim() != ""){
 
    
    document.querySelector(".price-error").innerHTML = "قیمت باید شامل اعداد باشد.";
    document.querySelector(".price-error").style.display = "block";
    event.preventDefault();
  }else if(gheymat<100000){
  
    document.querySelector(".price-error").innerHTML = "قیمت پیشنهادی شما باید حداقل صدهزار تومان باشد.";
    document.querySelector(".price-error").style.display = "block";
    event.preventDefault();
  
   }
  else {
    let myElement2 = document.querySelector(".price-error");
   
    myElement2.style.display = "none";
  } 

 }

 ///file

if(this.fileToUpload.value.trim() === ""){
  document.querySelector(".fileToUpload-error").innerHTML = "فایل عکس خود را بارگذاری کنید.";
  document.querySelector(".fileToUpload-error").style.display = "block";
  event.preventDefault();


}
else {
  let myElement2 = document.querySelector(".fileToUpload-error");
 
  myElement2.style.display = "none";
}

  /////date
 
  var start_date = document.getElementById('start_date').value;
  var end_date = document.getElementById('end_date').value;
  console.log(start_date);
  console.log(end_date);

 
  if(end_date < start_date){
 
 
    document.querySelector(".end_date-error").innerHTML = "تاریخ پایان نمیتواند از تاریخ شروع کوچکتر باشد.";
    document.querySelector(".end_date-error").style.display = "block";
    event.preventDefault();
 
 
  }
 
  else {
    let myElement2 = document.querySelector(".end_date-error");
   
    myElement2.style.display = "none";
  } 


}