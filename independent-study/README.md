# How to Create a Laravel Package

Before we can start creating our package, I think it would useful to first describe what is a package and how it gets used in a Laravel  project.

A package is a  stand-alone source code that developers create that can be integrated into a project that provides additional functionalities which Laravel does not provide out of the box.. developers only need to import by "require" the package through Composer and adapt it to their projects.

## Creating Laravel Packages

To make it easy to understand the process, I will create a package and provide a step by step instruction so that you can follow along.  
As I just mentioned, you are going to need Composer installed in your machine, a need account with (<https://packagist.org)>, a GitHub account which most of you already have, a fresh install of Laravel project to host the package. 


### Create a new Laravel project

+ Create a new Laravel project with package name by running this code:

 ```
   "composer create-project laravel/laravel form-package"
```

+ create an "src" folder in the root directory of the new project which I am calling from now the host project. Depending on the sophistication of your package, the two most important files on a package are composer.json  and service provider files.

+ To Create the composer.json file, navigate inside the "src" run this command and follow the prompt: 

```
   "composer init "
```

+ Note that the composer.json in your host project is different from the composer.json in your package. Be sure you are editing the correct composer.json file. Your composer.json file should look similar to this:

```{
    "name": "nnoel/contact-form",
    "description": "This contact will alert Admin for every form submission and save inquiries to database",
    "type": "library",
    "license": "MIT",
    "authors": [
        {
            "name": "Norcius Noel",
            "email": "nnoel@fas.harvard.edu"
        }
    ],
    "minimum-stability": "dev",
    "require": {},
    }
}
```
+ Now let's create the ServiceProvider class. On your command prompt run:

```
php artisan make: provider ContactFormServiceProvider.php
```

+ Note that the provider you just created, was created inside the provider folder.  You just need to copy and paste the file inside the "src" folder. Namespace the ContactFormServiceProvider class file correctly so that Composer can access it during the autoload process. That means you should this autoload object in your composer.json file to register the root namespace:

```
    "autoload": {
        "psr-4": {
                "Nnoel\\ContactForm\\": "src/"
            }
        }
```

+ You also need to add the path of the new class in the default laravel project composer file under autoload-dev:

```
    "autoload-dev": {
        "psr-4": {
                "Laravel\\Tinker\\Tests\\": "tests/",
                "Nnoel\\ContactForm\\": "package/contact-    form/src/"
            }
        }
```
Refer to the Laravel documentation if you need further assistance.<https://laravel.com/docs/7.x/packages/>

The next step is to declare the new class name in a service provider. Go to Config/app and register the provider to the provider classes add: 

```
    "Nnoel\ContactForm\ContactFormServiceProvider::class"
```

+ At this point to make sure you have not made any syntax errors.Run this composer command to verify if your added class is registering with composer.

```
    "composer dump-autoload"
```

### Views:
https://laravel.com/docs/7.x/packages/Views


### Migration:
php artisan migrate will load both the migration from the default laravel project and the contact-form package that we are creating.
Add this to the boot method on the ContactFormService.

```
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/path/to/migrations');
    }
```

### Mail:


### Docs:

Package views are referenced using the package::view syntax convention. So, once your view path is registered in a service provider, you may load the admin view from the courier package like so:

```
    Route::get('admin', function () {
    return view('courier::admin');
    });
```

## Bonus tips


## Publishing your package

The last thing is if you want to show your package to the world so that other people would add it to their composer.json file. I won’t provide detailed instructions on this, cause it kinda goes outside Laravel topic, but here are basic steps:
Make package auto-discovery.

    1. You form your package as a repository and upload it to GitHub;
    2. You register on packagist.org;
    3. You make sure that your composer.json contains all necessary information;
    4. You submit a link to your GitHub repository to packagist
    5. For all detailed information about composer.json fields, package versioning and other topics – see   packagist documentation.


Laravel Package tutorial, Composer Package development packagist Package upload Composer requires package Contact Form Laravel Package Development

## link to  contact-form package on <packagist.org> 

###<https://packagist.org/packages/nnoel/contact-form>