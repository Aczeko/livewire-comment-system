![Livewire-comment-section](https://banners.beyondco.de/Livewire%20Comment%20System.png?theme=dark&packageManager=&packageName=&pattern=xEquals&style=style_1&description=Drop-in+comment+system+built+with+Livewire&md=1&showWatermark=0&fontSize=125px&images=https%3A%2F%2Flaravel.com%2Fimg%2Flogomark.min.svg)

## Table of Contents
- [Overview](#overview)
- [Installation](#installation)
- [Usage](#usage)
- [Useful Links](#useful-links)

---
<section id="overview">

## 🔎 Overview

This is a drop-in comment system built with Livewire, that works for any model.

You can create comments, reply to them, and edit and delete the comments you made. It's using Alpine.js to minimise network requests, by building an Alpine.js directive to display when a comment was posted, handling deleted users and loading more comments gradually.

The Livewire comments component can then be dropped wherever it's needed and the comments will instantly be enabled.

</section>

<section id="installation">

## ⚙️ Installation

1. Clone this repository:
    ```bash
    git clone git@github.com:Aczeko/livewire-comment-system.git
    ```

2. Navigate into the directory:
    ```bash
    cd yourproject
    ````

3. Install dependencies:
    ```bash
    npm install
    composer install 
    ```

4. Duplicate the .env.example file and save it as .env
    - here you can set up your database connection

    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=livewire-comment-system
    DB_USERNAME=root
    DB_PASSWORD=
    ```

5. Generate a new Application Key:
    ```bash
    php artisan key:generate
    ```

6. Migrate the tables

    ```bash
    php artisan migrate
    ```

7. Run your build process with:
    ```bash
    npm run dev
    ```

</section>

<section id="usage">

## 🛠️ Usage



</section>

<section id="useful-links">

## 🔗 Useful Links
- [Video-Tutorial for this Livewire Comment System](https://codecourse.com/courses/build-a-livewire-comment-system)
- [Day.js Library](https://github.com/iamkun/dayjs)

</section>

