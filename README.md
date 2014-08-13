#ZfcUserList Module for Zend Framework 2
========================================

## Introduction

This module provides an list of the users.

## Installation

### Using composer

1. Add `stijnhau/zfc-user-list` (version `dev-master`) to requirements
2. Run `update` command on composer

### Manually

1. Clone this project into your `./vendor/` directory and enable it in your
   `application.config.php` file.
2. Clone `https://github.com/stijnhau/ZfcUserList` into your `./vendor/` directory and enable it in your
   `application.config.php` file.
   
### Requires
1. PHP >= 5.4.0
2. ZfcUser >= 1.0.0
3. doctrine/common >= v2.4.2
4. doctrine/orm >= v2.4.4
5. doctrine/doctrine-orm-module >= 0.8.0
6. zf-commons/zfc-user-doctrine-orm = dev-master

## Features


This module needs soome refactoring to use Adapter
The usage of doctrine should be an other module that depends on this module.
