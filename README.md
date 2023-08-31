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
