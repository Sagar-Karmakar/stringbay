### Step : Install Required PHP Extensions

The PHP extensions `pdo_sqlsrv` and `sqlsrv` need to be installed on the machine where your PHP is running, whether it's your local development environment or a production server.

#### On Your Local Machine (Development Environment):

1. **Using PECL**:
   ```bash
   pecl install pdo_sqlsrv
   pecl install sqlsrv
   ```

2. **Enable Extensions in `php.ini`**:
   Open your `php.ini` file and add the following lines to enable the extensions:
   ```ini
   extension=pdo_sqlsrv
   extension=sqlsrv
   ```

3. **Restart Your Web Server**:
   After modifying the `php.ini` file, restart your web server (Apache, Nginx, etc.) to apply the changes.

#### On a Production Server:

If your project is hosted on a server, you'll need to install the extensions on that server. This process will vary depending on your server's operating system.

1. **For Ubuntu/Debian**:
   ```bash
   sudo apt-get update
   sudo apt-get install -y unixodbc-dev
   sudo pecl install pdo_sqlsrv
   sudo pecl install sqlsrv
   ```

   Then enable the extensions in `php.ini`:
   ```ini
   extension=pdo_sqlsrv
   extension=sqlsrv
   ```

   And restart the web server:
   ```bash
   sudo systemctl restart apache2   # For Apache
   sudo systemctl restart nginx     # For Nginx
   ```

2. **For CentOS/RHEL**:
   ```bash
   sudo yum install -y epel-release
   sudo yum install -y unixODBC-devel
   sudo pecl install pdo_sqlsrv
   sudo pecl install sqlsrv
   ```

   Enable the extensions in `php.ini`:
   ```ini
   extension=pdo_sqlsrv
   extension=sqlsrv
   ```

   And restart the web server:
   ```bash
   sudo systemctl restart httpd   # For Apache
   sudo systemctl restart nginx   # For Nginx
   ```

3. **For Windows**:
   Download the appropriate drivers from the [Microsoft Drivers for PHP for SQL Server](https://docs.microsoft.com/en-us/sql/connect/php/download-drivers-php-sql-server) page and follow the installation instructions.

#### On a Shared Hosting or Managed Server:

If you're using shared hosting or a managed server where you don't have root access, you might need to contact your hosting provider to install these extensions for you.

