# docker-webstack
A Production ready web application Plateform As A Service (PAAS) based on docker

[![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=XDCFPNTKUC4TU)

## Why choose Iriven docker-webstack ?

### 1- PHP-FPM ENABLED
PHP-FPM is an efficient method on how to minimize the memory consumption and rise the performance for the websites with heavy traffic. It is significantly faster than traditional CGI-based methods in multi-user PHP environments. If your primary goal for hosting your web application is to achieve optimal performance and security, then PHP-FPM is the way forward.


#### PHP-FPM Key Features
PHP-FPM includes numerous features that can prove beneficial for websites receiving traffic in large volumes frequently. These are:

- Ability to start workers using various uid/gid/chroot/environment and php.ini, which replaces the safe mode users may expect
- In-depth management for simple stop/start processing
- Logging of stdout and stderr
- Emergency restart available, in the event of an opcode cache being destroyed accidentally
- Support for uploads is faster
- Based on php.ini configuration files
- Slowlog variable configuration for detecting functions that take longer than usual to execute
- FastCGI improvements, with a special function for stopping and downloading data while completing long processes (e.g. processing statistics)
- Basic stats are available, similar to the mod-status module in Apache

### 2- PHP-FPM and Nginx
Nginx is the ideal combination with PHP-FPM. Why? Because it’s a stable web server recognized for its impressive performance and low resource-consumption.

It features an asynchronous structure that’s highly-scalable, according to events. On top of this, memory consumption performance is significantly better when using Nginx and PHP-FPM together.

PHP runs as an isolated service when you use PHP-FPM. Employing this PHP version as the language interpreter means requests will be processed via a TCP/IP socket, and the Nginx server handles HTTP requests only, while PHP-FPM interprets the PHP code. Taking advantage of two separate services is vital to become more efficient.