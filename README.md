# CPX Seeders

Módulo para crear seeders incrementales basado en la estructura de migraciones para que sea mas fácil de usar.

## Instalación

1. Copiar el directorio "CpxSeeders" a la ruta de seeders de tu versión de laravel.
	Ejemplo: "app/Console/Commands".
2. Registrar los comandos:
	```
        'App\Console\Commands\CpxSeeders\SeederInstall',
        'App\Console\Commands\CpxSeeders\SeederCreate',
        'App\Console\Commands\CpxSeeders\SeederSeed',
        'App\Console\Commands\CpxSeeders\SeederSeedStatus',
        'App\Console\Commands\CpxSeeders\Migrate',
        'App\Console\Commands\CpxSeeders\MigrateFresh',
        'App\Console\Commands\CpxSeeders\MigrateStatus',
    ```
3. Al ejecutar ```php artisan list``` ya nos deberían aparecer los comandos registrados.

## Uso
### Crea la tabla de seeders para registrar los que se vayan ejecutando
```php artisan cpx-seeder:install```

### Para crear seeders
```php artisan cpx-seeder:create User```



### Primera vez, esta versión crea base de datos si no existe
```php artisan cpx-migrate --seed```\
&nbsp;&nbsp;&nbsp;&nbsp;```php artisan migrate```\
&nbsp;&nbsp;&nbsp;&nbsp;```php artisan cpx-seeder:seed```

### Versión con fresh
```php artisan cpx-migrate:fresh --seed```\
&nbsp;&nbsp;&nbsp;&nbsp;```php artisan migrate:fresh```\
&nbsp;&nbsp;&nbsp;&nbsp;```php artisan cpx-seeder:seed```

### Muestra status de migraciones y seeders
```php artisan cpx-migrate:status```\
&nbsp;&nbsp;&nbsp;&nbsp;```php artisan migrate:status```\
&nbsp;&nbsp;&nbsp;&nbsp;```php artisan cpx-seeder:status```



