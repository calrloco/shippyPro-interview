# ESERCIZIO SHIPPY PRO 


####Per avviare il progetto:
installare dependencies:
```shell
composer install && npm install
````
### Per popolare il database:
```shell
php artisan migrate && php artisan db:seed 
```

### Per avviare il progetto:

```shell
php artisan serve
```
### build frontend assets development:
```shell
npm run dev 
```
### build frontend assets production:
```shell
npm run build 
```


## COME È COMPOSTO IL PROGETTO
La ricerca per l'aereo più economico viene fatta all'interno del componente Livewire
SearchFlight 
la logica del componente si trova: /app/Http/Livewire/SearchFlight.php
<br>
la view si trova: /resources/views/livewire/search-flight.blade.php

Per info su livewire: ['Livewire docs']('https://laravel-livewire.com/docs/2.x/quickstart')
 





