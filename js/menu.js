$(document).ready(main);
if (screen.width <= 900 ){
    $('.menu').toggle();
}

function main(){
    $('.menu_bar').click(function(){
        $('.menu').toggle();
    })
}