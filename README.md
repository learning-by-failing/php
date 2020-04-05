PHP7+ notes
--
This repository contains notes about PHP7+ with some code examples.

## Index
* [php7.4 vs php 7.3](php74vsphp73.md)
* [php7.3 vs php 7.2](php73vsphp72.md)
* [php7.2 vs php 7.1](php72vsphp71.md)
* [php7.1 vs php 7.0](php71vsphp70.md)
* [opcache](opcache.md)
* [zvals](zvals.md)
* [Bitwsise operators](bitwise-operators.md)

## Test the scripts with
```
docker run -it --rm -v ${PWD}/scripts:/app/scripts php:{version}-alpine sh -c "php /app/scripts/{path-to-the-script}.php"
```
or use the php shell with
```
docker run -it --rm -v ${PWD}/scripts:/app/scripts php:{version}-alpine sh -c "php -a"
```
