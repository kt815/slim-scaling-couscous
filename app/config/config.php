<?php

$settings = [];
$settings['app'] = [ 'app_mode' => getenv('app.mode')  ];
$mode = Config::set($settings);
