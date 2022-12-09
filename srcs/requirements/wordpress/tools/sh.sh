#!/bin/sh

# wait for mysql
while ! mariadb -h$DB_HOST -u$DB_USER -p$DB_PASS $DB_NAME &>/dev/null; do
    sleep 3
done
wp core download --allow-root
wp config create --dbname=$DB_NAME --dbuser=$DB_USER --dbpass=$DB_PASS --dbhost=$DB_HOST --dbcharset="utf8" --dbcollate="utf8_general_ci" --allow-root
wp core install --url=$DOMAIN --title=$WP_TITLE --admin_user=$WP_ADMN --admin_password=$WP_ADMN_PASS --admin_email=$WP_ADMN_EMAIL --skip-email --allow-root
wp user create $WP_USER $WP_USER_EMAIL --role=author --user_pass=$WP_USER_PASS --allow-root
wp theme install neve --activate --allow-root
touch OPPPPPAAPAPA
/usr/sbin/php-fpm7.3 -F
#--path=/var/www/html 
