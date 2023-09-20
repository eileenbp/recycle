var forms = document.getElementsByClassName("mybid-edit-form");
var w_error = document.getElementsByClassName("w-error");
var price_error = document.getElementsByClassName("price-error");
var auc_weight = document.getElementsByClassName("weight_auc");
// for(let i = 0; i < auc_weight.length; i++){
//   var ss =auc_weight[i].innerHTML
//   console.log(ss);
// }


for(let i = 0; i < forms.length; i++ ){
  forms[i].onsubmit = function(event){
    var input_w =forms[i].elements['w'].value;
    ///w
        if(input_w.trim() === ""){
          w_error[i].innerHTML = "وزن تقریبی را وارد کنید.";
          w_error[i].style.display = "block";
          event.preventDefault();


        }
        else if(isNaN(input_w) && input_w.trim() != ""){

            
          w_error[i].innerHTML = "وزن تقریبی باید شامل اعداد باشد.";
          w_error[i].style.display = "block";
          event.preventDefault();
        }else if(Number(input_w) > Number(auc_weight[i].innerHTML)){
            
          w_error[i].innerHTML ="وزن تقریبی پیشنهادی شما نمیتواند از وزن مزایده بیشتر باشد."+"وزن مزایده:  "+auc_weight[i].innerHTML;
          w_error[i].style.display = "block";
          event.preventDefault();

        }
        else {
          
        
          w_error[i].style.display = "none";
        }

    // ///price
          var input_p =forms[i].elements['price'].value;

          if(input_p.trim() === ""){
            price_error[i].innerHTML = "قیمت تقریبی را وارد کنید.";
            price_error[i].style.display = "block";
            event.preventDefault();
          
          
          }
          else if(isNaN(input_p) && input_p.trim() != ""){
          
              
            price_error[i].innerHTML = "قیمت باید شامل اعداد باشد.";
            price_error[i].style.display = "block";
            event.preventDefault();
          }else if(input_p < 100000){
              
            price_error[i].innerHTML = "قیمت پیشنهادی شما باید حداقل صدهزار تومان باشد.";
            price_error[i].style.display = "block";
            event.preventDefault();
          
          }
          else {
            
          
            price_error_error[i].style.display = "none";
          }





   

    
    
       }
      
    

}








