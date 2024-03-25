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


## Table of Contents
1. [Installation](#installation)
2. [Usage](#usage)
3. [Features](#features)
4. [Technologies Used](#technologies-used)
5. [Contributing](#contributing)
6. [License](#license)

## Installation
### Prerequisites
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

- Configure the env file by adding the Key within shared and the Database details provided within the group or generate a  key.

### Step Six 
- Run the following command
```
php artisan serve
```
- This should generate a laravel page that has the team names.

### Step Seven

You are free to code. Just remember to create your branch in order to work and make pull requests to the master branch. Happy Coding. 

## Usage
[Provide instructions on how to use the e-commerce website, including how users can navigate through the site, make purchases, manage their accounts, etc. Screenshots or GIFs can be included to demonstrate the user experience.]

## Features
- User registration and authentication
- Product browsing and searching
- Shopping cart functionality
- Payment processing
- Order tracking
- Admin dashboard for managing products, orders, and users
- Wishlist functionality
- Product reviews and ratings
- Responsive design for mobile devices
- SEO optimization
- Integration with social media platforms


## Behavior Driven Development 

## Features and Scenarios

### User Features:

| Feature | Description |
|---------|-------------|
| User registration and authentication | Users can create an account and log in securely. |
| User profile management | Users can view, edit, and update their profile information. |
| Product browsing and searching | Users can search for products and browse through different categories. |
| Product filtering and sorting | Users can filter and sort products by various criteria such as category, price, and popularity. |
| Product details page | Users can view detailed information about each product including descriptions, images, prices, and reviews. |
| Shopping cart management | Users can add products to their shopping cart, view/edit the cart, and remove items as needed. |
| Wishlist functionality | Users can add products to their wishlist for future reference. |
| Checkout process | Users can proceed through a seamless checkout process with multiple payment options. |
| Order history and tracking | Users can view their order history and track the status of their orders. |
| User reviews and ratings | Users can leave reviews and ratings for products they have purchased. |
| Account settings | Users can manage account settings such as password change and email preferences. |

### Admin Features:

| Feature | Description |
|---------|-------------|
| Admin authentication and authorization | Admins can securely log in and access administrative functionalities. |
| Dashboard | Admins have access to a dashboard for overall site management and monitoring. |
| Product management | Admins can add, edit, and delete products from the inventory. |
| User management | Admins can view, edit, and delete user accounts as needed. |
| Order management | Admins can view order details, update order status, and process orders. |
| Inventory management | Admins can track stock levels, receive notifications for low stock, and manage inventory. |
| Content management system | Admins can manage static pages such as About Us and Contact Us. |


### Scenarios:

| Scenario ID | Scenario Description | Given (Preconditions) | When (Actions) | Then (Expected Outcome) |
|-------------|----------------------|------------------------|-----------------|--------------------------|
| 1           | User registers successfully | User is on the registration page | User fills out registration form and clicks "Register" button | User receives a confirmation email and is redirected |
| 2           | User logs in successfully | User is on the login page | User enters valid credentials and clicks "Login" button | User is redirected to the dashboard page |
| 3           | User searches for a product | User is on the homepage or product listing page | User enters search query in the search bar and clicks "Search" | Products matching the query are displayed |
| 4           | User adds a product to the shopping cart | User is logged in and viewing a product page | User clicks "Add to Cart" button for a specific product | Product is added to the shopping cart |
| 5           | User proceeds to checkout from the shopping cart | User has added products to the shopping cart | User clicks "Checkout" button in the shopping cart | User is redirected to the checkout page |
| 6           | User completes the checkout process successfully | User is on the checkout page with filled out details | User clicks "Place Order" button | Order confirmation message is displayed |
| 7           | Admin logs in successfully | Admin is on the login page | Admin enters valid credentials and clicks "Login" button | Admin is redirected to the admin dashboard |
| 8           | Admin adds a new product | Admin is logged in and on the admin dashboard | Admin navigates to "Add Product" section and fills out details | New product is added and displayed on the product list |
| 9           | Admin updates an existing product | Admin is logged in and on the admin dashboard | Admin navigates to the product details page and updates info | Product details are updated and reflected on the website |
| 10          | Admin deletes a product | Admin is logged in and on the admin dashboard | Admin navigates to the product details page and clicks "Delete" | Product is removed from the product list and database |

### Scenario 1: User Navigation

| Scenario Description                  | Given (Preconditions)                        | When (Actions)                                  | Then (Expected Outcome)                      |
|--------------------------------------|----------------------------------------------|-------------------------------------------------|----------------------------------------------|
| User navigates to home page          | User is on the home page                     | User navigates to the home page                 | User remains on the home page                |
| User clicks on "About Us" link       | User is on the home page                     | User clicks on the "About Us" link              | User navigates to the "About Us" page       |
| User clicks on "Contact Us" link     | User is on the home page                     | User clicks on the "Contact Us" link            | User navigates to the "Contact Us" page     |
| User clicks on "Products" link       | User is on the home page                     | User clicks on the "Products" link              | User navigates to the "Products" page       |

### Scenario 2: User Authentication

| Scenario Description                         | Given (Preconditions)               | When (Actions)                                 | Then (Expected Outcome)                           |
|-----------------------------------------------|-------------------------------------|------------------------------------------------|---------------------------------------------------|
| User clicks on "Sign Up" link                 | User is on the home page            | User clicks on the "Sign Up" link               | User navigates to the sign-up page                |
| User fills out sign-up form and submits       | User is on the sign-up page         | User fills out the sign-up form and submits     | User creates an account and an email verification link is sent to user email ID            |
| User clicks on email verification link       | User is on the sign-up page         | User clicks on email verification from email inbox    | The account is verified now and user is asked to login           |
| User clicks on "Log In" link                  | User is on the home page            | User clicks on the "Log In" link                | User navigates to the login page                  |
| User fills out login form and submits         | User is on the login page           | User fills out the login form and submits       | User logs into their account successfully         |
| User clicks on "Forgot Password" link         | User is on Login Page                   | User clicks on the "Change Password" link       | User navigates to the change password page        |
| User fills out password change form and submits | User is on the change password page | User enters the email ID and click on Send Password Reset Link | User receives an email verification link in email inbox        |

### Scenario 3: Product Management

| Scenario Description                         | Given (Preconditions)          | When (Actions)                                  | Then (Expected Outcome)                      |
|-----------------------------------------------|--------------------------------|-------------------------------------------------|----------------------------------------------|
| User searches for products by name or category | User is on the "Products" page | User searches for products by name or category | Products matching the search criteria are displayed |

### Scenario 4: Shopping Cart

| Scenario Description                  | Given (Preconditions)        | When (Actions)                            | Then (Expected Outcome)                  |
|--------------------------------------|------------------------------|-------------------------------------------|------------------------------------------|
| User clicks on "View Basket" link    | User is logged in            | User clicks on the "View Basket" link     | User views their current basket          |
| User adds products to the basket     | User is logged in            | User adds products to the basket          | Products are displayed in the basket    |

### Scenario 5: Order Management

| Scenario Description                          | Given (Preconditions)        | When (Actions)                                 | Then (Expected Outcome)                     |
|----------------------------------------------|------------------------------|------------------------------------------------|---------------------------------------------|
| User clicks on "Previous Orders" link        | User is logged in            | User clicks on the "Previous Orders" link      | User views their previous orders            |
| User views their previous orders             | User is logged in            | User views their previous orders               | User's previous orders are displayed        |

### Scenario 6: Checkout Process

| Scenario Description                            | Given (Preconditions)                    | When (Actions)                                          | Then (Expected Outcome)                         |
|------------------------------------------------|------------------------------------------|---------------------------------------------------------|-------------------------------------------------|
| User clicks on "Checkout" button               | User is logged in and has items in cart | User clicks on the "Checkout" button                     | User proceeds to the checkout process            |
| User completes the checkout process and submits | User is on the checkout page             | User completes the checkout process and submits the order | Dummy payment is processed, and the order is submitted |

### Scenario 7: Contact Us Form

| Scenario Description                  | Given (Preconditions)     | When (Actions)                                  | Then (Expected Outcome)                    |
|--------------------------------------|---------------------------|-------------------------------------------------|--------------------------------------------|
| User fills out and submits contact form | User is on the "Contact Us" page | User fills out the contact form and submits it | Request is sent to the admin automatically |



## Technologies Used
- Frontend:
  - HTML
  - CSS
  - JavaScript
- Backend:
  - Laravel
  - MySQL

- Hosting:
  - Aston University Hosting

## Contributing
[Include guidelines for contributing to the project, such as how to report bugs, suggest new features, or submit pull requests. Be sure to specify any coding standards or conventions to follow.]

## License
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


## Contact
[Provide contact information for the maintainers or developers of the e-commerce website, such as email addresses or links to social media profiles.]
