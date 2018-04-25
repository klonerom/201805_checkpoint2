<?php
/**
* This file hold all routes definitions.
*
* PHP version 7
*
* @author   WCS <contact@wildcodeschool.fr>
*
* @link     https://github.com/WildCodeSchool/simple-mvc
*/

$routes = [
  'Checkpoint' => [ // Controller
    ['index', '/', 'GET'], // action, url, method
  ],
  'Characters' => [ // Controller
    ['list', '/characters', 'GET'], // action, url, method
    ['details', '/characters/{id:\d+}', 'GET'], // action, url, method
    ['edit', '/characters/edit/{id:\d+}', 'GET'], // action, url, method
    ['add', '/characters/add', 'GET'], // action, url, method
  ],
  'Planets' => [ // Controller
    ['list', '/planets', 'GET'], // action, url, method
    ['details', '/character/{id:\d+}', 'GET'], // action, url, method
    ['edit', '/character/edit/{id:\d+}', 'GET'], // action, url, method
    ['add', '/planet/add', 'GET'], // action, url, method
  ],
  'Movies' => [ // Controller
    ['list', '/movies', 'GET'], // action, url, method
    ['details', '/movie/{id:\d+}', 'GET'], // action, url, method
    ['edit', '/movie/edit/{id:\d+}', 'GET'], // action, url, method
    ['add', '/movie/add', 'GET'], // action, url, method
  ],
];
