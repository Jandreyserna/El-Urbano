
$(document).ready(function(){
  var x = document.getElementsByClassName("menu-principal-container");
  $('.menu-toggle').click(function(){
    console.log('le di');
    
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  });


});



