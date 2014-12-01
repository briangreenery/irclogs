set -e

apt-get update

# Install some prerequisites
apt-get install -y curl

# Install node
curl -sL https://deb.nodesource.com/setup | bash -
apt-get install -y \
  nodejs \
  git \
  ruby-compass \
  php5-cli php5-dev php-pear php5-mcrypt \
  libsasl2-dev mongodb

# Turn on text search
echo setParameter=textSearchEnabled=true >> /etc/mongodb.conf
service mongodb restart

# Enable mcrypt
php5enmod mcrypt

# Install mongo php extension
pear config-set php_ini /etc/php5/cli/php.ini
pecl install mongo

# Install forever and bower
npm install -g forever bower

# Install composer
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer

# Get the irclogs repo
mkdir /home/vagrant/irclogs
cp -r /vagrant /home/vagrant
mv /home/vagrant/vagrant /home/vagrant/irclogs

# Install all the things
cd irclogs
composer install
bower install --allow-root
npm install

# Fix permissions
chown -R vagrant:vagrant /home/vagrant
