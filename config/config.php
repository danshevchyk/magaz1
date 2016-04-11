<?php

Config::set('site_name','MagaZ.com.ua');

Config::set('languages', array('en','ru'));

Config::set('routes', array(
    'default' => '',
    'admin' => 'admin_',
));

Config::set('default_route', 'default');
Config::set('default_language', 'ru');
Config::set('default_controller', 'pages');
Config::set('default_action', 'index');

<<<<<<< HEAD
Config::set('db.host', 'db3.ho.ua');
Config::set('db.user', 'magaz');
Config::set('db.password', '3O6C4TnE02');
Config::set('db.db_name', 'magaz');
=======
Config::set('db.host', 'localhost');
Config::set('db.user', 'root');
Config::set('db.password', '');
Config::set('db.db_name', 'mvc');
>>>>>>> 3bfe73c050ac6cd9e40f3501da855beaab429623

Config::set('salt', 'as4yt8j9kd3tb2fg78yhn7e');