ATTENTION: For demonstration purpose this site is also available on the following link:
LINK: [veterinary clinic](http://176.116.112.97/login).

Laravel + Patternfly
===========


## Laravel 5.4 [Modern PHP Application Framework] + Patternfly 3.20 [Enterprise UI Framework]
This project consists in a clean Laravel 5.4 installation with auth scaffolded and Patternfly 3.20 required via npm (and installed trough laravel mix)

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

## About PatternFly
PatternFly is a community project that promotes design commonality and improved user experience. Its offerings include open source code, patterns, style guides and an active community that helps support it all.
- [Code](https://www.patternfly.org/download/)
- [Pattern Library](https://www.patternfly.org/pattern-library/)
- [Community](https://www.patternfly.org/community/)
- [Styles](https://www.patternfly.org/styles/)

## How to use it
Since this project originated in order to have a quickstart of laravel + patternfly, everything is available out of the box after installation, here are the steps:

- Clone/download the project to a local directory
- Prepare the project directory for web access and be sure to have a [Homestead](https://laravel.com/docs/5.4/homestead) compatible environment (nginx, php composer, etc)
- cd to project root
- Run: composer install
- Run: cp .env.example .env 
- Run: php artisan key:generate
- `mysql -u root -p # run it as a supervisor`
- `CREATE DATABASE IIS`
- Configure the Laravel '.env' environment file (database name, user, host).
  - DB_DATABASE=IIS
  - DB_USERNAME=root
  - DB_PASSWORD=root
- `php artisan migrate`
- `php artisan db:seed`
- If everything went well you can run the server on your localhost by `php artisan serve`
- Open your localhost to see the welcome page. For example: http://127.0.0.1:8000.
