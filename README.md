<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## About Application 

Subscription-Platform

This is a simple subscription platform that allows users to subscribe to websites. Whenever a new post is published on a website that a user is subscribed to, the user will receive an email with the post title and description.

The application is built with PHP and MySQL. It uses the Enqueue library to schedule emails in the background.


```markdown
# Subscription Platform Backend

This project is a simplified subscription platform backend that allows users to subscribe to websites and receive email notifications when new posts are published.

## Requirements

- PHP 7.* or 8.*
- Laravel 8.*
- MySQL
- Composer (for package management)

## Installation

1. Clone this repository to your local machine:
   ```
   git clone https://github.com/Rahul-Abhishek-AU6/Newsletter-Subscription.git
   ```

2. Navigate to the project directory:
   ```
   cd Newsletter-Subscription
   ```

3. Install the required dependencies using Composer:
   ```
   composer install
   ```

4. Create a copy of the `.env.example` file and name it `.env`:
   ```
   cp .env.example .env
   ```

5. Configure your `.env` file with your database and mail settings.

6. Generate an application key:
   ```
   php artisan key:generate
   ```

7. Run the database migrations:
   ```
   php artisan migrate
   ```

8. Start the Laravel development server:
   ```
   php artisan serve
   ```

9. Run the queue worker for processing background jobs:
   ```
   php artisan queue:work
   ```

## API Endpoints

- **Create Post:**
  ```
  POST /websites/{website}/posts
  ```
  Create a new post for a particular website.

- **Subscribe:**
  ```
  POST /websites/{website}/subscribers
  ```
  Subscribe a user to a particular website.

## Contributing

Contributions are welcome! If you find any issues or have improvements to suggest, please feel free to open an issue or submit a pull request.

## License

This project is licensed under the GENERAL PUBLIC LICENSE.

```

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

