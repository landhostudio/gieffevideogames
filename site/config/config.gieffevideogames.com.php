<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'put your license key here'); /* For repository we remove the license */

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

c::set('content.file.extension', 'md');

c::set('thumbs.driver', 'im');

c::set('thumbs.bin', '/usr/bin/convert');

c::set('languages', array(
  array(
    'code'    => 'it',
    'name'    => 'Italiano',
    'locale'  => 'it-IT',
    'default' => true,
    'url'     => '/',
  ),
  array(
    'code'    => 'en',
    'name'    => 'English',
    'locale'  => 'en_US',
    'url'     => '/en',
  )
));

c::set('map.key', 'AIzaSyB-7QytKMD90pKwOssSFELz40Cemx1MXgU');

c::set('compress', true);