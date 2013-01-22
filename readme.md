## Stripe Bundle

Stripe Laravel bundle is simple API wrapper for Stripe's PHP API.

Install using Artisan CLI:

	php artisan bundle:install stripe


Either auto-load the bundle in application/bundles.php:

	return array(
		'stripe' => array('auto'=>true)
	);

Or manually start:

	Bundle::start('stripe');

You can than use the Stripe API like normal (see Stripe API https://stripe.com/docs/api?lang=php)

	Stripe::setApiKey("YOUR_KEY");
	Stripe_Charge::create(array(
		"amount" => 40000,
		"currency" => "usd",
		"card" => "tok_Ydsdsedsad", // obtained with Stripe.js
		"description" => "Donation because you rock!")
	);


If you don't want to call Stripe::setApiKey("YOUR_KEY"); all the time you can create a stripe.php config file with the following entry:

	return array(
		'api_key' => 'YOUR_KEY',
		'api_version' => 'VERSION'
	);

Stripe has introduced a version number to avoid breaking changes.  

##Current Stripe Versions

- Stripe PHP library is 1.7.12 (see https://github.com/stripe/stripe-php)
- Stripe API version is 2012-11-07 (see https://stripe.com/docs/upgrades)

Stripe is an payment company with a simple API and a reasonable fee structure.

- Homepage:		   https://stripe.com/
- PHP API: 	  	   https://stripe.com/docs/api?lang=php
- Documentation:   https://stripe.com/docs 
