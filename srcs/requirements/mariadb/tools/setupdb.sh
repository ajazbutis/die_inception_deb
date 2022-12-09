#!/bin/bash

service mysql start

if [ ! -d /var/lib/mysql/${DB_NAME} ] ; then
	mysql -u root -e "DELETE FROM	mysql.user WHERE User='';"
	mysql -u root -e "DROP DATABASE test;" 
	mysql -u root -e "DELETE FROM mysql.db WHERE Db='test';" 
	mysql -u root -e "DELETE FROM mysql.user WHERE User='root' AND Host NOT IN ('localhost', '127.0.0.1', '::1');" 
	mysql -u root -e "CREATE DATABASE ${DB_NAME} CHARACTER SET utf8 COLLATE utf8_general_ci;"
	mysql -u root -e "CREATE USER '${DB_USER}'@'%' IDENTIFIED by '${DB_PASS}';"
	mysql -u root -e "GRANT ALL PRIVILEGES ON ${DB_NAME}.* TO '${DB_USER}'@'%';"
	mysql -u root -e "ALTER USER 'root'@'localhost' IDENTIFIED BY '${ROOT_PASS}';"
	mysql -u root -e "FLUSH PRIVILEGES;"
fi

sleep 1
mysqladmin -p${ROOT_PASS} shutdown
mysqld_safe
