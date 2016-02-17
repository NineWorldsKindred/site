# NWK Site

This is the source for the NWK Site, itself.

# Setup

1. Download the Vagrant repo per its instructions and run `vagrant up`
1. Copy `.env.example` to `.env`
1. SSH into the Vagrant box, go to `/vagrant/site` and run `composer install` to install dependencies
1. Add `192.168.10.50 site.nineworlds.vb` to your local `hosts` file
1. Go to http://site.nineworlds.vb, you should see a running Laravel site