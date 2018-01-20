var owl = $('.owl-carousel');
owl.owlCarousel({
items:5,
loop:true,
margin:80,
autoplay:true,
autoplayTimeout:2500,
autoplayHoverPause:true,
responsive:{
0:{
items:1
},
600:{
items:3
},
1000:{
items:5
}
}
});
$('.play').on('click',function(){
owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
owl.trigger('stop.owl.autoplay')
})
$(document).ready(function(){
$('.owl-carousel').owlCarousel();
});