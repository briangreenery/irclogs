<?php

Basset::collection('application', function($collection) {
	$collection->add('components/normalize-css/normalize.css');
	$collection->add('app/css/styles.css');

	$collection->add('components/jquery/dist/jquery.min.js');
	$collection->add('components/jquery-waypoints/waypoints.min.js');
	$collection->add('components/jquery-linkify/jquery.linkify.js');
	$collection->add('app/js/scripts.js');
	$collection->add('app/js/infinite-scrolling.js');
});
