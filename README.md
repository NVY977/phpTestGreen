<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Test
Создать страницу с формой регистрацией
В форме должны быть следующие поля:
    - имя
    - фамилия
    - email
    - пароль
    - повтор пароля
Реализовать отправку этой формы при помощи AJAX.
Реализовать обработку AJAX запроса на php.
В обработчике нужно:
 1) провести валидацию:
    -	email содержит @;
    -	пароли совпадают.
 2) задать некий массив уже существующих юзеров (получать его из какой-либо базы данных не требуется). В массиве должны присутствовать поля email, id, name;
 3) Провести проверку на уникальность. есть ли в этом массиве элемент с заполненным юзером емейлом;
 4) Результат проверки должен логироваться в файл в любом формате.

При успешной проверке (пользователь не найден) - форма должна скрываться, а пользователю должно выводиться сообщение об успешной регистрации. 
При неудачной проверке (например, пользователь уже был зарегистрирован) - пользователю должна выводиться соответствующая ошибка над формой.
