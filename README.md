## Laravel 4 learning on raspberry pi and deploy via PHPStorm


    use Advanced IP Scanner to scan out IP of raspberry pi first
    local machine hosts : 192.168.2.104       laravel4learning
    raspberry pi hosts : 127.0.1.1       raspberrypi
    /etc/apache2/sites-available/laravel4learning :

    &lt;VirtualHost *:80&gt;
         ServerName laravel4learning
         DocumentRoot /srv/www/laravel4learning/public/
         ErrorLog /srv/www/logs/error.log
         CustomLog /srv/www/logs/access.log combined

        &lt;Directory "/srv/www/laravel4learning/public/"&gt;
        allow from all
        AllowOverride all
        Options +indexes
        &lt;/Directory&gt;
    &lt;/VirtualHost&gt;

    pi@raspberrypi ~ $ hostname
    raspberrypi
    pi@raspberrypi ~ $ hostname -f
    raspberrypi

* Maybe it should be configured like above
* composer update

# composer tools installed
- laravel IDE helper( click to definitaion )

TO : http://laravel.com/docs/responses 2013104





