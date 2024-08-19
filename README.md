![Livewire-comment-section](https://banners.beyondco.de/Livewire%20Comment%20System.png?theme=dark&packageManager=&packageName=&pattern=xEquals&style=style_1&description=Drop-in+comment+system+built+with+Livewire&md=1&showWatermark=0&fontSize=125px&images=https%3A%2F%2Flaravel.com%2Fimg%2Flogomark.min.svg)

## Table of Contents
- [Overview](#overview)
- [Installation](#installation)
- [Implementation](#implementation)
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
    DB_DATABASE=livewire_comment_system
    DB_USERNAME=root
    DB_PASSWORD=
    ```

5. Generate a new Application Key:
    ```bash
    php artisan key:generate
    ```

6. Migrate the tables

    ```bash
    php artisan migrate --seed
    ```

7. Run your build process with:
    ```bash
    npm run dev
    ```

Since you've migrated and seeded the database with an article, you can take a look at it with `/articles/an-article`.
There you can see the comment section, and unless you are logged-in, you won't be able to post a comment.

Once you're logged in, you can create, edit or delete a comment and also reply to your own or other peoples comments.

</section>

<section id="implementation">

## 🛠️ Implementation

You can easily add a comments section to any part of your application by dropping the Livewire comments component into your Blade file. The comments section will automatically work with any model you specify.

To implement this, follow these steps:

### Insert the Livewire Component
   
Add the following code snippet to your Blade file where you want the comments section to appear:
   
```
<livewire:comments :model="$article" />
```

- Replace `"$article"` with the model instance you want to associate with the comments. This could be any Eloquent model, such as `Article`, `Post`, `Product`, etc.
- The model passed will be used to associate the comments with that specific instance.

### Set Up Your Model

Ensure your model is properly configured to work with the comments component.
Here's an example using an `Article model:

```
<?php
   
namespace App\Models;
   
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
   
class Article extends Model
{
   use HasFactory;
   
   public function comments()
   {
      return $this->morphMany(Comment::class, 'commentable');
   }
}
```

- In this example, the `Article` model is set up to have a polymorphic relationship with comments using the `morphMany` method.
- The comments method defines the relationship, allowing the `Article` model to be associated with multiple comments.

</section>

<section id="useful-links">

## 🔗 Useful Links
- [Video-Tutorial for this Livewire Comment System](https://codecourse.com/courses/build-a-livewire-comment-system)
- [Day.js Library](https://github.com/iamkun/dayjs)

</section>

