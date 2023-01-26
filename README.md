## About
The **SUMMER SUNSET** project is an idea that came to me, and I believe it has potential. I usually rely on tutorials for my projects, but for this one, I decided to go off on my own and see what I could come up with. I'm pretty happy with the outcome, but I am open to feedback and suggestions. Overall, I think it's a good project and I hope you will too!
> this project use open-source project like [Laravel](https://laravel.com/), [Tabler](https://tabler.io/), [Tabler Icon](https://tabler-icons.io/)
## Usage
> i'm using laravel sail for developing this project,
> this guide for laravel sail user, [install](https://laravel.com/docs/9.x/installation#laravel-and-docker) and [detail](https://laravel.com/docs/9.x/sail#installing-composer-dependencies-for-existing-projects)

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
> When using the `laravelsail/phpXX-composer` image, you should use the same version of PHP that you plan to use for your application (74, 80, 81, or 82), this project using (81).

copy `.env.example` to `.env`

```bash
# Copy .env.example to .env
cp .env.example .env

# In .env change value DB_HOST, DB_USERNAME, DB_PASSWORD to
DB_HOST=mysql
DB_USERNAME=sail
DB_PASSWORD=password
```

> make sure you done [this](https://laravel.com/docs/9.x/sail#configuring-a-shell-alias) step

run artisan command
- `sail up -d`
- `sail artisan key:generate`
- `sail artisan migrate`
- `sail artisan db:seed`
- `sail yarn build`
- visit `http://localhost`

> manage page mush be login, login using data `artisan db:seed`
- email = `exp@exp.com`
- password = `password`
## preview
> Markdown but not secure from XSS Attack, and not support code block
- home or profile

![Profile page](https://cdn.discordapp.com/attachments/900755513069953035/1068241010796277863/image.png)

- manage profile

![Manage Profile](https://cdn.discordapp.com/attachments/900755513069953035/1068240781078437959/image.png)

- project page

![Project page](https://cdn.discordapp.com/attachments/900755513069953035/1068244055022112929/image.png)

- manage project

![Manage project](https://cdn.discordapp.com/attachments/900755513069953035/1068244681915383848/image.png)
