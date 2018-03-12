(function ($) {
	$('#ecos-mobile-toggle').on('click toucstart', function () {
		$(this).parent().addClass('background-color4');
		$('.nav-menu-mobile').slideToggle();
		return false;
	});
	$('#selecionar-cidade').click(function () {
		$('.formulario-tempo').slideToggle();
		$('#cidade-tempo').val('');
		return false;
	});
	$('#fecha-selecionar-cidade').click(function () {
		$('.formulario-tempo').hide('slow');
		return false;
	});
	var municipios = [{
		value: 'Acrelândia',
		data: 'acrelandia'
	}, {
		value: 'Assis Brasil',
		data: 'assis+brasil'
	}, {
		value: 'Brasiléia',
		data: 'brasileia'
	}, {
		value: 'Bujari',
		data: 'bujari'
	}, {
		value: 'Capixaba',
		data: 'capixaba'
	}, {
		value: 'Cruzeiro do sul',
		data: 'cruzeiro+do+sul'
	}, {
		value: 'Epitaciolância',
		data: 'epitaciolandia'
	}, {
		value: 'Feijó',
		data: 'feijo'
	}, {
		value: 'Jordão',
		data: 'jordao'
	}, {
		value: 'Mâncio lima',
		data: 'mancio+lima'
	}, {
		value: 'Manoel urbano',
		data: 'manoel+urbano'
	}, {
		value: 'Marechal Thaumaturgo',
		data: 'marechal+thaumaturgo'
	}, {
		value: 'Plácido de castro',
		data: 'placido+de+castro'
	}, {
		value: 'Porto acre',
		data: 'porto+acre'
	}, {
		value: 'Rio Branco',
		data: 'rio+branco'
	}, {
		value: 'Rodrigues alves',
		data: 'rodrigues+alves'
	}, {
		value: 'Santa rosa do purus',
		data: 'santa+rosa+do+purus'
	}, {
		value: 'Sena madureira',
		data: 'sena+madureira'
	}, {
		value: 'Senador guiomard',
		data: 'senador+guiomard'
	}, {
		value: 'Tarauacá',
		data: 'tarauaca'
	}, {
		value: 'Xapuri',
		data: 'xapuri'
	}];
	var urlprevisao = "http://api.openweathermap.org/data/2.5/weather?q=rio+branco,AC";
	weatherload(urlprevisao);
	$('#cidade-tempo').autocomplete({
		lookup: municipios,
		onSelect: function (suggestion) {
			urlprevisao = "http://api.openweathermap.org/data/2.5/weather?q=" + suggestion.data + ",AC";
			weatherload(urlprevisao);
		}
	});
	$('#search-cidade-tempo').click(function () {
		weatherload(urlprevisao);
	});
	var $window = $(window);
	var nav = $('.ecos-header');
	$window.scroll(function () {
		if ($window.scrollTop() >= 400) {
			nav.addClass('fixed-header');
		} else {
			nav.removeClass('fixed-header');
		}
	});
	$('.playerprincipal, .playmv').on('click toucstart', function(){
		var queryString = $(this).attr('href').slice( $(this).attr('href').indexOf('?') + 1);
		var queryVars = $.parseQuery( queryString );
		if ( 'v' in queryVars ){
			var vidWidth = 560; // default
			var vidHeight = 475; // default
			// if ( $(this).attr('data-width') ) { vidWidth = parseInt($(this).attr('data-width')); }
			// if ( $(this).attr('data-height') ) { vidHeight =  parseInt($(this).attr('data-height')); }
			var iFrameCode = '<iframe width="' + vidWidth + '" height="'+ vidHeight +'" scrolling="no" allowtransparency="true" allowfullscreen="true" src="http://www.youtube.com/embed/'+  queryVars['v'] +'?rel=0&wmode=transparent&showinfo=0" frameborder="0"></iframe>';
			$('#modalMovie .modal-body').html(iFrameCode);
			$('#modalMovie').on('show.bs.modal', function () {
				// var modalBody = $(this).find('.modal-body');
				// var modalDialog = $(this).find('.modal-dialog');
				// var newModalWidth = vidWidth + parseInt(modalBody.css("padding-left")) + parseInt(modalBody.css("padding-right"));
				// newModalWidth += parseInt(modalDialog.css("padding-left")) + parseInt(modalDialog.css("padding-right"));
				// newModalWidth += 'px';
				// Set width of modal (Bootstrap 3.0)
			    // $(this).find('.modal-dialog').css('width', newModalWidth);
			});
			$('#modalMovie').modal();
		}
		return false;
	});
	$('#modalMovie').on('hidden.bs.modal', function () {
		$('#modalMovie .modal-body').html('');
	});
})(jQuery);

function weatherload(url) {
	$.ajax({
		url: url,
		dataType: 'json',
		success: function (retorno) {
			var tmin = Math.round(10 * (retorno.main.temp_min - 273.15)) / 10;
			var tmax = Math.round(10 * (retorno.main.temp_max - 273.15)) / 10;
			$('.temp-quente').html(tmin.toFixed(0) + 'º');
			$('.temp-frio').html(tmax.toFixed(0) + 'º');
			$('#icon-temp').removeClass();
			$('#icon-temp').addClass(iconWeather(retorno.weather[0].icon));
			$('#icon-temp').attr('title', retorno.weather[0].description);
			$('#city-selecionado').html(retorno.name + ', AC');
			$('.formulario-tempo').hide();
			$('.containerPrevisaoTempo').show();
			$('.loading-previsao').hide();
		},
		beforeSend: function () {
			$('.containerPrevisaoTempo').hide();
			$('.loading-previsao').show();
		},
		error: function () {}
	});
}

function iconWeather(icon) {
	switch (icon) {
	case '01d':
		return 'sprite sprite-tempo sprite-tempo-CC';
		break;
	case '01n':
		return 'sprite sprite-tempo sprite-tempo-CC-N';
		break;
	case '02d':
		return 'sprite sprite-tempo sprite-tempo-PN';
		break;
	case '02n':
		return 'sprite sprite-tempo sprite-tempo-PN-N';
		break;
	case '03d':
		return 'sprite sprite-tempo sprite-tempo-NE';
		break;
	case '03n':
		return 'sprite sprite-tempo sprite-tempo-NE-N';
		break;
	case '04d':
		return 'sprite sprite-tempo sprite-tempo-NB';
		break;
	case '04n':
		return 'sprite sprite-tempo sprite-tempo-NB-N';
		break;
	case '09d':
		return 'sprite sprite-tempo sprite-tempo-PI';
		break;
	case '09n':
		return 'sprite sprite-tempo sprite-tempo-PI-N';
		break;
	case '10d':
		return 'sprite sprite-tempo sprite-tempo-CA';
		break;
	case '10n':
		return 'sprite sprite-tempo sprite-tempo-CA-N';
		break;
	case '11d':
		return 'sprite sprite-tempo sprite-tempo-TV';
		break;
	case '11n':
		return 'sprite sprite-tempo sprite-tempo-TV-N';
		break;
	case '50d':
		return 'sprite sprite-tempo sprite-tempo-PC';
		break;
	case '50n':
		return 'sprite sprite-tempo sprite-tempo-PC-N';
		break;
	default:
	}
}