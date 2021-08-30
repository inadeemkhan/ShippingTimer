# Mage2 Module Magelumen ShippingTimer

    ``magelumen/module-shippingtimer``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
To show cutoff time of FedEX.

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Magelumen`
 - Enable the module by running `php bin/magento module:enable Magelumen_ShippingTimer`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require magelumen/module-shippingtimer`
 - enable the module by running `php bin/magento module:enable Magelumen_ShippingTimer`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration

 - days (cuttofftime/general/days)

 - hours (cuttofftime/general/hours)

 - minutes (cuttofftime/general/minutes)

 - seconds (cuttofftime/general/seconds)


## Specifications

 - Helper
	- Magelumen\ShippingTimer\Helper\Data


## Attributes



