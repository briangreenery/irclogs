# irclogs
#### An IRC logger, built with Laravel and MongoDB

http://irclogs.laravel.io

---

![Screenshot](http://f.cl.ly/items/0D110U140e3o3c1t3L1m/Screenshot%202013-07-24%20%C3%A0%2017.08.03.png)

### Install

The vagrant box will automatically run these install commands.

```bash
$ composer install
$ bower install
$ npm install
```

### Run

Run the logger bot:

```bash
forever start main.js
```

Run the php server:

````
php artisan serve --host 0.0.0.0
````

### Sample log data

```bash
$ php artisan db:seed
```

### Compile CSS

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
