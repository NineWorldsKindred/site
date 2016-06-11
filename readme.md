# NWK Site

This is the source for the NWK Site, itself.

# Setup

1. Download the Vagrant repo per its instructions and run `vagrant up`
1. Copy `.env.example` to `.env`
1. SSH into the Vagrant box, go to `/vagrant/site` and run `composer install` and `npm install` to install dependencies
1. Add `192.168.10.50 site.nineworlds.vb` to your local `hosts` file
1. Go to http://site.nineworlds.vb, you should see a running Laravel site

# Updating

This site runs on Laravel 5.1 and is styled using the Less CSS preprocessor. It also uses the Laravel Elixir API for managing Gulp and various automation tasks.

For templating, refer to [the Laravel docs](https://laravel.com/docs/5.1/blade#defining-a-layout)

For Elixir usage, see [Laravel Elixir](https://laravel.com/docs/5.1/elixir)

For Less reference, see [the Less docs](http://lesscss.org/)