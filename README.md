### A working example can be seen here: 
https://backend.alexradu.co.uk/api/books


## Project setup
```
composer install
```

### Create a new .env file


### Artisan key generate
```
php artisan generate:key
```

### Create a database and add its name in the .env file 
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=whitespider
DB_USERNAME=root
DB_PASSWORD=
```

### Migrate and seed
```
php artisan migrate:fresh --seed 
```

### Run the localServe
```
php artisan serve
```
