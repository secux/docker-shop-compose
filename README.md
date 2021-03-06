# Dynamic docker testing infrastructure for online shops

This repository contains the docker-compose.yml files and the credentials for the entire infrastructure which is split into several docker images for each individual shop

Below you will find a table containing the current status of each individual image along with the installation guidelines

## Current status table

| Shop         	| Status            	| Last check 	| Known Issues                                                                                   	|
|--------------	|-------------------	|------------	|------------------------------------------------------------------------------------------------	|
| Magento2     	| **works**             | 23.05.2016 	| -                                                                                              	|
| Opencart2    	| **works**             | 23.05.2016 	| -                                                                                              	|
| Oscommerce2  	| **works**             | 23.05.2016 	| -                                                                                              	|
| Oscommerce3  	| **works**             | 23.05.2016 	| -                                                                                              	|
| Oxid4        	| does not work         | 23.05.2016 	| mod_rewrite module issue                                                                          |
| Prestashop1  	| **works**             | 23.05.2016 	| -                                                                                              	|
| Shopware5    	| works				 	| 05.04.2016 	| Install.sql file is missing on the repo being cloned                                           	|
| Woocommerce2 	| not yet built         | 05.04.2016 	| -                                                                                              	|
| JTL3         	| not yet built         | 05.04.2016 	| only 1 version in the repo                                                                     	|
| JTL4         	| not yet built         | 05.04.2016 	| only 1 version in the repo                                                                     	|
| Xtcommerce4  	| works				 	| 05.04.2016 	| Static assets and some files fail to load; inserting demo data fails on 2 of the shop versions 	|


## First time Installation

0. Login to and open the EC2 dashboard/console at aws.amazon.com, U.S. West, Oregon and under "Create Instance" click on "Launch Instance"
https://us-west-2.console.aws.amazon.com/ec2/v2/home?region=us-west-2

1. Under "Step 1: Choose an Amazon Machine Image (AMI)" in the tab on the left switch from "Quick Start" to "My AMIs" and then click on the blue "Select" button for the default-docker ami

2. Under "Step 2: Choose an Instance Type" select General purpose - t2.micro (Free tier eligible) and at the bottom right of the page click on "Next: Configure Instance Details"

3. Under "Step 3: Configure Instance Details" leave everything as it is and move on to "Next: Add Storage"

4. "Step 4: Add Storage" -> "Next: Tag Instance"

5. "Step 5: Tag Instance" -> "Step 6: Configure Security Group"

6. "Step 6: Configure Security Group" pick 'Select an existing security group' from the radio input and then check Name: dockerAllowAll from the list below, to allow http, https and ssh, as well as 6080 and 6090 ports and finally click on "Review and Launch"

7. "Step 7: Review Instance Launch" >> "Launch"

8. Select an existing key pair (one which has already been added to the list of ssh keys which can connect to the instance, contact Nicolas if you don't have a key yet) and click "Launch Instances"

9. Return to the Instances Dashboard and wait for the Instance to start and initialize. Once the Status Checks have passed select the instance by checking the checkbox to the left and at the top click on "Connect" and follow the instructions there in order to connect. Copy / Paste the address of your instance to your clipboard, eg: ec2-52-39-104-71.us-west-2.compute.amazonaws.com and connect using ssh and the "ec2-user", instead of root: "ssh ec2-user@ec2-52-39-104-71.us-west-2.compute.amazonaws.com"

10. Once connected, first verify docker and docker-compose installation by running the following commands after connecting to the EC2 instance

	`docker info`  
	`docker-compose version`  

11. Run "ls -la" and then "cd" into docker-shop-compose and then again into the folder of the shop you wish to install. Once there make sure that the docker-compose.yml file is presend and run "docker-compose up", while in that same folder. The "docker-compose up" will pull all the images and create the project container infrastructure.

12. Return to the Instances Dashboard and locate the Public IP of your instance, Copy - Paste it into your browser and attach the :6080 port to access the application manager: http://<public ip>:6080 and choose a shop version to instal from the list.

13. After Installation is completed navigate to http:://<public ip>:6090 to access your new shop and proceed with shop installation.

!IMPORTANT use "database" instead of localhost during manual shop installation
!IMPORTANT Magento2 shop installs automatically


## Working with an existing instance

1. Connect to the instance using SSH as in the previous explanation

2. The following commands allow you to work with the existing docker containers

"docker ps" -> shows a list of running containers

"docker ps -a" -> shows a list of all existing containers

"docker images" -> shows a list of all local images

"docker stop $(docker ps -q)" -> stops all running containers

"docker rm $(docker ps -aq)" -> removes all existing containers

3. "cd docker-shop-compose/<other shop folder>/"

4. "docker-compose up"

5. Repeat steps 12 and 13 from above.