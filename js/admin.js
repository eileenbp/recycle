////////*modal////////
const mainmodal = document.querySelector(".main-modal");
const mainmodal2 = document.querySelector(".main-modal2");
const mainmodal3 = document.querySelector(".main-modal3");

const openmodal = document.querySelector(".open-feed");
const openmodal2 = document.querySelector(".open_per_auth");
const openmodal3 = document.querySelector(".open_job_auth");

const closemodal = document.querySelector(".modal-close");
const closemodal2 = document.querySelector(".modal-close2");
const closemodal3 = document.querySelector(".modal-close3");


openmodal.addEventListener('click', function(){


  mainmodal.style.display = 'block';

});
openmodal2.addEventListener('click', function(){


  mainmodal2.style.display = 'block';
});
openmodal3.addEventListener('click', function(){


  mainmodal3.style.display = 'block';
});
closemodal2.addEventListener('click', function(){

  mainmodal2.style.display = 'none';
});
closemodal3.addEventListener('click', function(){

  mainmodal3.style.display = 'none';
});
closemodal.addEventListener('click', function(){

  mainmodal.style.display = 'none';
});




