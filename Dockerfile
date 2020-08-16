FROM 206662246910.dkr.ecr.eu-central-1.amazonaws.com/base-wp:latest

RUN rm -rf /var/www/html; \
    mkdir -p /var/www/html

COPY ./wordpress/ /var/www/html

RUN set -ex; \
    chown -R www-data:www-data /var/www/html; \
    chmod -R 0644 /var/www/html
RUN find /var/www/html -type d -exec chmod ug+x {} \;

COPY docker-entrypoint.sh /usr/local/bin/
RUN chmod 755 /usr/local/bin/docker-entrypoint.sh

ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["apache2-foreground"]
