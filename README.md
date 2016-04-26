# Dynamic docker testing infrastructure for online shops

This repository contains the docker-compose.yml files and the credentials for the entire infrastructure which is split into several docker images for each individual shop

Below you will find a table containing the current status of each individual image along with the installation guidelines

## Current status table

| Shop         	| Status            	| Last check 	| Known Issues                                                                                   	|
|--------------	|-------------------	|------------	|------------------------------------------------------------------------------------------------	|
| Magento2     	| **works**             | 05.04.2016 	| -                                                                                              	|
| Opencart2    	| **works**             | 05.04.2016 	| -                                                                                              	|
| Oscommerce2  	| **works**             | 05.04.2016 	| -                                                                                              	|
| Oscommerce3  	| **works**             | 05.04.2016 	| -                                                                                              	|
| Oxid4        	| **works**             | 05.04.2016 	| -                                                                                              	|
| Prestashop1  	| **works**             | 05.04.2016 	| -                                                                                              	|
| Shopware5    	| works				 	| 05.04.2016 	| Install.sql file is missing on the repo being cloned                                           	|
| Woocommerce2 	| not yet built         | 05.04.2016 	| -                                                                                              	|
| JTL3         	| not yet built         | 05.04.2016 	| only 1 version in the repo                                                                     	|
| JTL4         	| not yet built         | 05.04.2016 	| only 1 version in the repo                                                                     	|
| Xtcommerce4  	| works				 	| 05.04.2016 	| Static assets and some files fail to load; inserting demo data fails on 2 of the shop versions 	|





## Installation

1. Verify docker and docker-compose installation

	⋅⋅⋅`docker info`  
	⋅⋅⋅`docker-compose version`  

2.
3.
4.
5.
6.
7.


!IMPORTANT use "database" instead of localhost during installation
