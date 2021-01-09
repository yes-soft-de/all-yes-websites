FROM wordpress:5.4.2
COPY --chown=www-data:www-data . /var/www/html/wp-content/themes/yes-user
