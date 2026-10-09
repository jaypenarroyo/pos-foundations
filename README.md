# POS Foundations

A four-page CodeIgniter 4 application created for the IT0049 technical formative assessment.

## Features

- Landing page at `/`
- About page at `/about`
- Customer Accounts page at `/customers`
- User Accounts page at `/users`
- Five static customer records displayed with `foreach`
- Five static staff records displayed with `foreach`
- Responsive navigation and table styling
- Automated feature tests for all four routes

This version intentionally does not use a database. The customer and user arrays act as temporary data sources.

## Requirements

- PHP 8.2 or newer
- Composer 2
- PHP extensions `intl` and `mbstring`

## Run the included project

The supplied ZIP includes the installed Composer dependencies. Extract it, open the `pos-foundations` folder in Visual Studio Code, and run:

```powershell
php spark serve
```

Open `http://localhost:8080/` in a browser.

If dependencies are not included after the project is uploaded to GitHub or copied through another method, restore them with:

```powershell
composer install
```

## Verify the routes

```powershell
php spark routes
```

## Run the automated tests

```powershell
vendor\bin\phpunit
```

## Application structure

```text
app/
  Config/Routes.php
  Controllers/Pages.php
  Controllers/Customers.php
  Controllers/Users.php
  Views/layout.php
  Views/pages/home.php
  Views/pages/about.php
  Views/customers/index.php
  Views/users/index.php
public/
  css/app.css
tests/
  Feature/PagesTest.php
```

## GitHub notes

The project `.gitignore` excludes `.env` and `vendor`. This is standard Composer practice. Users who clone the repository should copy `env` to `.env`, configure their base URL, and run `composer install`.

## Hosting notes

For production hosting:

1. Use PHP 8.2 or newer with `intl` and `mbstring`.
2. Point the website document root to the `public` directory.
3. Run `composer install --no-dev`.
4. Set `CI_ENVIRONMENT = production` in the server's `.env` file.
5. Set `app.baseURL` to the final HTTPS URL.
6. Make the `writable` directory writable by the web server.
