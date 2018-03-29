((function ( w, d) {
	'use strict';
	var $form = d.querySelector("[data-js='form']");
	var $email = d.querySelector("[data-js='email']");
	$email.focus();

	$form.addEventListener( 'submit', function (s) {
		if (!$email.value) {
			s.preventDefault();
			w.alert("Informe o seu email!");
			$email.focus();
		}
	}, false);
})( window, document))