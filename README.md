Preconditions

1. Install LAMP stack

2. Install Lavarel 

2. Install phpunit 

3. Run the command: sudo nano /etc/apache2/mods-enabled/dir.conf

	Include index.php to the list
	Save the file

4. unzip the file to [Your Folder]


Creating and initialing the database

Restore the database backup

1. Login in the MySQl, run the command: mysql -u root -p[password]

2. Create the database, run the command: create database public_news; exit;

3. Restore the database: run the command: mysql -u root -p[password] public_news < [Your Folder]/Source/backup.sql

4. Login in the MySQl, run the command: mysql -u root -p[password]

5. run the command: CREATE USER 'user_connection'@'localhost' IDENTIFIED BY '$eguro01';

6. run the command: GRANT ALL ON public_news.* TO 'user_connection'@'localhost';

Preparing the source code


1. run the command: cd /var/www/html 

2. copy [Your Folder]/Source/public_news to /var/www/html

3. Run the commands:
     cd /var/www/html/public_news 
     php artisan serve

4. Open the application  http://localhost:port/


Unit test folder: /var/www/html/public_news/tests


Assumptions

1. The article should have a permalink if someone wants to share it and for a better SEO.
2. Make the article visible or not.
3. The images are being saved in a cloud platform called Cloudinary.


Improving the assignment

1. About the single photo, it should be informed if the file will be saved in the server, database, or another place.

2. You could use another program to record the screen, because the version 2 just works on Windows OS.
