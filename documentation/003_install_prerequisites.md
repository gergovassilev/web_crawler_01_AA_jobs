
install apache, php, sqlite and some other stuff
``` bash
apt update

apt install -y \
    apache2 \
    php \
    libapache2-mod-php \
    php-sqlite3 \
    sqlite3
```

start apache because apache does not start. probably will switch to other container image, where apache autostarts
or will add this to the start scripts
``` bash
source /etc/apache2/envvars
apachectl restart
```
