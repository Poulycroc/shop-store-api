# Coro19

## Build app

#### base build
```bash
$ make init-build
```

#### Set databses and migrations

Init lumen build for the first time
```bash
$ make init-build
```

Creation of database
```bash
$ make init-database
```

### If you're not okay with makeFile

#### Basic npm commands
``` bash
# install dependencies
$ npm i

# construct all assets one time
$ npm run dev

# construct all assets in continius mode
$ npm run watch

# construct all assets in production mode
$ npm run production
```

## Run app

#### Localy
```bash
$ make dev
```

## Serve app
```bash
$ make serve
```
or
```bash
$ php -S localhost:8000 -t public
```

## Built With

* [VueJS](https://vuejs.org/)
* [Lumen](https://lumen.laravel.com/)
* [Bootstrap](https://getbootstrap.com/)

<!-- ## Contributing

Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of conduct, and the process for submitting pull requests to us. -->