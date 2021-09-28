# Использование:


```php 
$db->getAll(string $table): array
//Возвращает массив всех записей из таблицы table

$db->getOne(string $table, int $id): array
//Возвращает запись с указанным id из таблицы table

$db->insert(string $table, array $data) 
//Создает новую запись в таблице table из массива data

$db->update(string $table, array $data, int $id)
//Обновляет запись значениями из массива data с указанным id в таблице table 

$db->delete(string $table, int $id)
//Удаляет запись с указанным id из таблицы table
```


