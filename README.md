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

### Step 1: Preparing project

Open the folder where you have **all your projects** in **Visual Studio** and enter the command in the **Git Bash** terminal:

```php
 $ composer create-project --prefer-dist laravel/laravel jobSearch
 ```

> [!NOTE] 
> this command is used to install **Laravel** and **Composer**.

### Step 2: Files and repository

You must create a folder that will contain the **Laravel files** created **automatically**.

> [!WARNING] 
> Once created, you must open it **individually** from the **folder** where it is **hosted** on your device. Otherwise, you can that doesn't work properly.

You will have to **link it** to your **repository**.

> [!NOTE] 
> If everything has gone well you should see the **Laravel** readme when opening your repository.

<p align="center"><img width="292" alt="image" src="https://github.com/user-attachments/assets/c7c0939c-89f2-488a-be47-06fbaa37c08f"></p>


### Step 3: Put everything up to date

Switch branch to **dev** with the command:

```php
git switch dev
```

> [!CAUTION] 
> Don't forget to use *git pull* to **bring** your repository **branches**.

Then enter the command:

```php
npm install
```

> [!CAUTION] 
> It may not work if you do not have **node.js** installed.

### Step 4: Create database
Creating a database in **Admin** **SQL**.

<p align="center"><img width="200" alt="image" src="https://github.com/user-attachments/assets/f8149ac2-e430-422b-ae0b-bfbb77751035"></p>

In the *.env* file **remove** the *#* in these lines, enter the **name** of your **database** and **replace** *Laravel* with *sql*.

<p align="center"><img width="287" alt="image" src="https://github.com/user-attachments/assets/bdfec806-cdcc-4a05-a6bf-43a59cc7658e"></p>


### Step 5: Server

To **run the server** enter the command:

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
> If you click the link it should take you to the **Laravel page**.


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
http://127.0.0.1:8000/api/offers/1/news
```

### Update (PUT)

```php
http://127.0.0.1:8000/api/offers/1/news/1
```



## :white_check_mark: Tests

> [!IMPORTANT]
>  Testing the project so we can check if it works correctly using this command:

```php
php artisan test
```
![tests readme](https://github.com/user-attachments/assets/5670b327-2220-4e31-93d8-3e1bf3f71250)

### Coverage

use this command:

```php
php artisan test --coverage-html=coverage-report
```
> [!NOTE]
>  You need to use the command each time you do a new test, so it can update your coverage.

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
