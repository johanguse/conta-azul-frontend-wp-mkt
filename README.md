# Project Template WordPress

This is a base configuration for use in new WordPress websites, bootstraped with [WPGulp][wpgulp].

## Getting Started

You need to have [Docker][docker], [NodeJS][nodejs] and [Yarn][yarn] installed on your machine to install the dependencies and run the project.

### → `Step #1` — Download docker images and start containers

```sh
docker-compose up -d
```

### → `Step #2` — Install dependencies

```sh
yarn
```

_It'll take a couple of minutes to install._

### → `Step #3` — Editing the project variables

Configure the project paths and other variables inside the `src/wpgulp.config.js` file. This is a compulsory Step.

### → `STEP #4` — Start your project

Once the installation is done, you can run the project.

```sh
yarn start

# To stop, press CTRL (^) + C
```

### → `STEP #5` — Editing the files

Your `styles`, `scripts` and `images` files will live inside the `src` folder. Do not edit these files directly in the `wp-content/themes/your-theme/assets` folder.

Your `php` files will live inside the `wp-content/themes/your-theme` folder.

### → `OPTIONAL STEP #6` — More Scripts/Tasks

To lint your JavaScript and SASS files, to optimize images or generate WP POT translation file you can run the following commands

```sh
# To lint scss files
yarn stylelint

# To lint js files
yarn eslint

# To optimize images.
yarn images

# To generate WP POT translation file.
yarn translate

# To generate a .zip file with theme contents
yarn zip
```

---

### → `NICE TO HAVE STEP #7` — PHP CodeSniffer for WP

The [WPCS][wpcs] configuration offers a collection of rules to validate code developed for WordPress.

1. Install PHP_CodeSniffer with [Composer][composer]:

```sh
composer global require "squizlabs/php_codesniffer=*"
```

2. Clone the WordPress Standards repository:

```sh
# This can be done on the root of your user folder E.g. /Users/your-username/
git clone -b master https://github.com/WordPress/WordPress-Coding-Standards.git wpcs
```

3. Add its path to the PHP_CodeSniffer configuration:

```sh
phpcs --config-set installed_paths /path/to/wpcs
```

4. Setting up VSCode:

- Install the [PHPCS Extension][phpcs-extension]
- And update your Visual Studio Code settings file:

```json
"phpcs.enable": true,
"phpcs.standard": "WordPress",
```

[wpgulp]: https://github.com/ahmadawais/WPGulp
[docker]: https://docker.com
[nodejs]: https://nodejs.org
[yarn]: https://yarnpkg.com
[wpcs]: https://github.com/WordPress/WordPress-Coding-Standards#standalone
[composer]: https://getcomposer.org
[phpcs-extension]: https://marketplace.visualstudio.com/items?itemName=ikappas.phpcs
