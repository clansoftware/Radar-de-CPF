FROM php:7.2.19-fpm-alpine3.9
RUN apk update
RUN docker-php-ext-configure mysqli --with-mysqli && docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN docker-php-ext-configure pdo --with-pdo && docker-php-ext-install pdo && docker-php-ext-enable pdo
RUN docker-php-ext-configure pdo_mysql --with-pdo_mysql && docker-php-ext-install pdo_mysql && docker-php-ext-enable pdo_mysql
RUN docker-php-ext-configure json --with-json && docker-php-ext-install json && docker-php-ext-enable json
RUN docker-php-ext-configure bcmath --with-bcmath && docker-php-ext-install bcmath && docker-php-ext-enable bcmath
RUN apk add postgresql-dev && docker-php-ext-configure pgsql --with-pgsql && docker-php-ext-install pgsql && docker-php-ext-enable pgsql
RUN docker-php-ext-configure pdo_pgsql --with-pdo_pgsql && docker-php-ext-install pdo_pgsql && docker-php-ext-enable pdo_pgsql
RUN docker-php-ext-configure calendar --with-calendar && docker-php-ext-install calendar && docker-php-ext-enable calendar
RUN apk add libxml2-dev && docker-php-ext-configure soap --with-soap && docker-php-ext-install soap && docker-php-ext-enable soap
RUN apk add bzip2-dev && docker-php-ext-configure bz2 --with-bz2 && docker-php-ext-install bz2 && docker-php-ext-enable bz2
RUN apk add libpng-dev && docker-php-ext-configure gd --with-gd && docker-php-ext-install gd && docker-php-ext-enable gd
RUN docker-php-ext-configure exif --with-exif && docker-php-ext-install exif && docker-php-ext-enable exif
RUN apk add gettext-dev && docker-php-ext-configure gettext --with-gettext && docker-php-ext-install gettext && docker-php-ext-enable gettext
RUN apk add icu-dev && docker-php-ext-configure intl --with-intl && docker-php-ext-install intl && docker-php-ext-enable intl
RUN docker-php-ext-configure shmop --with-shmop && docker-php-ext-install shmop && docker-php-ext-enable shmop
RUN docker-php-ext-configure sockets --with-sockets && docker-php-ext-install sockets && docker-php-ext-enable sockets
RUN docker-php-ext-configure sysvmsg --with-sysvmsg && docker-php-ext-install sysvmsg && docker-php-ext-enable sysvmsg
RUN docker-php-ext-configure sysvsem --with-sysvsem && docker-php-ext-install sysvsem && docker-php-ext-enable sysvsem
RUN docker-php-ext-configure sysvshm --with-sysvshm && docker-php-ext-install sysvshm && docker-php-ext-enable sysvshm
RUN apk add libxslt-dev && docker-php-ext-configure xsl --with-xsl && docker-php-ext-install xsl && docker-php-ext-enable xsl
RUN apk add libzip-dev && docker-php-ext-configure zip --with-zip && docker-php-ext-install zip && docker-php-ext-enable zip
RUN apk add libxml2-dev && docker-php-ext-configure wddx --with-wddx && docker-php-ext-install wddx && docker-php-ext-enable wddx
RUN apk add libxml2-dev && docker-php-ext-configure xmlrpc --with-xmlrpc && docker-php-ext-install xmlrpc && docker-php-ext-enable xmlrpc
RUN docker-php-ext-configure opcache --with-wddx && docker-php-ext-install opcache && docker-php-ext-enable opcache
RUN docker-php-ext-install xml
RUN docker-php-ext-install dom

COPY php.ini /usr/local/etc/php/php.ini 

RUN chmod 777 -R /var/www/html

RUN apk add --upgrade cairo cairo-gobject pango gdk-pixbuf py3-lxml py3-cffi py3-pillow msttcorefonts-installer fontconfig && update-ms-fonts && fc-cache -f 
RUN pip3 install weasyprint

RUN apk update and apk add
RUN curl --silent --show-error https://getcomposer.org/installer | php