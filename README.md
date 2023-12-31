<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Bytetop 
This is an ecommerce platform that sells computers and accessories targeting students between the age range of 18-30. 
This project is made by Team 1 for the Team Project Module. 

## Setup  Guidelines and Pre-requisites

Please ensure you have composer, xampp installed on your machine. 
Ensure you have Nodejs installed too. 
ENsure your xampp is apache and sql are running 

### Step One
- Clone the master branch of the repository if you are a collaborator into C:\xampp\htdocs folder

### Step Two 

- Within the project, run the command to install the project's Laravel dependencies

```
composer install
```

### Step Three

- Run this command to install any front-end dependencies through node package manager(npm)
```
npm install
```

### Step Four 
 
- The .env.example fle within the project gives you a boiler plate for the env file create the .env filr by running this command. 
```
cp .env.example .env
```
### Step Five 

- Configure the env file by adding the Key within shared and the Database details provided within the group.

### Step Six 
- Run the following command
```
php artisan serve
```
- This should generate a laravel page that has the team names.

### Step Seven

You are free to code. Just remember to create your branch in order to work and make pull requests to the master branch. Happy Coding. 

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


