# Twig Template Tester

This was written to accelerate the interaction between our design team and development team.

## Dependancies

This project is intended to be run on a workstation.  You may use any web server to serve files or install PHP
in order to use the built-in PHP webserver. 

- Composer 2.x
- PHP 7.x (optional)

## Setup

The twig template(s) exist in the ./templates/ directory.  Any variables that need to be injected into the twig template
when it is rendered consist of a file in the ./params/ directory with the same basename of the main twig file using the 
extension .php.  We've included example param and twig files.  

## Running

The easiest way to run the project is to run 

`php -S localhost:<port>` 

on the command line in this project's directory.  
Feel free to setup a different web browser of your choice if you are so inclined.

Open a browser, type in

`http://localhost:<port>/render.php?template=<template name>`

<port> is any port that is valid and available on your workstation.
<template name> is the name of the template to render and view.  It will be the base name of your main twig file.  In the 
case of the example files, <template name> would be `test`.

Any CSS, JS or other files that the template needs to load should be in the base project directory.  If you are not using
the PHP built-in Web server, you may need additional configuration.
