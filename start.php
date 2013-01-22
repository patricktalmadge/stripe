<?php

// map class name to file
Autoloader::map(array(
	'Stripe' => __DIR__.'/library/Stripe.php',
));

Stripe::setApiKey(Config::get('stripe.api_key', ''));
Stripe::setApiVersion(Config::get('stripe.api_version', ''));

?>