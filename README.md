# QueryBuilder


Использование:
$db = new QueryBuilder($pdo);


getAll — Возвращает массив всех записей из таблицы table
$db->getAll(string $table): array

getOne — Возвращает запись с указанным id из таблицы table
$db->getOne(string $table, int $id): array

create — Создает новую запись в таблице table из массива data
$db->create(string $table, array $data) 

update — Обновляет запись значениями из массива data с указанным id в таблице table 
$db->update(string $table, array $data, int $id)

delete — Удаляет запись с указанным id из таблицы table
$db->delete(string $table, int $id)
