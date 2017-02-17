$(document).ready(main);
var mover = true;
function main() {
	$(".boton").click(function(){
		if (mover) {
			$("nav").animate({
				left: "0px"
			});
			mover = false;
		}
		else {
			$("nav").animate({
				left: "-100%"
			});
			mover = true;
		}
	});
	$(".boton-inferior").click(function(){
		if (mover) {
			$("nav").animate({
				left: "0px"
			});
			mover = false;
		}
		else {
			$("nav").animate({
				left: "-100%"
			});
			mover = true;
		}
	});
	$(".submenu").click(function(){
		$(this).children(".children").slideToggle();
		$(this).toggleClass('girar');
	});
}