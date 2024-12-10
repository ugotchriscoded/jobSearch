# Proyect - Job Search App

## :bulb: Project description
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

To keep **track** of my day-to-day life at the level of my **job search**, I have created a **job tracking application** in **Laravel**.

## Requirements
- **Display** all our **applied offers** with their **status** on the screen by **Endpoints** *(Blade).*
- There must be a **status position** that is *"In Progress"* or *"Completed".*
- We must be able to **delete, insert or modify** an entry through **Endpoints**.
- We have to be able to watch the show on **Endpoints** *(Blade)*.
- **Date management**: *1 creation*, *2 last modification*.
- **test coverage**: *70% minimum*.

## :eye_speech_bubble: Project overview

## Project Diagram (BBDD)

![BBDD](https://github.com/user-attachments/assets/b3156863-3f33-4ff9-9285-38492a79b6a7)

## :scroll: Installation requirements

:black_circle: XAMPP

:black_circle: Composer

:black_circle: Node.js (Installing NPM)

:black_circle: Xdebug 

:black_circle: Postman

> [!NOTE] 
If you can't install XAPP, you can also use another local server that supports MySQL and PHP.

## :scroll: Installation

### Step 1: Creating database

Creating a database in **Admin** **SQL**.

<p align="center"><img width="200" alt="image" src="https://github.com/user-attachments/assets/f8149ac2-e430-422b-ae0b-bfbb77751035"></p>


### Step 2: Cloning repository

```php
git clone https://github.com/ugotchriscoded/jobSearch
 ```
### Step 3: Putting everything up to date

In the *.env* file **remove** the *#* in these lines, enter the **name** of your **database** and **replace** *Laravel* with *sql*.

<p align="center"><img width="287" alt="image" src="https://github.com/user-attachments/assets/bdfec806-cdcc-4a05-a6bf-43a59cc7658e"></p>

### Server

To **run the server** enter this command:

```php
npm run dev
```

<p align="center"><img width="317" alt="image" src="https://github.com/user-attachments/assets/ff2e3e05-881e-49e7-9b02-e80db682cd3e"></p>


> [!WARNING]
> **DON'T work** on that terminal again, but you should keep it working. **DON'T KILL IT.**

To see the **running serve** enter the command:

```php
php artisan serve
```
<p align="center"><img width="372" alt="image" src="https://github.com/user-attachments/assets/b6f696e7-8843-4bfc-9938-95c3a23ec47c"></p>


> [!NOTE]
> If you press Control and click the link it should take you to the main offers.


## Documentation (Endpoints)

### Index (GET)

```php
http://127.0.0.1:8000/api/offers
```

### Show (GET)

```php
http://127.0.0.1:8000/api/offers
```

### Store (POST)

```php
http://127.0.0.1:8000/api/offers/id/news
```

### Delete (DEL)

```php
http://127.0.0.1:8000/api/offers/id/news/id
```

### Update (PUT)

```php
http://127.0.0.1:8000/api/offers/id/news/id
```



## :white_check_mark: Tests

> [!IMPORTANT]
>  Testing the project so we can check if it works correctly using this command:

```php
php artisan test
```
![tests readme](https://github.com/user-attachments/assets/9215c276-9732-4992-8efb-c81f5799dabc)


### Coverage

Use this command:

```php
php artisan test --coverage-html=coverage-report
```

> [!NOTE]
>  You need to use the command each time you do a new test, so it can update your coverage. To see your test open the coverage report folder arhives *index.html* and *dashboard.html*

![coverage](https://github.com/user-attachments/assets/a01b9038-cc08-4b29-8d84-1223b7f996d9)


## Authors
Developed by **Valeria Dobado Gonzalez**:
- **Github**: *https://github.com/ugotchriscoded/ugotchriscoded*
- **Linkendin**: *https://www.linkedin.com/in/valeria-dobado-gonz%C3%A1lez-262060328/*

## Languages
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='php' src='https://img.shields.io/badge/php-100000?style=for-the-badge&logo=php&logoColor=white&labelColor=000000&color=000000'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='css3' src='https://img.shields.io/badge/css3-100000?style=for-the-badge&logo=css3&logoColor=white&labelColor=000000&color=000000'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='json' src='https://img.shields.io/badge/JSON-100000?style=for-the-badge&logo=json&logoColor=white&labelColor=000000&color=000000'/></a>

## Tools
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='github' src='https://img.shields.io/badge/github-100000?style=for-the-badge&logo=github&logoColor=white&labelColor=000000&color=000000'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='Laravel' src='https://img.shields.io/badge/Laravel-100000?style=for-the-badge&logo=Laravel&logoColor=white&labelColor=000000&color=000000'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='Git' src='https://img.shields.io/badge/git-100000?style=for-the-badge&logo=Git&logoColor=white&labelColor=000000&color=000000'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='MySql' src='https://img.shields.io/badge/my_sql-100000?style=for-the-badge&logo=MySql&logoColor=white&labelColor=000000&color=000000'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='xampp' src='https://img.shields.io/badge/xampp-100000?style=for-the-badge&logo=xampp&logoColor=white&labelColor=000000&color=000000'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='xampp' src='https://img.shields.io/badge/postman-100000?style=for-the-badge&logo=xampp&logoColor=white&labelColor=000000&color=000000'/></a>

## Thanks for reading!

Thanks for your attention, have a nice day! <3
