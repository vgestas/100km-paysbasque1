jQuery(document).ready(function ($) {
    $(window).scroll(function (e) {
		const $menu = $("nav.navbar-classic navbar navbar-custom")
		if ($(this).scrollTop() > 214) {
			$menu.addClass("fixed-position");
		} else {
			$menu.removeClass("fixed-position");
		}

	});
}