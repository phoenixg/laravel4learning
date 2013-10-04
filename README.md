## Laravel 4 learning on raspberry pi and deploy via PHPStorm


- use Advanced IP Scanner to scan out IP of raspberry pi first
- local machine hosts : 192.168.2.104       laravel4learning
- raspberry pi hosts : 127.0.1.1       raspberrypi
- /etc/apache2/sites-available/laravel4learning :

    <VirtualHost *:80>
         ServerName laravel4learning
         DocumentRoot /srv/www/laravel4learning/public/
         ErrorLog /srv/www/logs/error.log
         CustomLog /srv/www/logs/access.log combined

        <Directory "/srv/www/laravel4learning/public/">
        allow from all
        AllowOverride all
        Options +indexes
        </Directory>
    </VirtualHost>

    pi@raspberrypi ~ $ hostname
    raspberrypi
    pi@raspberrypi ~ $ hostname -f
    raspberrypi

* Maybe it should be configured like above

TO : http://laravel.com/docs/lifecycle 2013104





