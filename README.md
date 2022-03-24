Puhastusproff Extranet

Requirements
============

1. Git
2. PHP 8 (for example Xampp for Windows, MAMP for macOS, Ondrej Sury PHP packages for Debian/Ubuntu)
3. Composer
4. MariaDB

Getting started
===
Windows:
---

1. Download and install [Git](https://git-scm.com/), at least PHP 8
   Xampp [Xampp](https://www.apachefriends.org/index.html)
   and [Composer](https://getcomposer.org/doc/00-intro.md#installation-windows), if not already installed.
2. Open `Git Bash` in Windows start menu
3. Navigate to webserver's root directory:

   `cd /c/xampp/htdocs`

4. While in Xampp's `htdocs/` folder, clone this project:

   `git clone git://github.com/henno/pp-extranet.git`

5. Make a copy of a sample configuration file:

   `cp config.php.sample config.php`

6. Run Xampp Control Panel from the Windows Start menu
7. Click Apache's and Mysql's Start buttons so that they turn green
8. Click the black `Shell` button on the right
9. In the black shell window, login to mysql:

   `mysql -u root -p`

10. Press ENTER if it asks for a password
11. Create the database

    `CREATE DATABASE pp_extranet;`

12. Switch to using that database

    `use pp_extranet;`

13. Import structure and sample data into the database

    `source htdocs\pp_extranet\doc\database.sql`

14. You can now close the Shell and move to "Installing dependencies"

Ubuntu
---

1. Follow [this](https://shortdark.co.uk/posts/2021-10-17-php8-nginx-ubuntu-20.04-LTS/) guide to set up *
   until* `Install Wordpress`
2. Go to webserver root directory:

   `cd /var/www`
4. Clone the project:
   `git clone git://github.com/henno/pp-extranet.git`

5. Make a copy of a sample configuration file:

   `cp config.php.sample config.php`
6. Enter MariaDB:
   `mysql -u root -p`

7. Press ENTER if it asks for a password
8. Create the database

   `CREATE DATABASE pp_extranet;`

9. Switch to using that database

   `use pp_extranet;`

10. Import structure and sample data into the database

    `source doc\database.sql`

11. Press Ctrl+D to quit MariaDB client

