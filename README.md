# Free Fire Tournament Platform

PHP 8.2+ / MySQL 8+ responsive tournament website and REST API foundation.

## Setup

1. `cp .env.example .env`
2. Configure MySQL in `.env`.
3. Run `database/migrations/001_initial_schema.sql`.
4. Point the web server document root to `public/`.
5. For local development: `php -S localhost:8080 -t public`.

The interface is mobile-first and adapts to tablets and desktop screens. Business actions must be completed through authenticated server-side services before production deployment.
