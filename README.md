# Xintel API RESTful

API desarrollada con Laravel 9 que permite crear, obtener, actualizar y eliminar registros de una base de datos MySql.


## Instalación 
Este procedimiento es solo para referencia. 
Se asume que cuenta con un editor de código de su preferencia. En este desarrollo se utilizó Visual Code.

En este caso se cuenta con:
- XAMPP v3.3.0 - https://www.apachefriends.org/es/index.html
- Composer v2.5.1 - https://getcomposer.org/download/
- Laravel v9.x - https://laravel.com/docs/9.x


### Instalación del software

En el caso de XAMPP la instalación es del tipo wizard. Una vez que haya descargado el instalador solo debe ser ejecutado y seguir los pasos del mismo. XAMPP le proporcionará la base de datos MySql y la última versión de PHP y un servidor apache que le dará el entorno de desarrollo necesario para Laravel.
Una vez instalado, debe ejecutarlo e iniciar los servicios de Apache y MySql.


A continuación se instalará el gestor de paquetes para PHP, Composer.

    1- Descargar el instalador de composer desde https://getcomposer.org/download/
    2- Ejecutar el instalador.
    3- Cuando se ejecute el instalador, le preguntará si desea instalarlo para todos los usuarios(recomendado) o solo para el usuario actual. Seleccione "Para todos los usuarios"
    4-La primer instancia del instalador será "Installation Options". Solo debe hacer clic en el botón "Next".
    5-El paso siguiente le solicita seleccionar desde que ruta se ejecutarán los comandos de php. Haga clic el botón "Browse" y seleccione la ruta donde se encuentra la carpeta php dentro de Xampp y seleccionar php.exe(comunmente estará en el disco local c:\Archivos de Programas\xampp\php\php.exe). Luego haga clic en el botón "Abrir" y a continuación clic en el botón "Next".
    6-En este paso llamado "Proxy Settings" haga clic en "Next" sin modifica nada.
    7-Hacer clic en el botón "Install".
    8-En los siguiente dos pasos debe hacer clic en el botón "Next" y, por último en el botón "Finish".

    Ahora vamos comprobar que Composer se haya instalado de manera correcta.

    1-Abra una terminal de Windows. 
    2-Escriba el siguiente comando:
    ~~~~
    composer
    ~~~~
    Y deber ver el siguiente resultado con la lista de comandos de Composer
    ~~~~
       ______ 
      / ____/___  ____ ___  ____  ____  ________  _____
     / /   / __ \/ __ `__ \/ __ \/ __ \/ ___/ _ \/ ___/
    / /___/ /_/ / / / / / / /_/ / /_/ (__  )  __/ /
    \____/\____/_/ /_/ /_/ .___/\____/____/\___/_/
                        /_/
    Composer version 2.5.1 2022-12-22 15:33:54

    Usage:
    command [options] [arguments]

    Options:
    -h, --help                     Display help for the given command. When no command is given display help for the list command
    -q, --quiet                    Do not output any message
    -V, --version                  Display this application version
        --ansi|--no-ansi           Force (or disable --no-ansi) ANSI output
    -n, --no-interaction           Do not ask any interactive question
        --profile                  Display timing and memory usage information
        --no-plugins               Whether to disable plugins.
        --no-scripts               Skips the execution of all scripts defined in composer.json file.
    -d, --working-dir=WORKING-DIR  If specified, use the given directory as working directory.
        --no-cache                 Prevent use of the cache
    -v|vv|vvv, --verbose           Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

    Available commands:
    about                Shows a short information about Composer
    archive              Creates an archive of this composer package
    audit                Checks for security vulnerability advisories for installed packages
    browse               [home] Opens the package's repository URL or homepage in your browser
    bump                 Increases the lower limit of your composer.json requirements to the currently installed versions
    check-platform-reqs  Check that platform requirements are satisfied
    clear-cache          [clearcache|cc] Clears composer's internal package cache
    completion           Dump the shell completion script
    config               Sets config options
    create-project       Creates new project from a package into given directory
    depends              [why] Shows which packages cause the given package to be installed
    diagnose             Diagnoses the system to identify common errors
    dump-autoload        [dumpautoload] Dumps the autoloader
    exec                 Executes a vendored binary/script
    fund                 Discover how to help fund the maintenance of your dependencies
    global               Allows running commands in the global composer dir ($COMPOSER_HOME)
    help                 Display help for a command
    init                 Creates a basic composer.json file in current directory
    install              [i] Installs the project dependencies from the composer.lock file if present, or falls back on the composer.json
    licenses             Shows information about licenses of dependencies
    list                 List commands
    outdated             Shows a list of installed packages that have updates available, including their latest version
    prohibits            [why-not] Shows which packages prevent the given package from being installed
    reinstall            Uninstalls and reinstalls the given package names
    remove               Removes a package from the require or require-dev
    require              [r] Adds required packages to your composer.json and installs them
    run-script           [run] Runs the scripts defined in composer.json
    search               Searches for packages
    self-update          [selfupdate] Updates composer.phar to the latest version
    show                 [info] Shows information about packages
    status               Shows a list of locally modified packages
    suggests             Shows package suggestions
    update               [u|upgrade] Updates your dependencies to the latest version according to composer.json, and updates the composer.lock file
    validate             Validates a composer.json and composer.lock
    ~~~~

Una vez finalizada la instalación de Composer, está listo para instalar Laravel

    1-En el explorador de carpetas de Windows, busque xampp\htdocs y copie la ruta de la carpeta
    2-Abra una terminal de windows e ingrese la ruta que copió
    ejemplo
    ~~~~
    C:\Users\CurrentUser>cd C:\Program Files\xampp\htdocs
    ~~~~
    3-Ya posicionado en esta ruta, ejecute el siguiente comando:
    ~~~~
    composer global require laravel/installer
    ~~~~
    La instalación puede demorar algunos minutos. Luego Laravel estará instalado y estará en condiciones de clonar y ejecutar el proyecto.

## Ejecución del proyecto

    Abra la carpeta que clonó del repositorio con un editor de código y copie la dirección de la misma.
    Luego en una terminal de Windows posicionesé en la ruta copiada y ejecute el siguiente comando:
    ~~~~
    php artisan serve
    ~~~~
    Esto pondrá a correr su servidor local para poder realizar las peticiones de tipo GET, POST, PUT y DELETE. 
    Como se mencionó anteriormente se utilizó la herramienta Postaman para probar los endpoints.

## Construcción de la base de datos

    La base de datos fue creada en la herramienta phpMyAdmin provista por XAMPP y las tablas se generaron a partir del archivo "2023_01_24_182036_create_usuarios_table.php" ubicado en la carpeta "migrations" del proyecto.
    En este caso, se configura el archivo .env para que apunte a la base de datos MySql incluida en XAMPP.
    Ejemplo:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3308
    DB_DATABASE=xintel_api_restful
    DB_USERNAME=root
    DB_PASSWORD=

    Para generar las tablas ejecute el siguiente comando:

    ~~~~
    php artisan migrate
    ~~~~

## Resultado esperado de las pruebas

    Las pruebas de los endpoints fueron realizadas con la herramienta Postman.

### Obitene la lista completa de usuarios
    GET http://127.0.0.1:8000/api/usuarios 
    [
        {
            "id": 2,
            "role_id": 2,
            "first_name": "Esteban",
            "last_name": "Frares",
            "created_at": "2023-01-23T16:53:26.000000Z",
            "updated_at": "2023-01-24T23:11:33.000000Z"
        },
        {
            "id": 4,
            "role_id": 2,
            "first_name": "Juan",
            "last_name": "Perez",
            "created_at": "2023-01-23T16:54:27.000000Z",
            "updated_at": "2023-01-23T16:54:27.000000Z"
        },
        {
            "id": 5,
            "role_id": 2,
            "first_name": "Esteban",
            "last_name": "Frare",
            "created_at": "2023-01-23T16:54:27.000000Z",
            "updated_at": "2023-01-24T21:07:52.000000Z"
        },
        {
            "id": 7,
            "role_id": 2,
            "first_name": "Alejandro",
            "last_name": "Lupo",
            "created_at": "2023-01-24T21:40:08.000000Z",
            "updated_at": "2023-01-24T21:40:08.000000Z"
        },
        {
            "id": 8,
            "role_id": 2,
            "first_name": "Agustin",
            "last_name": "Stelzer",
            "created_at": "2023-01-24T22:33:08.000000Z",
            "updated_at": "2023-01-24T22:33:08.000000Z"
        }
    ]

### Obtiene el regitro correspondiente al parámetro id de la tabla de usuarios

    GET http://127.0.0.1:8000/api/usuarios/2 
    {
        "id": 2,
        "role_id": 2,
        "first_name": "Esteban",
        "last_name": "Frares",
        "created_at": "2023-01-23T16:53:26.000000Z",
        "updated_at": "2023-01-24T23:11:33.000000Z"
    }

### Inserta un registro en la tabla usuarios

    POST http://127.0.0.1:8000/api/usuarios Inserta un registro en la tabla usuarios
    {
        "first_name": "Julian",
        "last_name": "Sanchez",
        "role_id": "2",
        "updated_at": "2023-01-25T05:05:41.000000Z",
        "created_at": "2023-01-25T05:05:41.000000Z",
        "id": 9
    }

### Actualiza el regitro correspondiente al parámetro id de la tabla de usuarios

    PUT http://127.0.0.1:8000/api/usuarios/2 
    {
        "id": 2,
        "role_id": "2",
        "first_name": "Esteban",
        "last_name": "Frare",
        "created_at": "2023-01-23T16:53:26.000000Z",
        "updated_at": "2023-01-25T05:10:05.000000Z"
    }   

### Elimina el regitro correspondiente al parámetro id de la tabla de usuarios

    DELETE http://127.0.0.1:8000/api/usuarios/9 

    Devuelve estado 204 No Content. 

## Construido con 

* Visual Code


