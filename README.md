PHP7+ notes
--
This repository contains notes about PHP7+ with some code examples.

## Test our scripts with

```
docker run -it --rm -v ${PWD}:/scripts php:7.2-alpine sh -c "php /app/scripts/path-to-the-script}.php"
```
or use the php shell with
```
docker run -it --rm -v ${PWD}/scripts:/app/scripts php:7.2-alpine sh -c "php -a"
```
