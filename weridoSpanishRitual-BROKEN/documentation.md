I put a generic default.conf in nginx config folder, y just put the cointainer that i use.


By default run this, the permissions isn't right by default
'
    sudo chown -R $USER:www-data storage

    sudo chown -R $USER:www-data bootstrap/cache

    sudo chmod -R 775 storage

    sudo chmod -R 775 bootstrap/cache
'


Enter into the container port 9000 and exec 'php artisan key:generate', by default i didn't generate a encrypted key for the server