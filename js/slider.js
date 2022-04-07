
/* if(screen.width > 800){
  $('.sliders-show').slick({
    
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
  }); 
}else if(screen.width < 450){
  $('.sliders-show').slick({
    
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
}); 
}else{
  $('.sliders-show').slick({
    
    slidesToShow: 2,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
}); 
} */
var x = document.getElementsByClassName("menu-principal-container");
$('.menu-toggle').click(function(){
  console.log('le di');
  
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
});

$('.sliders-show').slick({
    
  slidesToShow: 2,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
}); 


