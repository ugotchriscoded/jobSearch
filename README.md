# Proyect - Job Search App

## :bulb: Project description
To keep **track** of my day-to-day life at the level of my job search, I have created a **job tracking application** in **Laravel**.

## Requirements
- **Display** all our **applied offers** with their **status** on the screen by **Endpoints** *(Blade).*
- There must be a **status position** that is *"In Progress"* or *"Completed".*
- We must be able to **delete, insert or modify** an entry through **Endpoints**.
- We have to be able to watch the show on **Endpoints** *(Blade)*.
- **Date management**: *1 creation*, *2 last modification*.
- **test coverage**: *70% minimum*.

## :eye_speech_bubble: Project overview

## Project Diagram (BBDD)

## :scroll: Installation

### Step 1: Preparing project

Open the folder where you have **all your projects** in **Visual Studio** and
enter the command in the **Git Bash** terminal:

```php
 $ composer create-project --prefer-dist laravel/laravel jobSearch
 ```

> [!NOTE] 
> this command is used to install **Laravel** and **Composer**.

### Step 2: Files and repository

You must create a folder that will contain the **Laravel files** created **automatically**.

> [!WARNING] 
> Once created, you must open it **individually** from the folder where it is hosted on your device. Otherwise, you can that doesn't work properly.

You will have to **link it** to your **repository**.

> [!NOTE] 
> If everything has gone well you should see the **Laravel** readme when opening your repository.

(IMAGE)

### Step 3: Put everything up to date

Switch branch to **dev** with the command:

```php
git switch dev
```

> [!CAUTION] 
> Don't forget to use *git pull* to bring your repository branches.

Then enter the command:

```php
npm install
```

> [!CAUTION] 
> It may not work if you do not have **node.js** installed.

### Step 4: Create database
Creating a database in **Admin** **SQL**.

(IMAGE)

In the *.env* file remove the # in these lines, enter the name of your database and replace **Laravel** with **sql**.

(IMAGE)

### Step 5: Server

To **run the server** enter the command:

```php
npm run dev
```

(IMAGE)

> [!WARNING]
> We won´t work on that terminal again, but you should keep it working. Don't kill it.

To see the **running serve** enter the command:

```php
php artisan serve
```
(IMAGE)

> [!NOTE]
> If you click the link it should take you to the **Laravel page**.

### Step 6: Key

To generate an **application key** enter the command:

```php
php artisan key:generate
```

(IMAGE)

### Step 7: Create tables 
Enter this command so Laravel includes **viewable example tables** in the browser:

```php
php artisan migrate:fresh
```

(IMAGE)

> [!NOTE]
> These tables must appear within.

To create a new table enter the commands:

```php
php artisan make:migration create_jobsearch_table
```

> [!CAUTION]
> Other table must be created in the migrations folder. To update the info use:

```php
php artisan migrate:fresh
```

(IMAGE)

> [!NOTE]
> The new key will appear in this line of the *.env* file.

## Documentation (Endpoints)

## :white_check_mark: Tests

## Authors
Developed by Valeria Dobado Gonzalez:
- Github: https://github.com/ugotchriscoded/ugotchriscoded
- Linkendin: https://www.linkedin.com/in/valeria-dobado-gonz%C3%A1lez-262060328/

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
