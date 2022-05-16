#!bin/sh

# Setup cron job for scheduled tasks
* * * * * cd /var/www/html/bff-website && php artisan schedule:run >> /dev/null 2>&1
