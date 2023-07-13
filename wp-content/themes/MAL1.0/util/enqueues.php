<?php
// all script and style enqueues go in this file
wp_enqueue_style('main', get_template_directory_uri(). '/assets/dist/main.css', [], current_time('timestamp', true));
wp_enqueue_script('flowbite', get_template_directory_uri(). './node_modules/flowbite/dist/flowbite.min.js', [],  current_time('timestamp', true));