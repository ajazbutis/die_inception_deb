FROM debian:buster
RUN apt update && apt upgrade && apt install -y nginx openssl
RUN mkdir -p /etc/nginx/ssl
RUN openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes -keyout /etc/nginx/ssl/ajazbuti.key -out /etc/nginx/ssl/ajazbuti.crt -subj "/C=DE/ST=BadenWurttembergs/L=Heilbronn/O=Zweiundvierzig/OU=Studenten(department)/CN=www.ajazbuti.42.fr"
COPY ./conf/default.conf /etc/nginx/sites-enabled/default
ENTRYPOINT ["nginx", "-g", "daemon off;"]
