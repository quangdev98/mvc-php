$(document).ready(function(){
	let widthDevice = $(document).outerWidth();
	let footer = document.getElementById('footer');
	let tabControl = $('#tab-controls').outerWidth();	
	// console.log();
	function setFooter(){
		let heightDevice = $(document).height();
		let heightHeader= $('#header').outerHeight();
		let heightBody= $('#wrap-main').outerHeight();
		let heightFooter= $('#footer').outerHeight();
		let sumBody = heightHeader + heightBody + heightFooter;
		if (sumBody < heightDevice) {
			$('footer').removeClass('position');
			$('footer').addClass('position');
		}else{
			$('footer').removeClass('position');
		}
	}
	// 
	function showMenu(){
		let widthDevice = $(document).width();
		if(widthDevice > 768){
			$(".wrapper").css({ 'padding-left': tabControl + 'px', 'transition': "all 0.5s" });
			$('#tab-controls').css({'left': '0%', 'transition': 'all .5s'});
			$('.showMenu').css({ 'display': 'none', 'transition': 'all .5s'});
		} else{
			$('#tab-controls').css({'left': '0%', 'transition': 'all .5s'});
			$('.showMenu').css({ 'display': 'none', 'transition': 'all .5s'});
		}

	}
	function hideMenu(){
		let widthDevice = $(document).width();
		if (widthDevice >768) {
			$(".wrapper").css({ 'padding-left': '0px', 'transition': "all 0.5s" });
			$('#tab-controls').css({'left': '-100%', 'transition': 'all .5s'});
			$('.showMenu').css({ 'display': 'flex', 'transition': 'all .5s'});
		}else{
			$('#tab-controls').css({'left': '-100%', 'transition': 'all .5s'});
			$('.showMenu').css({ 'display': 'flex', 'transition': 'all .5s'});
		}
	}

	$(".hide-menu").click(function(){
		hideMenu()
	})
	$(".showMenu").click(function(){
		showMenu()
	})
	$(".wrapper").css({ 'padding-left': tabControl + 'px', 'transition': "all 0.5s" });
	function responsive(){
		let tabControl = $('#tab-controls').outerWidth();
		let marginWrap = tabControl + 90;
		let widthDevice = $(document).width();
		if(widthDevice > 1800){
		 	$('main#wrap-main .wrapper .wrap-form').css({ 'padding-right': marginWrap + "px" });
		}else {
			$('main#wrap-main .wrapper .wrap-form').css({ 'padding-right': '15%' });
		}
		if (widthDevice < 1280) {
			$('main#wrap-main .wrapper .wrap-form').css({ 'padding-right': '60px' });
		} ;
		if(widthDevice <= 992){
			$('#tab-controls').css({ 'width': '230px'});
			$(".wrapper").css({ 'padding-left': tabControl + 'px', 'transition': "all 0.5s" });
		};
		if(widthDevice > 768){
			$(".wrapper").css({ 'padding-left': tabControl + 'px', 'transition': "all 0.5s" });
			$('#tab-controls').css({'left': '0%', 'transition': 'all .5s'});
		 }else {
			$(".wrapper").css({ 'padding-left': '15px','padding-right': '15px' });
			$('#tab-controls').css({'left': '-100%', 'transition': 'all .5s'});
			$('main#wrap-main .wrapper .wrap-form').css({ 'padding-right': '15px' });
		}
	}
	// scroll
	function scrollMenu(){
		var offset = 1;
		var back_to_top = document.getElementById('header');
		window.addEventListener('scroll', function() {
		    if (pageYOffset > offset) {
		        back_to_top.classList.add('fixed-menu');
		    } else {
		        back_to_top.classList.remove('fixed-menu');
		    };
		});
	}
	setFooter();
	responsive();
	$(window).resize(function(){
		setFooter();
		responsive();
		if(widthDevice < 768){
			scrollMenu();
		}
	});
	// FOOTER
	let d = new Date();
	document.getElementById('fecthYear').innerHTML = d.getFullYear();
	
 })