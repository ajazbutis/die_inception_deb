FROM debian:buster
RUN apt update && apt upgrade && apt install -y mariadb-client
RUN apt install -y php7.3 php-fpm php-mysqli wget
# php8-fpm php8-bz2 php8-calendar php8-ctype php8-cli php8-common php8-curl php8-dom php8-exif php8-fileinfo php8-gd php8-iconv php8-imap php8-intl php8-json php8-mbstring php8-opcache php8-mysqli php8-mysqlnd php8-openssl php8-pcntl php8-pdo php8-pdo_mysql php8-pdo_pgsql php8-pdo_sqlite php8-pgsql php8-phar php8-posix php8-shmop php8-simplexml php8-soap php8-sockets php8-sodium php8-sqlite3 php8-sysvsem php8-sysvshm php8-tokenizer php8-xml php8-xmlreader php8-zip php8-zlib wget php8-session tar
#COPY conf/php-fpm.conf /etc/php8/
RUN mkdir -p /run/php
COPY conf/www.conf /etc/php/7.3/fpm/pool.d
#RUN ln -s /usr/bin/php8 /usr/bin/php
RUN wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/bin/wp
WORKDIR /var/www/html
#RUN wp core download --allow-root
#CMD /usr/sbin/php-fpm7.3 -F
#RUN chown nginx:nginx /var/www/html
COPY tools/sh.sh /tmp/
RUN chmod +x /tmp/sh.sh
ENTRYPOINT ["/bin/bash", "-x", "/tmp/sh.sh"]
#CMD php-fpm8 -F
EXPOSE 9000
