# ESERCIZIO VOLI 
###prima di iniziare
creare file env 
copiare docker.env.example se usate docker
altrimenti potete copiare .env.example

Il progetto può essere avviato con docker o senza come prefrite:

## Installazione senza docker:
installare dependencies:
```shell
composer install && npm install
````
popolare il database:
```shell
php artisan migrate && php artisan db:seed 
```
build frontend assets:
```shell
npm run build 
```
avviare il progetto:
```shell
php artisan serve
```
http://127.0.0.1:8000/

## Installazione con docker:
Start container:
```shell
./vendor/bin/sail up 
```
installare dependencies:
```shell
./vendor/bin/sail composer install && ./vendor/bin/sail npm install
````
popolare il database:
```shell
./vendor/bin/sail artisan migrate && ./vendor/bin/sail artisan db:seed 
```
build frontend assets:
```shell
./vendor/bin/sail npm run build 
```
http://localhost:8090


## COME È COMPOSTO IL PROGETTO
La ricerca per l'aereo più economico viene fatta all'interno del componente Livewire
SearchFlight 
la logica del componente si trova: /app/Http/Livewire/SearchFlight.php
<br>
la view si trova: /resources/views/livewire/search-flight.blade.php

Per info su Livewire: <a href="https://laravel-livewire.com/docs/2.x/quickstart">Livewire docs</a>
 





