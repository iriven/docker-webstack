# docker-webstack

[![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=XDCFPNTKUC4TU)


A [Docker](https://www.docker.com/)-based plateform and runtime environment for [PHP](https://php.net) web application, with full [HTTP/2](https://symfony.com/doc/current/weblink.html), HTTP/3 and HTTPS support.

## Getting Started

1. If not already done, [install Docker Compose](https://docs.docker.com/compose/install/) (v2.10+)
2. Run `docker compose build --pull --no-cache` to build fresh images
3. Run `docker compose up` (the logs will be displayed in the current shell)
4. Open `https://localhost` in your favorite web browser and [accept the auto-generated TLS certificate](https://stackoverflow.com/a/15076602/1352334)
5. Run `docker compose down --remove-orphans` to stop the Docker containers.

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

#### Integrated PHP Version

PHP Version: 8.1.12

#### Enabled PHP modules

```php
<?php
Array (
    [0] => Core
    [1] => date
    [2] => libxml
    [3] => openssl
    [4] => pcre
    [5] => sqlite3
    [6] => zlib
    [7] => ctype
    [8] => curl
    [9] => dom
    [10] => FFI
    [11] => fileinfo
    [12] => filter
    [13] => ftp
    [14] => hash
    [15] => iconv
    [16] => json
    [17] => mbstring
    [18] => SPL
    [19] => session
    [20] => PDO
    [21] => pdo_sqlite
    [22] => standard
    [23] => posix
    [24] => readline
    [25] => Reflection
    [26] => Phar
    [27] => SimpleXML
    [28] => tokenizer
    [29] => xml
    [30] => xmlreader
    [31] => xmlwriter
    [32] => mysqlnd
    [33] => cgi-fcgi
    [34] => bcmath
    [35] => calendar
    [36] => exif
    [37] => gd
    [38] => intl
    [39] => mysqli
    [40] => pdo_mysql
    [41] => pdo_pgsql
    [42] => shmop
    [43] => soap
    [44] => sockets
    [45] => xsl
    [46] => zip
    [47] => Zend OPcache
)
```

### 2- PHP-FPM and Nginx
Nginx is the ideal combination with PHP-FPM. Why? Because it’s a stable web server recognized for its impressive performance and low resource-consumption.

It features an asynchronous structure that’s highly-scalable, according to events. On top of this, memory consumption performance is significantly better when using Nginx and PHP-FPM together.

PHP runs as an isolated service when you use PHP-FPM. Employing this PHP version as the language interpreter means requests will be processed via a TCP/IP socket, and the Nginx server handles HTTP requests only, while PHP-FPM interprets the PHP code. Taking advantage of two separate services is vital to become more efficient.

### 3- Production, development and CI ready

### 4- Production, development and CI ready