FROM php:7.3-fpm-alpine

# add required php extensions
RUN apk add --no-cache libzip-dev \
    && docker-php-ext-install pdo pdo_mysql opcache zip bcmath \
    && rm -rf /var/cache/apk/* /tmp/*

# set recommended PHP.ini settings
# see https://secure.php.net/manual/en/opcache.installation.php
RUN { \
		echo 'opcache.memory_consumption=128'; \
		echo 'opcache.interned_strings_buffer=8'; \
		echo 'opcache.max_accelerated_files=4000'; \
		echo 'opcache.revalidate_freq=2'; \
		echo 'opcache.fast_shutdown=1'; \
		echo 'opcache.enable_cli=1'; \
	} > /usr/local/etc/php/conf.d/opcache-recommended.ini