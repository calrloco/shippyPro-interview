# ESERCIZIO VOLI 


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




## COME È COMPOSTO IL PROGETTO
La ricerca per l'aereo più economico viene fatta all'interno del componente Livewire
SearchFlight 
la logica del componente si trova: /app/Http/Livewire/SearchFlight.php
<br>
la view si trova: /resources/views/livewire/search-flight.blade.php

Per info su Livewire: <a href="https://laravel-livewire.com/docs/2.x/quickstart">Livewire docs</a>
 





