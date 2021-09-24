# QueryBuilder


getAll — Возвращает массив всех записей из таблицы table
getAll(string $table): array

getOne — Возвращает запись с указанным id из таблицы table
getOne(string $table, int $id): array

create — Создает новую запись в таблице table из массива data
create(string $table, array $data) 

update — Обновляет запись значениями из массива data с указанным id в таблице table 
update(string $table, array $data, int $id)

delete — Удаляет запись с указанным id из таблицы table
delete(string $table, int $id)
