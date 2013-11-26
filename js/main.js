$( function() {

	$('.latest').removeClass('hide');
	$('.latest').hide().eq(0).show();

	setInterval( function() {
		heroBg();
	}, 30000);


	$('#home-search-adv').on('click', function() {
		$('#home-search-more').toggle();
	});

	$(window).on('resize', function() {
		footer();		
	})

	init();

});

function heroBg() {
	$('#hero .wrap img').stop(1,1).css({ left: 0 });
	$('#hero .wrap img').animate({ left: -1367 }, 30000);
}

function footer() {
	var offset = $('#nav-main').outerHeight()+$('#title').outerHeight()+$('#main').outerHeight();
	var wh = $(window).height();
	var footer = $('#footer').outerHeight();
	if (wh>offset) {
		var diff = wh-offset;
		var main = $('#main').innerHeight();
		$('#main').css('height',1+main+diff-footer);
	}
	else {
		$('#main').css('height','');
	}
}

function init() {
	heroBg();
	footer();
	tips();
}

function tips() {
	$('acronym').on('click', function() { 
		alert($(this).attr('title'));
	});
} 