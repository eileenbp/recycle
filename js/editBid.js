//editmodal
function editBid(){


var mainmodal = document.getElementsByClassName("main-modal");
var openmodal = document.getElementsByClassName("edit_open");
var closemodal = document.getElementsByClassName("modal-close");
 for(let i = 0; i < mainmodal.length; i++ ){

  openmodal[i].addEventListener('click', function(){


  mainmodal[i].style.display = 'block';

});}

for(let i = 0; i < mainmodal.length; i++ ){

closemodal[i].addEventListener('click', function(){

  mainmodal[i].style.display = 'none';
});

}
}

//deletemodal
function deleteBid(){

  
  var mainmodall = document.getElementsByClassName("main-modal2");
  var openmodall = document.getElementsByClassName("delete_open");
  var closemodall = document.getElementsByClassName("modal-close2");
   for(let i = 0; i < mainmodall.length; i++ ){
  
    openmodall[i].addEventListener('click', function(){
  
  
    mainmodall[i].style.display = 'block';
  
  });}
  
  for(let i = 0; i < mainmodall.length; i++ ){
  
  closemodall[i].addEventListener('click', function(){
  
    mainmodall[i].style.display = 'none';
  });
  
  }
  }







