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

### 1- Production, development and CI ready
### 2- PHP-FPM ENABLED
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

PHP Version: 8.2.0

#### Enabled PHP modules

```php
<?php
[
    [0] => bcmath
    [1] => bz2
    [2] => calendar
    [3] => cgi-fcgi
    [4] => core
    [5] => ctype
    [6] => curl
    [7] => date
    [8] => dom
    [9] => exif
    [10] => ffi
    [11] => fileinfo
    [12] => filter
    [13] => ftp
    [14] => gd
    [15] => gettext
    [16] => gmp
    [17] => hash
    [18] => iconv
    [19] => imap
    [20] => intl
    [21] => json
    [22] => ldap
    [23] => libxml
    [24] => mbstring
    [25] => mysqli
    [26] => mysqlnd
    [27] => openssl
    [28] => pcntl
    [29] => pcre
    [30] => pdo
    [31] => pdo_dblib
    [32] => pdo_mysql
    [33] => pdo_pgsql
    [34] => pdo_sqlite
    [35] => pgsql
    [36] => phar
    [37] => posix
    [38] => random
    [39] => readline
    [40] => reflection
    [41] => session
    [42] => shmop
    [43] => simplexml
    [44] => soap
    [45] => sockets
    [46] => sodium
    [47] => spl
    [48] => sqlite3
    [49] => standard
    [50] => sysvmsg
    [51] => sysvsem
    [52] => sysvshm
    [53] => tidy
    [54] => tokenizer
    [55] => xml
    [56] => xmlreader
    [57] => xmlwriter
    [58] => xsl
    [59] => zend opcache
    [60] => zip
    [61] => zlib
]
```

### 3- PHP-FPM and Nginx
Nginx is the ideal combination with PHP-FPM. Why? Because it’s a stable web server recognized for its impressive performance and low resource-consumption.

It features an asynchronous structure that’s highly-scalable, according to events. On top of this, memory consumption performance is significantly better when using Nginx and PHP-FPM together.

PHP runs as an isolated service when you use PHP-FPM. Employing this PHP version as the language interpreter means requests will be processed via a TCP/IP socket, and the Nginx server handles HTTP requests only, while PHP-FPM interprets the PHP code. Taking advantage of two separate services is vital to become more efficient.
