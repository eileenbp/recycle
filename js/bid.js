//modal

const mainmodal = document.querySelector(".main-modal");

const openmodal = document.querySelector(".bid_open");
const closemodal = document.querySelector(".modal-close");


openmodal.addEventListener('click', function(){


  mainmodal.style.display = 'block';

});

closemodal.addEventListener('click', function(){

  mainmodal.style.display = 'none';
});



/////validation
document.forms['bid-form'].onsubmit = function(event){
///w
var weight = document.getElementById('w1').value;
var weight_auc = document.getElementById('weight').innerHTML;


 

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
else if(Number(weight_auc) < Number(weight)){

  document.querySelector(".w-error").innerHTML = "وزن تقریبی پیشنهادی شما نمیتواند از وزن مزایده بیشتر باشد.";
  document.querySelector(".w-error").style.display = "block";
  event.preventDefault();


}
else {
  let myElement2 = document.querySelector(".w-error");
 
  myElement2.style.display = "none";
}
 /////price
 
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
