FROM debian:buster
RUN apt update && apt upgrade && apt install -y mariadb-server
LABEL version="1.0"
LABEL description="MariaDb Service"
COPY cnf/50-server.cnf /etc/mysql/mariadb.conf.d/
COPY tools/setupdb.sh /tmp/
RUN chmod +x /tmp/setupdb.sh
ENTRYPOINT ["/bin/bash", "/tmp/setupdb.sh"]
EXPOSE 3306
