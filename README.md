## About
The **SUMMER SUNSET** project is an idea that came to me, and I believe it has potential. I usually rely on tutorials for my projects, but for this one, I decided to go off on my own and see what I could come up with. I'm pretty happy with the outcome, but I am open to feedback and suggestions. Overall, I think it's a good project and I hope you will too!

## Usage
> i'm using laravel sail for developing this project,
> this guide for user sail too hehe, [install](https://laravel.com/docs/9.x/installation#laravel-and-docker) and [detail](https://laravel.com/docs/9.x/sail#installing-composer-dependencies-for-existing-projects)

- clone project
- navigate to project dir

Installing Composer Dependencies
```bash  
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
```
> When using the `laravelsail/phpXX-composer` image, you should use the same version of PHP that you plan to use for your application (74, 80, 81, or 82), this project i'm using (81).

copy `.env.example` to `.env`

```bash
# Copy .env.example to .env
cp .env.example .env

# In .env change value DB_HOST, DB_USERNAME, DB_PASSWORD to
DB_HOST=mysql
DB_USERNAME=sail
DB_PASSWORD=password
```
run artisan command
- `sail artisan key:generate`
- `sail up -d`
- `sail yarn build`
- visit `http://localhost`

