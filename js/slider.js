

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


