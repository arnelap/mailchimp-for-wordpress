<?php

echo 'Welcome to the Mailchimp for WordPress Test Suite' . PHP_EOL;

require __DIR__ . '/mock.php';

// HTML API of WordPress 6.2, the oldest version that has it
foreach (['span', 'text-replacement', 'attribute-token', 'tag-processor'] as $file) {
    require dirname(__DIR__) . "/vendor/johnpbloch/wordpress-core/wp-includes/html-api/class-wp-html-{$file}.php";
}

require dirname(__DIR__) . '/autoload.php';
require __DIR__ . '/MC4WP_Sample_Integration.php';
require __DIR__ . '/MC4WP_Fake_Connected_Sites_API.php';
require __DIR__ . '/MC4WP_Fake_Log.php';
