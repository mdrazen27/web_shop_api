# web_shop_api

## install xampp version 8.1.6 on windows
    https://www.apachefriends.org/
    start apache and mysql from xampp controller
    make database named web_shop on localhost/phpmyadmin set encoding to utf-8 bin

## Install composer
    https://getcomposer.org/download/

## go into webshop folder 
    copy .evn.example file in .env file in the same root directory

    configure database connection enter username and password for datatabase connection
    and the name of the database you just made windows defaults are username root and no password, name is set
    up automatically 
    
    Run commands in terminal:
    
    navigate into web_shop folder with cd web_shop

    composer install

    run php artisan key:generate

    run php artisan migrate:fresh --seed

    run php artisan serve 

## open postman and import collection WEB SHOP from this forlder

    

