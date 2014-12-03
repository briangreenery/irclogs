# irclogs
#### An IRC logger, built with Laravel and MongoDB

http://irclogs.laravel.io

---

![Screenshot](http://f.cl.ly/items/0D110U140e3o3c1t3L1m/Screenshot%202013-07-24%20%C3%A0%2017.08.03.png)

### Developing

Create the vagrant box:

```bash
$ vagrant up
$ vagrant ssh
```

Install all the things:

```bash
$ cd /vagrant
$ composer install
$ bower install
$ npm install
```

Optionally create fake data:

```bash
$ php artisan db:seed
```

If you don't create fake data, you must still create the necessary indexes in
mongo:

```bash
$ php artisan db:seed --class=EnsureIndexesSeeder
```

Run the web server:

````
$ php artisan serve --host 0.0.0.0
````

You can then access the web server at http://localhost:8000 on the host machine.

Run the irc logger bot:

```bash
$ node main.js
```

Compile css:

```bash
$ compass compile
```

### Who made it?
---

**Glose** (http://glose.com)

We're a social reading platform. We built this as a team-building side project, and it's been super useful.

### License
---
* Copyright 2013 [Glose](http://glose.com)
* Distributed under the [MIT License](http://creativecommons.org/licenses/MIT/)
