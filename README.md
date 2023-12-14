

# wp-sqlite

WordPress running on an SQLite database.

Easy to use WordPress implementation with SQLite database.  SQLite has the following noticeable features: self-contained, serverless, zero-configuration, transactional. Because of the serverless architecture, you don’t need to “install” SQLite before using it. There is no server process that needs to be configured, started, and stopped.

In addition, SQLite does not use any configuration files. SQLite allows a single database connection to access multiple database files simultaneously. This brings many nice features like joining tables in different databases or copying data between databases in a single command.

SQLite is capable of creating in-memory databases that are very fast to work with.

WordPress is much faster and secure with this kind of implementation. 

**Installation**

Grab the last source code on our [release page](https://github.com/stokry/wp-sqlite/releases).   After that, you can unzip the files and run a standard WordPress installation. Note that you need to enable `pdo_mysql` and after that, you can open `wp-config.php` file and replace `example.com` with your url's. 

```python
define('WP_HOME','http://example.com');
define('WP_SITEURL','http://example.com');
```
Database file already exist and you can leave that file like that, or of course, you can change if you want.

For security reasons, it's best to store the SQLite database file outside of the web root directory. This way, it cannot be accessed directly via a URL.

To enhance security, you can define DB_DIR in your **wp-config.php** file and set it to a directory outside of your web root. Here's an example:

```python
 define('DB_DIR', '/path/to/secure/directory');
```

Replace  `/path/to/secure/directory`  with the actual path to the directory where you want to store the SQLite database file.

Also, make sure that the directory has the correct permissions set. The web server needs to be able to read and write to the directory, but for security reasons, other users should not have these permissions.

Lastly, ensure that the SQLite database file itself is not accessible from the web. One way to do this is to add a  `.htaccess`  file in the directory containing the SQLite file with the following content:

```python
<Files ~ "\.db$">
    Order allow,deny
    Deny from all
</Files>
```

This will prevent direct access to any `.db` files from the web.

Thanks for your Support ❤️

