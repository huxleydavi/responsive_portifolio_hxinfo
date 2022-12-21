$(function(){

	//Aqui vai todo nosso código de javascript.
	$('.mobile').click(function(){
		//O que vai acontecer quando clicarmos na nav.mobile!
		var listaMenu = $('.mobile ul');
		//Abrir menu através do fadein
		/*
		if(listaMenu.is(':hidden') == true){
			listaMenu.fadeIn();
		}
		else{
			listaMenu.fadeOut();
		}
		*/

		//Abrir ou fechar sem efeitos
		/*
		
		if(listaMenu.is(':hidden') == true){
			//listaMenu.show();
			listaMenu.css('display','block');
		}
		else{
			//listaMenu.hide();
			listaMenu.css('display','none');
		}
		*/

		if(listaMenu.is(':hidden') == true){
			//fa fa-times
			//fa fa-bars
			//var icone =  $('.botao-menu-mobile i');
			var icone = $('.botao-menu-mobile').find('i');
			icone.removeClass('fa-bars');
			icone.addClass('fa-times');
			listaMenu.slideToggle();
		}
		else{
			var icone = $('.botao-menu-mobile').find('i');
			icone.removeClass('fa-times');
			icone.addClass('fa-bars');
			listaMenu.slideToggle();
		}

	});

	if($('target').length > 0){
		//O elemento existe, portanto precisamos dar o scroll em algum elemento.
		var elemento = '#'+$('target').attr('target');

		var divScroll = $(elemento).offset().top;

		$('html,body').animate({scrollTop:divScroll},1500);
	}

})