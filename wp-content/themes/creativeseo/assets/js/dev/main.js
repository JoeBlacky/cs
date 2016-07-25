var app = {}

app.Nav = {
	menuClass: 	 '.main-nav',
	menuTrigger: '.handheld-nav',
	footerNav: 	 '.footer-nav',
	init: function(){
		this.mobileNav(),
		this.switchNav(),
		this.checkPage(),
		this.footerNav()
	},
	checkPage: function(){
		var url = window.location.href;
		var link = $(this.menuClass).find('a');

		link.each(function(){
			if ($(this).attr('href') == url){
				$(this).addClass('active');
			}
		});
	},
	mobileNav: function(){
		$(this.menuTrigger).click(function(){
			$(this).toggleClass('active');
			$($(this).data('trigger')).toggleClass('active');
		});
	},
	switchNav: function(){
		if(!$('.page-intro').length){
			$('body').addClass('secondary-page');
		}
	},
	footerNav: function(){
		var link = $(this.footerNav).find('.menu-item-has-children > a');

		link.click(function(e){
			$(this.footerNav).find('.sub-menu').removeClass('active');
			$(this).next('.sub-menu').toggleClass('active');
			e.preventDefault();
		});
	}
}

app.Contact = {
	contactsBlock: '.contacts',
	mainWidth: 		 1144,
	m: 						 900,
	s: 						 700,
	init: function(){
		this.setClass()
	},
	setClass: function(){
		$(this.contactsBlock).find('textarea').parent().parent().addClass('wide');
		$(this.contactsBlock).find('select').parent().addClass('custom-select');
	}
}

app.Sliders = {
	stageClass: '.stage-slider',
	init: function(){
		this.stageSlider()
	},
	stageSlider : function(){
		var slider = $(this.stageClass);
		var settings = {
			autoWidth: true,
			center:    true,
			loop:      true
		};

		if($(window).innerWidth() <= 1204 ){
			slider.owlCarousel(settings).addClass('owl-carousel');
		} else {
			this.destroySlider(slider);
		}
	},
	destroySlider : function(slider){
		slider.trigger('destroy.owl.carousel').removeClass('owl-carousel owl-loaded');
    slider.find('.owl-stage-outer').children().unwrap();
	}
}

jQuery(function($) {
	app.Nav.init();
	app.Contact.init();
	app.Sliders.init();

	$(window).resize(function(){
		app.Sliders.stageSlider();
	});
});