# How to run this application



- Make sure you have [docker and docker-compose installed](http://www.spiralout.eu/2015/12/docker-installation-in-linux-mint-and.html) 
- clone this repo: ` git clone https://github.com/SpiralOutDotEu/dockervel.git`
- `git checkout builder`
- git clone my  repo  in your dockervel folder with : git clone https://github.com/zagorkakomljanovic/LaravelApplication.git
- rename LaravelApplication to www
- `cd dockervel`
- `sudo su `
- ` . ./aliases.sh `       to use aliases (look in aliases.sh )
- `dcomposer install `       to recreate dependencies
- `dpermit`
- `dup`        to run entire package
- `dartisan migrate`   o create the tables to his own database


Whenever you add files to root directory make sure to add permitions  with command `dpermit` in dockervel directory.

**Go to localhost in your browser to check the app.**

**To run Behat features type:**


`docker-compose run  php php /var/www/html/vendor/bin/behat `


**To run PHPUnit tests type:**

`dunit
`


**In addition :** 
To install node modules in your project run

` dnodejs npm install`

install gulp with:

`dnodejs npm install gulp`


run gulp once:

`dgulp`


add gulp watch:

`dgulp-watch`

