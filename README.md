# Docker Skeleton PHP Nginx App

## Setup

Delete the git folder and re-create a new repo. 

```bash
rm -rf .git
git init
git add --all
git commit -m "Init"
```

Create a new git repo on the ADR Team and commit this work to the new repo.

Update [Composer.json](composer.json), change the autoload from: 

`"AllDigitalRewards\\Skeleton\\": "app"` to `"AllDigitalRewards\\YourServiceName\\": "app"`

Update the [AbstractController](app/Controllers/AbstractController.php) namespace to match what you updated composer.json to.
Update the [Default Controller](app/Controllers/HomeController.php) namespace to match what you updated composer.json to. 

Update the [app/routes.php](app/routes.php) to use the updated controller's namespace.

Update this readme to reflect the usage of the service you are creating.

Spin up Docker and test it out. 
```bash
cd docker
./dev up
```
Visit [http://localhost](http://localhost)


# Code Style
Always run `composer check-style` before committing any work. All our code must be [PSR-2 Compliant](https://www.php-fig.org/psr/psr-2/).

# Unit Tests
Always run `composer test` before committing any work to ensure all tests are passing. 
It is necessary to pair all new or modified code with unit test cases.  