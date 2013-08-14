<?php

/* 

---------------------------------------
Subfolder Setup
---------------------------------------

Kirby will automatically try to detect the subfolder

i.e. http://yourdomain.com/subfolder

This might fail depending on your server setup. 
In such a case, please set the correct subfolder here. 

You must also set the right url then:

c::set('url', 'http://yoururl.com/subfolder');

if you are using the .htaccess file, make sure to 
set the right RewriteBase there as well:

RewriteBase /subfolder
 
*/

c::set('subfolder', false);
/* c::set('url', 'http://www.neue-prignitz.org/site'); */


/*

---------------------------------------
Custom host setup
---------------------------------------

I've added a nice way to add different 
config files for different environments

Let's say you run a development version of your
site at http://dev.yoursite.com and a production
version of your site at http://yoursite.com, you
can easily setup two different config files
by adding two more files in this directory and name them
like this: 

config.dev.yoursite.com.php
config.yoursite.com.php

What happens is, that this global config.php
will be loaded first and afterwards only the
config file for the matching hostname will be 
attached. So you can easily overwrite your global
custom config by specific rules for that host. 

*/


