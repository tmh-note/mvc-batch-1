# MVC 

MVC is a design pattern.

MVC - Model View Controller

M (Model) - Data (DB query) and Business Logic

V (View) - Design

Controller -> Work between Model and View

### Homework

```php
// from
$router->define('/home', HomeController::class, 'index');
// to
$router->define('/home', [HomeController::class, 'index']);
```