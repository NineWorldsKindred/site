# NWK Site

This is the source for the NWK Site, itself.

# Setup

1. Download the Vagrant repo per its instructions and run `vagrant up`
1. Copy `.env.example` to `.env`
    1. Go to developers.facebook.com and get the Facebook App key and Secret. Modify pertinent lines in `.env`  
1. SSH into the Vagrant box, go to `/vagrant/site` and run `composer install` and `npm install` to install dependencies
1. Run `php artisan migrate` to set up the database
1. Add `192.168.10.50 site.nineworlds.vb` to your local `hosts` file
1. Go to http://site.nineworlds.vb, you should see a running Laravel site

## Todo

The dependency installation and database migration should be added to a script. Copying the env file could also be done via this script. I'll probably do that once this part of it stabilizes a little bit more, so I'm not constantly changing the Vagrant part.

# Updating

This site runs on Laravel 5.1 and is styled using the Less CSS preprocessor. It also uses the Laravel Elixir API for managing Gulp and various automation tasks.

For templating, refer to [the Laravel docs](https://laravel.com/docs/5.1/blade#defining-a-layout)

## Less

For Less reference, see [the Less docs](http://lesscss.org/)

Less files are found and stored in `resources/assets/less`

## Elixir

For Elixir usage, see [Laravel Elixir](https://laravel.com/docs/5.1/elixir)

Elixir commands are found in `gulpfile.js`

# Notes

## Authentication With Google

Apparently, Google's a jerk and doesn't allow custom "non-public" URLs for their oAuth stuff, which is *really* annoying. We might have to change the development URL to accommodate, but for right now, I'm just going to assume the login part works, since it works with Facebook and uses the same, abstracted code. I'm thinking using the `.xyz` domain, since it's not likely that we'll actually use that as a real domain. 