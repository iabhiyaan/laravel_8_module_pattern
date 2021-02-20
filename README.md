# Setup


To get this project running locally first you have to run command:

```
composer update
```

Then you have to publish all vendor assets:

Before running the database migrations you have to setup a database connection in the `.env` file. Then you can run:

```
php artisan migrate --seed
```


