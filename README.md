# Laravel Moduler Sandbox

## Installation

1. Clone the repository
2. Move to the project directory
   ```bash
   cd laravel-moduler-sandbox
   ```
3. Run docker container
   ```bash
   docker compose up -d 
   ```
4. Copy .env.example to .env
   ```bash
   cp .env.example .env
   ```
5. Install composer dependencies
   ```bash
    docker compose exec laravel.test composer install
   ```
6. Install npm dependencies
   ```bash
   docker compose exec laravel.test npm install
   ```
7. Build assets
   ```bash
    docker compose exec laravel.test npm run build
   ```
8. Access the application (http://localhost)


## Make a new module
See: https://github.com/InterNACHI/modular

```bash
docker compose exec laravel.test php artisan make:module <module-name>
// Would you like to cancel and configure your module namespace first? (yes/no) [yes]:
// > no

docker compose exec laravel.test composer update modules/<module-name>
```
