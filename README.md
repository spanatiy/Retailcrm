Magento module
==============

Magento 2 module for interaction with [retailCRM](http://www.retailcrm.ru).

Module allows:

* Exchange the orders data with retailCRM
* Configure relations between dictionaries of retailCRM and Magento (statuses, payments, delivery types and etc)
* Generate [ICML](http://www.retailcrm.ru/docs/Developers/ICML) (Intaro Markup Language) export file for catalog loading by retailCRM

### ICML

By default ICML file is being generated by module every 4 hours. You can find file in the web root folder with name "retailcrm_{{shop_code}}.xml". For example, http://example.org/retailcrm_default.xml

### Manual install


1) Run into your project root directory:
```bash
composer require retailcrm/api-client-php ~5.0
```

2) Unpack the archive with the module into the `app/code/Retailcrm/Retailcrm` directory.

3) Change `app/etc/config.php` file by adding `'Retailcrm_Retailcrm' => 1` line into `modules` array


This module is compatible with Magento up to version 2.2.3
