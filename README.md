This is a demo for recruitment purposes, running at https://tommi.alajoki.fi/webstore

The app is a spoof of a webstore with basic functionality of a shopping cart, search etc.

There is also currently a panel at /admin where you can add products for testing purposes, with no navlink pointing to it.

I will most likely be adding feature to it slowly, check out the to-do below for a kind of roadmap.

## Running locally

You can also run it locally by cloning the repo and making sure your directory has a `.env` file with at least the MYSQL DB connection details shown in the `.env.example` file.

Before running it locally run `composer install` to install dependencies and `php artisan migrate:fresh` to create the required tables in your DB. Then you can run it by using `php artisan serve` and by default it'll run at `localhost:8000`. You will need to add products to your DB with the `/admin` panel (or manually in your DB).

## To-do

- Remove all the unnecessary boilerplate created by Laravel's new function
- Use a faker function to create fake data for testing
- Add a lot of validation to the admin panel (and show some kind of confirmation the product got added)
- Add ability to go back to your previous search result without using back on the browser (i.e. link)
- Add ability to actually upload a picture for a product
- Show said pictures on the search feature
- Enable authentication for the testing admin panel
- Notify user that product has been added to cart (and dynamically update stock and cart total values)
- Lock stock if somebody has product in cart, and return it to stock if/when session ends (to make sure two people cannot try purchase the same product with 1 in stock etc.)
- Enable pseudo-purchasing
- Add ability for multiple pictures for one product (probably host pics somewhere else than the app itself)

### Tertiary

- Currently I need to have links appended with a prefix on the production server as the store is running in a subdirectory and all links thus point to the wrong location. This is more likely an NGINX issue than laravel but can be circumvented with doing absolute pathing. Have not found a solution yet.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" height="50"></a></p>
