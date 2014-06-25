// $(document).ready(function() {  
// var stickyNavTop = $('#nav_menu-5').offset().top;  
  
// var stickyNav = function(){  
// var scrollTop = $(window).scrollTop();  
       
// if (scrollTop > stickyNavTop) {   
//     $('#nav_menu-5').addClass('sticky');  
// } else {  
//     $('#nav_menu-5').removeClass('sticky');   
// }  
// };  
  
// stickyNav();  
  
// $(window).scroll(function() {  
//     stickyNav();  
// });  
// });  


$(document).ready(function() {  
	var initTopPosition= $('.sticky').offset().top;
	$(window).scroll(function(){
	    if($(window).scrollTop() > initTopPosition - 60)
	        $('.sticky').css({'position':'fixed','top':'60px'});
	    else
	        $('.sticky').css({'position':'absolute','top':initTopPosition+'px'});
	});
}); 
