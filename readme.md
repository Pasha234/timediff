# TimeDiff
Вывод времени, прошедшего с определенной даты
### Требования
PHP >= 5.5.0
### Установка

```bash
composer require pasha234/timediff
```

### Как пользоваться утилитой

```php
$timeDiff = new TimeDiff(); # По умолчанию текущее время (2020-10-10 00:00:00)
$timeDiff->get('2020-10-10 02:00:00'); # Вернет "2 hours ago"
```

Можно также задать другое время при инициализации класса
```php
$timeDiff = new TimeDiff(
    DateTime::createFromFormat("Y-m-d H:i:s", "2020-10-10 01:00:00")
);
$timeDiff->get('2020-10-10 02:00:00'); # Вернет "1 hours ago"
```
Поддерживает разницу в секундах, минутах, часах и днях

### Тестирование

Для запуска тестов используется команда
```bash
composer test
```