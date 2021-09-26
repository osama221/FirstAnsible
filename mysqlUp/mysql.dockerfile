FROM debian:buster-slim


RUN apt-get update && apt-get install -y --no-install-recommends gnupg dirmngr procps wget

#RUN set -ex; \
#key='A4A9406876FCBD3C456770C88C718D3B5072E1F5'; \
#	apt-key adv --keyserver keyserver.ubuntu.com --recv-keys "$key"
RUN apt-get update && apt-get install -y --no-install-recommends \
  gnupg \
  dirmngr \
  procps \
#RUN wget http://repo.mysql.com/apt/debian/dists/buster/mysql-8.0/
RUN add-apt-repository https://dev.mysql.com/downloads/repo/apt/
#RUN dpkg -i mysql-apt-config_0.8.19-1_all.deb
RUN apt-get update
RUN debconf-set-selections <<< "mysql-community-server mysql-community-server/root-pass password mypassword"
RUN debconf-set-selections <<< "mysql-community-server mysql-community-server/re-root-pass password mypassword"
RUN DEBIAN_FRONTEND=noninteractive apt-get install mysql-server
#RUN DEBIAN_FRONTEND=noninteractive apt-get -y install mysql-server
RUN rm -rf /var/lib/mysql
RUN mkdir -p /var/lib/mysql \
RUN chown -R mysql:mysql /var/lib/mysql /usr/bin/mysql /usr/bin/mysqld \
              /usr/sbin/mysql /usr/sbin/mysqld
RUN apt-get update
ENV MYSQL_ROOT_PASSWORD "root"
ENV MYSQL_DATABASE "mydb"
ENV MYSQL_USER = mysql
ENV MYSQL_PASSWORD =mysql


#ENTRYPOINY [""]

EXPOSE 3306 33060

CMD ["mysql"]







