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


## ADMIN CREDENTIALS
khanmairaj78@gmail.com
1234qwer


## Table of Contents
1. [Installation](#installation)
2. [Features](#features)
3. [Behavior Driven Development](#behavior-driven-development)
4. [User Scenarios](#user-scenarios)
5. [Admin Scenarios](#admin-scenarios)
6. [Reported Bugs](#reported-bugs)
7. [Technologies Used](#technologies-used)
8. [Contributing](#contributing)
9. [License](#license)
10. [Contact](#contact)

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

## Features
- User registration and authentication
- Product browsing and searching
- Shopping cart functionality
- Payment processing
- Order tracking
- Admin dashboard for managing products, orders, and users
- Wishlist functionality
- Product reviews and ratings

## Behavior Driven Development 

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
| User fills out password change form and submits | User is on the change password page | User enters the email ID and click on Send Password Reset Link | User receives an update password link in email inbox        |
| User clicks on update password link       | User is on the change password         | User clicks on update password link from email inbox    | The change password form is populated and user updates the new password          |

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

## User Scenarios

| Scenario                                    | Description                                                                                                                                                                             |
|---------------------------------------------|-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| 1. Sign Up                                  | A new user signs up for the website for the first time, creating an account with their email address and setting a password.                                                             |
| 2. Password Change                          | After the first login, a user decides to change their password for future security. They navigate to the password change page and update it.                                           |
| 3. Search and Filter Products               | A user searches for a specific product or applies filters to narrow down the product list by category or price range.                                                                     |
| 4. Place an Order                           | A user adds items to their shopping cart and proceeds to checkout. They submit their order, which registers it in the database along with the total price.                            |
| 5. Return a Product                         | A user wants to return a product they purchased in a previous order. They navigate to their order history, select the order containing the product, and initiate a return.           |
| 6. Manage Shopping Cart                     | A user adds items to their shopping cart, updates the quantity of some items, and removes others.                                                                                       |
| 7. View, Add, Update, Delete Details        | A user views their account details, adds a new shipping address, updates their email address, and deletes an outdated phone number.                                                      |
| 8. Check Status of Past Orders              | A user checks the status of their past orders to track their progress.                                                                                                                  |
| 9. Rate and Review Products                 | A user purchases a product and leaves a review, rating the product.                                               |

## Admin Scenarios

| Scenario                                    | Description                                                                                                                                                                             |
|---------------------------------------------|-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| 1. Sign Up                                  | An admin signs up for the website for the first time, creating an account with their email address and setting a password.                                                             |
| 2. Password Change                          | After the first login, an admin decides to change their password for future security. They navigate to the password change page and update it.                                           |
| 3. Process an Order                         | An admin processes an order by checking customers' transactions and processing shipments. They review order details, update shipment status, and confirm shipment.                 |
| 4. Manage Customers                         | An admin views, adds, deletes, and updates customers' details such as personal information, addresses, and contact information.                                                      |
| 5. Inventory Management                     | An admin effectively operates the inventory management system by adding, removing, or editing products. They update stock numbers, manage product categories, and set pricing.     |
| 6. Filter and View Order Status             | An admin filters and views the status of orders to track their progress. They can filter orders by status (e.g., pending, shipped, delivered) and view detailed order information. |
| 7. Automatic Stock Update                   | An admin makes changes to the inventory (e.g., adding new products, updating product quantities) and ensures that the stock numbers are automatically updated in the system.       |

## Reported Bugs

## Bug 1: Price Range Filtering Issue

- **Description:** Filtering the price range to the original range is not working as expected.
- **Steps to Reproduce:**
  1. Go to the product listing page.
  2. Apply a price range filter (e.g., $10 - $20).
  3. Remove the filter or reset it to the original range.
  4. Notice that the products displayed do not revert to the original range.
- **Expected Behavior:** When removing the price range filter or resetting it to the original range, the product listing should display the products within the original range.

## Bug 2: Flash Message Color Editing Issue

- **Description:** We are unable to edit the color of the reset password flash message "We have emailed your password reset link".
- **Steps to Reproduce:**
  1. Trigger the password reset functionality by requesting a password reset link.
  2. Observe the flash message displayed on the screen.
  3. Attempt to edit the color of the flash message.
- **Expected Behavior:** The color of the flash message should be editable to match the styling of the website or application.



## Technologies Used
- Frontend:
  - HTML
  - CSS
  - JavaScript
- Backend:
  - Laravel
  - MySQL

- Hosting:
  - Digital Ocean

## Contributing

We welcome contributions from the community to improve our project. Whether you want to report a bug, suggest a new feature, or submit a pull request, we appreciate your help in making our project better. Please take a moment to review the guidelines below before contributing:

### How to Contribute

1. **Reporting Bugs:** If you encounter a bug or issue with the project, please open a new issue and provide detailed information about the bug, including steps to reproduce it, expected behavior, and any relevant screenshots or error messages.

2. **Suggesting Features:** If you have an idea for a new feature or enhancement, please open a new issue and describe the feature you would like to see added. We welcome feedback and suggestions from the community.

3. **Submitting Pull Requests:** If you would like to contribute code to the project, you can submit a pull request. Before submitting a pull request, please ensure the following:
   - Fork the repository and create a new branch for your feature or bug fix.
   - Follow the coding standards and conventions used in the project.
   - Write clear and concise commit messages.
   - Test your changes thoroughly to ensure they work as expected.
   - Update the documentation, if applicable.
   - Submit the pull request and provide a detailed description of the changes made.

### Coding Standards and Conventions

- Follow the coding style and conventions used in the project.
- Write clean, readable, and maintainable code.
- Use meaningful variable names and comments to explain complex code.
- Keep code modular and well-structured.
- Adhere to best practices and industry standards for the programming language and framework used.

We appreciate your contributions and thank you for helping to improve our project!


## License
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


## Contact
| Name                          | Email ID                  |
|-------------------------------|---------------------------|
| Venecia Kakusha              | 230406094@aston.ac.uk     |
| Maneendra Reddy Meegada      | 230342404@aston.ac.uk     |
| Saikiran Surineni            | 230342507@aston.ac.uk     |
| Morikeh Daramy               | 230140888@aston.ac.uk     |
| MohammadJavad Aghababaei Beni| 230357039@aston.ac.uk     |
| Mairaj Shakeel Khan   | 220281081@aston.ac.uk     |

