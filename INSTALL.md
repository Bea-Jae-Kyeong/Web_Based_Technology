#Installation guide for our project
===============

The instructions provided here are for Microsoft Windows platforms (Win7 or above).
The software used along the development of our project is:
1)Apache HTTP Server
2)MySQL Database Server
3)PHP
4)CodeIgniter
5)Git
6)XAMPP

##Install Xampp

First, you have to install Xampp Control Panel. Download it from the link below:
https://www.apachefriends.org/es/index.html

You need to run Apache HTTP Server and MySQL Database Server of Xampp Control Panel everytime you want to use our web pages.

##Download CodeIgniter

Second, you need to download CodeIgniter folder.

1. Download it from: https://codeigniter.com/
2. Unpack its content to '/xampp/htdocs/' in your computer.
3. Test by launching XAMPP and accessing http://localhost/ci

##Extract ci folder

Third, in order to use our web pages, you need to extract zip files that are released and rename it into 'ci'.

Then remove folder /xampp/htdocs/CodeIgniter-X.X.X

So you have /xampp/htdocs/ci now.

##Import database in phpMyAdmin

Fourth, use the link below and check if you have a database called 'test'. If not, you can choose your database by going to \xampp\htdocs\ci\myapp\config/database.php and change its name of 'database'=>'test' by your own database's name.
https://localhost/phpmyadmin/

Finally, click the database you've selected and click 'import'.
Select the sql file \xampp\htdocs\ci\db\schema.sql and execute.

You now have the table for our web!