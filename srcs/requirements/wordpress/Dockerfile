FROM debian:buster
RUN apt update && apt upgrade && apt install -y mariadb-client
RUN apt install -y php7.3 php-fpm php-mysqli wget php7.3-fpm php7.3-bz2 php7.3-calendar php7.3-ctype php7.3-cli php7.3-common php7.3-curl php7.3-dom php7.3-exif php7.3-fileinfo php7.3-gd php7.3-iconv php7.3-imap php7.3-intl php7.3-json php7.3-mbstring php7.3-opcache php7.3-mysqli php7.3-mysqlnd php7.3-pdo php7.3-pgsql php7.3-phar php7.3-posix php7.3-shmop php7.3-simplexml php7.3-soap php7.3-sockets php7.3-sqlite3 php7.3-sysvsem php7.3-sysvshm php7.3-tokenizer php7.3-xml php7.3-xmlreader php7.3-zip
RUN mkdir -p /run/php
RUN wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/bin/wp
COPY conf/www.conf /etc/php/7.3/fpm/pool.d
WORKDIR /var/www/html
COPY tools/sh.sh /tmp/
COPY tools/wp-config.php /tmp/
RUN chmod +x /tmp/sh.sh
ENTRYPOINT ["/bin/bash", "-x", "/tmp/sh.sh"]
EXPOSE 9000
