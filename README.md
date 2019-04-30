## PostBack Tracking

This project make entry in database of each visitor of server1 into another server  with the use of postback tracking


### Clone the repository

```ssh
git clone https://github.com/jatin-kaklotar/postback_tracking.git
```

### Host the code

Server1 repository hosting

```ssh
cd Server1
php -S localhost:8010
```

Server2 repository hosting

```ssh
cd Server2
php -S localhost:8000
```


### Configuration

Set below configuration variable of database and another server(server1 hosted url value) url in `config.php` file

```php
/**
 * Assign database configuration value
 */
$host = 'localhost';
$databaseName = 'practice';
$username = '';
$password = '';
/**
 * Assign server1 hosted url
 */
$serverUrl = 'http://localhost:8010';
```

:pencil: In above variable $serverUrl we need to set value which hosted for Server1 repository 


### Import table

Create database and import `server_to_server` table in your database. after import you can find `server_to_server.sql` in current directory

### Run pages of server2 for make entry in database

Make sure you have give valid database connection value and server1 url

Current repository **Server2** which also contain 3 pages `page1.php`, `page2.php` and `page3.php`

Run above define page using below any url(Note :We hosted code on port 8000), after run pages you will find entry in your database table 

```url
http://localhost:8000/page1.php

http://localhost:8000/page2.php

http://localhost:8000/page3.php

```
