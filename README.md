# Team 5 repository for CSE 340 course

## Requirements
You need to install XAMP, MAMP, or Docker if you feel more expert to set a PHP web server.

- PHP 7.3 or higher
- Apache
- MySQL 5 or higher
- Composer (optional)
## Getting started
Navigate each week through commits. You need to install composer if you want to use the dotenv library for enviroment configurations. If you do wanto to, you might need to update de file `phpmotors/library/connections.php` and use your own credentials. This step is extra, but is not a good practice to save a password in a file managed by version control.

- Run `composer install` inside the phpmotors directory
- Copy the file `.env-example`, and create a new one named `.env`
- Update the `.env` file with your database settings

## Contributors
 - @wemf