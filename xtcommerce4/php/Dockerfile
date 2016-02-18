FROM php:5-fpm
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libzip-dev \
        libpng12-dev \
        libxml2-dev \
        libapache2-mod-php5 \
        wget \
        unzip \
    && docker-php-ext-install -j$(nproc) iconv mcrypt mysqli zip soap \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd

# Files this one is not used right now but might be in the future if we need to make php versions dynamic so, leave it here for now
##############################
ADD install_ioncube.php /tmp/

# Install ioncube as required by xtcommerce
RUN mkdir -p /tmp/install/ && \
    cd /tmp/install && \
    wget http://downloads2.ioncube.com/loader_downloads/ioncube_loaders_lin_x86-64.zip && \
    unzip ioncube_loaders_lin_x86-64.zip && \
    mv ioncube/ioncube_loader_lin_5.6.so $(php-config --extension-dir)/ioncube_loader.so && \
    rm -rf /tmp/install

# Enable ioncube
RUN echo "zend_extension=$(php-config --extension-dir)/ioncube_loader.so" > /usr/local/etc/php/conf.d/20_ioncube_loader.ini






