# Mage2 Module Extendware CutoffTime

    ``extendware/module-cutofftime``

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

 - Unzip the zip file in `app/code/Extendware`
 - Enable the module by running `php bin/magento module:enable Extendware_CutoffTime`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require extendware/module-cutofftime`
 - enable the module by running `php bin/magento module:enable Extendware_CutoffTime`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration

 - days (cuttofftime/general/days)

 - hours (cuttofftime/general/hours)

 - minutes (cuttofftime/general/minutes)

 - seconds (cuttofftime/general/seconds)


## Specifications

 - Helper
	- Extendware\CutoffTime\Helper\Data


## Attributes



