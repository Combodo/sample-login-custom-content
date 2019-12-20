$(document).ready(function () {
	$('input[type="password"]').on('focus', () => {
		$('.hand, .arm').addClass('password');
	}).on('focusout', () => {
		$('.hand, .arm').removeClass('password');
	});;
})