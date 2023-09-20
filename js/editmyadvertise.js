////edit-sell-form
var forms = document.getElementsByClassName("edit-sell-form");
var title_error= document.getElementsByClassName("title-error");
var price_error = document.getElementsByClassName("price-error");
var w_error= document.getElementsByClassName("w-error");


for(let i = 0; i < forms.length; i++ ){
  forms[i].onsubmit = function(event){
    var input_t =forms[i].elements['title'].value;
    ///title
        if(input_t.trim() === ""){
          title_error[i].innerHTML = "عنوان  را وارد کنید.";
          title_error[i].style.display = "block";
          event.preventDefault();


        }
       
        else {
          
        
          title_error[i].style.display = "none";
        }
        ///w
        var input_w =forms[i].elements['weigth'].value;

            if(input_w.trim() === ""){
              w_error[i].innerHTML = "وزن تقریبی را وارد کنید.";
              w_error[i].style.display = "block";
              event.preventDefault();
    
    
            }
            else if(isNaN(input_w) && input_w.trim() != ""){
    
                
              w_error[i].innerHTML = "وزن تقریبی باید شامل اعداد باشد.";
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
              
            
              price_error[i].style.display = "none";
            }

  


   

    
    
       }
      
    

}


////edit-buy-form
var forms_buy = document.getElementsByClassName("buy_edit_submit");
var title_buy_error= document.getElementsByClassName("title-buy-error");
var w_b_error= document.getElementsByClassName("w-b-error");
var price_b_error = document.getElementsByClassName("price-b-error");





for(let i = 0; i < forms_buy.length; i++ ){
  forms_buy[i].onsubmit = function(event){
    var input_t_b =forms_buy[i].elements['title'].value;

    ///title
        if(input_t_b.trim() === ""){

          title_buy_error[i].innerHTML = "عنوان  را وارد کنید.";
          title_buy_error[i].style.display = "block";
          event.preventDefault();


        }
       
        else {
          
        
         
          title_buy_error[i].style.display = "none";
        }
                ///w
                var input_w =forms_buy[i].elements['weigth'].value;

                if(input_w.trim() === ""){
                  w_b_error[i].innerHTML = "وزن تقریبی را وارد کنید.";
                  w_b_error[i].style.display = "block";
                  event.preventDefault();
        
        
                }
                else if(isNaN(input_w) && input_w.trim() != ""){
        
                    
                  w_b_error[i].innerHTML = "وزن تقریبی باید شامل اعداد باشد.";
                  w_b_error[i].style.display = "block";
                  event.preventDefault();
                }
                else {
                  
                
                  w_b_error[i].style.display = "none";
                }
              // ///price
            var input_p =forms_buy[i].elements['price'].value;

            if(input_p.trim() === ""){
              price_b_error[i].innerHTML = "قیمت تقریبی را وارد کنید.";
              price_b_error[i].style.display = "block";
              event.preventDefault();
            
            
            }
            else if(isNaN(input_p) && input_p.trim() != ""){
            
                
              price_b_error[i].innerHTML = "قیمت باید شامل اعداد باشد.";
              price_b_error[i].style.display = "block";
              event.preventDefault();
            }else if(input_p < 100000){
                
              price_b_error[i].innerHTML = "قیمت پیشنهادی شما باید حداقل صدهزار تومان باشد.";
              price_b_error[i].style.display = "block";
              event.preventDefault();
            
            }
            else {
              
            
              price_b_error[i].style.display = "none";
            }
        
       

  


   

    
    
       }
      
    

}



////edit-auction-form
var forms_auc = document.getElementsByClassName("auction_edit_submit");
var title_a_error= document.getElementsByClassName("title-a-error");
var w_a_error= document.getElementsByClassName("w-b-error");





for(let i = 0; i < forms_auc.length; i++ ){
  forms_auc[i].onsubmit = function(event){
    var input_t_b =forms_auc[i].elements['title'].value;

    ///title
        if(input_t_b.trim() === ""){

          title_a_error[i].innerHTML = "عنوان  را وارد کنید.";
          title_a_error[i].style.display = "block";
          event.preventDefault();


        }
       
        else {
          
        
         
          title_a_error[i].style.display = "none";
        }
                ///w
                var input_w =forms_auc[i].elements['weigth'].value;

                if(input_w.trim() === ""){
                  w_a_error[i].innerHTML = "وزن تقریبی را وارد کنید.";
                  w_a_error[i].style.display = "block";
                  event.preventDefault();
        
        
                }
                else if(isNaN(input_w) && input_w.trim() != ""){
        
                    
                  w_a_error[i].innerHTML = "وزن تقریبی باید شامل اعداد باشد.";
                  w_a_error[i].style.display = "block";
                  event.preventDefault();
                }
                else {
                  
                
                  w_a_error[i].style.display = "none";
                }
         
        
       

  


   

    
    
       }
      
    

}








