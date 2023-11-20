## Installation

- Change QUEUE_CONNECTION in .env to "database"

```php
composer install
```

```php
php artisan migrate
```

```php
php artisan db:seed
```

- Créer un user pour accèder à l'administration:

```php
php artisan make:filament-user
```

- Accès à l'administration avec l'url /admin
- Lancer la queue:

```php
php artisan queue:work
```

- Editer la page accueil dans l'administration
- Consulter l'entrée dans la table failed_jobs


