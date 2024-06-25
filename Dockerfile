# Install any PHP extensions you need
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli && apachectl restart


