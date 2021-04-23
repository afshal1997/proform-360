**Project Configuration**

After cloning the project, there might be some configurations:

* Clone the repo and `cd` into it.
* Create .env file at project root similar to .env.example
* Set your database credentials into your .env file.
* Run `composer install`
* Run `npm install`
* Generate application key by running `php artisan key:generate`
* Run `php artisan migrate:fresh --seed`
* For Admin visit `/login` with email: `admin@demo.com` and password: `Abcd1234`
