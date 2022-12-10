FROM debian:buster
RUN apt update && apt upgrade && apt install -y mariadb-server
LABEL version="1.0"
LABEL description="MariaDb Service"
COPY cnf/50-server.cnf /etc/mysql/mariadb.conf.d/
COPY tools/sh.sh /tmp/
RUN chmod +x /tmp/sh.sh
ENTRYPOINT ["/bin/bash", "/tmp/sh.sh"]
