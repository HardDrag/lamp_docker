# LAMP - docker aproach

### Główne obrazy
Stworzona usługa opiera się o trzy obrazy składowe. 
  - httpd:2.4.33-alpine
  - mysql:8.0
  - php:7.2.7-fpm-alpine3.7

Do tworzenia wyżej wymionionych obrazów używa się plików dockerfile.
###  Pozostałe pliki
Dodatkowo w projekcie znajdują się jeszcze kolejne pliki.
  - apache.conf - konfiguracja wymagana do działania serwera apache
  - index.php - skrpyt, który umożliwa zaprezentowania działania PHP oraz Mysql
  - docker-compose.yml - plik, który odpowiada za konfigurację calego serwera

### Uruchomienie serwera
Do uruchomienia wystarczy polecenie: 

```sh
docker-compose up
```

Należy je wykonać w miejscu gdzie znajduje się plik "docker-compose.yml".

### Połączenie się z serwerem

Do wyświetlenia strony możemy użyć przeglądarki, a wniej należy wpisać:

```
localhost:6666
```
