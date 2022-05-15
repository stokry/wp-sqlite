
# wp-sqlite

WordPress running on an SQLite database.

Easy to use WordPress implementation with SQLite database.  SQLite has the following noticeable features: self-contained, serverless, zero-configuration, transactional. Because of the serverless architecture, you don’t need to “install” SQLite before using it. There is no server process that needs to be configured, started, and stopped.

In addition, SQLite does not use any configuration files. SQLite allows a single database connection to access multiple database files simultaneously. This brings many nice features like joining tables in different databases or copying data between databases in a single command.

SQLite is capable of creating in-memory databases that are very fast to work with.

WordPress is much faster and secure with this kind of implementation. 

**Installation**
You need to enable `pdo_mysql` and after that, you can open `wp-config.php` file and replace `example.com` with your url's. 

```python
define('WP_HOME','example.com');
define('WP_SITEURL','example.com');
```
Database file already exist and you can leave that file like that, or of course, you can change if you want.

```python
define('DB_FILE', 'wpsqlite.db');
```
Thanks.

