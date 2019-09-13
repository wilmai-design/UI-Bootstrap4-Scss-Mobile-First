(function ($) {
	$(document).ready(function($) {
		$("#menu-toggle").click(function (e) {
			e.preventDefault();
			$("#wrapper").toggleClass("active");
		})
		
		if($.cookie('contraste_user') == null || $.cookie('contraste_user') == undefined){
			$.cookie('contraste_user', 'no', { expires: 7, path: '/' });
		}
			
		if ($.cookie('contraste_user') == 'yes') {
			$('body').addClass("with-contraste");
		} else {
			$('body').removeClass("with-contraste");
		}
		
		$('.btn-set-contraste').click(function (e) {
			e.preventDefault();
			if ($.cookie('contraste_user') == 'no') {
				$.cookie('contraste_user', 'yes', { expires: 7, path: '/' });
				$('body').addClass("with-contraste");
			} else {
				$.cookie('contraste_user', 'no', { expires: 7, path: '/' });
				$('body').removeClass("with-contraste");
			}
		});
	
		  /*Main menu*/
		  $(".dropdown").hover(
			function () {
			  $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("fast");
			  $(this).toggleClass('open');
			},
			function () {
			  $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("fast");
			  $(this).toggleClass('open');
			}
		  );
/* 			$(".nav a").on("click", function(){
			  $(".nav").find(".active").removeClass("active");
			  $(this).parent().addClass("active");
		  }); */
		  /*Scroll Spy*/
		  //$('body').scrollspy({ target: '#spy', offset:80});

		  /*Smooth link animation*/
		  $('#spy a').click(function () {
			if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

			  var target = $(this.hash);
			  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			  if (target.length) {
				$('html,body').animate({
				  scrollTop: target.offset().top
				}, 400);
				return false;
			  }
			}
		  });
		
		$('a[href][rel=external]').attr('target', '_blank');
		var anchoPantalla = $( window ).width();
		//Centrar Modales
		var modalVerticalCenterClass = ".modal";
		function centerModals($element) {
			var $modals;
			if ($element.length) {
				$modals = $element;
				} else {
				$modals = $(modalVerticalCenterClass + ':visible');
			}
			$modals.each( function(i) {
				var $clone = $(this).clone().css('display', 'block').appendTo('body');
				var top = Math.round(($clone.height() - $clone.find('.modal-content').height()) / 2);
				top = top > 0 ? top : 0;
				$clone.remove();
				$(this).find('.modal-content').css("margin-top", top);
			});
		}
		$(modalVerticalCenterClass).on('show.bs.modal', function(e) {
			centerModals($(this));
		});
		
		$(window).on('resize', centerModals);
	
		$("#redes-sociales-interno").jsSocials({
			shares: [ "facebook", "twitter", "linkedin", "whatsapp", { share: "email", logo: "fa fa-envelope" }],
			showLabel: false,
			shareIn: "popup",
			showCount: false
		});
		
		//Placeholder Buscar...
		$( ".views-widget-filter-combine input[name$='title']" ).attr( "placeholder", "Buscar..." );
		$( ".views-widget-filter-title input[name$='title']" ).attr( "placeholder", "Buscar..." );
		$( ".views-widget-filter-combine input[name$='keys']" ).attr( "placeholder", "Buscar..." );
		$( ".views-widget-filter-combine input[name$='combine']" ).attr( "placeholder", "Buscar..." );

		/*INI: Funcionalidad Tabs Servicios Online*/
		var firstDescription = $(".tab-servicio-online").first().attr("data-description");
		$("ul.quicktabs-tabs").after('<p id="description-tab-servicio-online">'+firstDescription+'</p>');

		$(".tab-servicio-online").click(function(){
			var description = $(this).attr("data-description");
			$("#description-tab-servicio-online").text(description);
		});
		/*FIN: Funcionalidad Tabs Servicios Online*/

		/*INI: Toogle search menu*/
		$(".open-searchbox").click(function(){
			$(".header-me-search").addClass("activebox");
		});
	
		$(".close-searchbox").click(function(){
			$(".header-me-search").removeClass("activebox");
		});
		/*FIN: Toogle search menu*/
		
		/*INI: funciones flechas footer*/
		document.getElementById("back-arrow").addEventListener("click", function(){
			window.history.back();
		});

		document.getElementById("top-arrow").addEventListener("click", function(){
			var scrollToTop = window.setInterval(function(){
				var pos = window.pageYOffset;
				if(pos > 0){
					window.scrollTo(0, pos - 20); // how far to scroll on each step
				} else {
					window.clearInterval(scrollToTop);
				}
			}, 2); // how fast to scroll (this equals roughly 60 fps)
		});
		/*FIN: funciones flechas footer*/

		/*INI: Iconos Sala de Prensa*/
		var iconosSalaPrensa = $('ul#lista-sala-prensa li').length;
		if(iconosSalaPrensa==0){
			$("#contenedor-iconos-sala-prensa").hide();
		}
		/*FIN: Iconos Sala de Prensa*/

		/*INI: Funcion para igualar la altura de contenedores con diferentes padres*/
		function findHeight(el){
			var heightArr = [];
			$(el).each(function(){
				heightArr.push($(this).outerHeight());
			});
			var tallest = Math.max.apply(null, heightArr);
			$(el).css('height', tallest);
			heightArr = [];
		};

		function querie(media) {
			if (media.matches) { // If media query matches
				findHeight('.view-noticias-secundarias .card');
			} 
		}
		  
		  var x = window.matchMedia("(min-width: 992px)")
		  querie(x) // Call listener function at run time
		  x.addListener(querie) // Attach listener function on state changes
		/*FIN: funcion*/


		/*INI: Funcionalidad acordeon toggle menu movil*/
		$(".visible-xs-block #block-views-7389e2dae807a07e25887fd24bd39798 .view-header h3").replaceWith(
		'<h3><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="accordionHeading"> Preguntas Frecuentes <i class="more-less glyphicon glyphicon-triangle-bottom"></i></a></h3>'
		);
		$(".visible-xs-block #block-views-7389e2dae807a07e25887fd24bd39798 .view-content").attr('id','collapseOne');
		$(".visible-xs-block #block-views-7389e2dae807a07e25887fd24bd39798 .view-content").addClass('panel-collapse collapse')
		$(".visible-xs-block #block-block-7 h3").replaceWith(
			'<h3><a role="button" data-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" class="accordionHeading"> Documentos <i class="more-less glyphicon glyphicon-triangle-bottom"></i></a></h3>'
			);
		$(".visible-xs-block #block-block-7 ul").attr('id','collapseTwo');
		$(".visible-xs-block #block-block-7 ul").addClass('panel-collapse collapse');
		function toggleIcon(e) {
			console.log('toggle');
			$(e.target)
				$(this)
				.find(".more-less")
				.toggleClass('glyphicon-triangle-bottom glyphicon-triangle-top');
		}
		$('.accordionHeading ').on('click', toggleIcon);
        /*FIN: Funcionalidad acordeon toggle menu movil*/
		
	});
}(jQuery));