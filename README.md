# docker-shop-compose

Current issues with each shop:

1. Magento2 doesn't pull the vendor files despite the use of a token. Specifically asks for command line auth

2. Opencart2 doesn't connect to the mysql container; the php ext is installed; i've created a new php image in order to install all the extentions that the shop needs.

3. Oscommerce2 weird issue

Server Capabilities:
Required PHP Extensions
MySQL	Yes

New Installation:
mysql	The MySQL extension is required but is not installed. Please enable it to continue installation.

One check on the same page says the extension is installed, the other says it is not. Very weird

4. Oxid4 not working, unknown reason

5. Prestashop1 similar issue "Database Server is not found. Please verify the login, password and server fields (DbPDO)"

6. Shopware5 Seems to have some issue with the DirectoryIndex / .htaccess file, not sure

7. XtCommerce, almost finished but same problem with mysql as the others


Magento2 - works (not auth not mysql)
Opencart2 - works (not mysql)
Oscommerce2 - works (not mysql)
Oscommerce3 - works (not mysql)
Oxid4 - wrong dir index?
Prestashop1 - works (not mysql)
Shopware5 - wrong dir index or something wrong with autoload.php same as magento?
Woocommerce2 - not built
Xtcommerce4 - works (not mysql)