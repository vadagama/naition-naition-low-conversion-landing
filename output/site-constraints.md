# Ограничения из site_dir

## Прочитанные файлы
- `STUDENTS.md` — правила редактирования лендинга и workflow симулятора
- `hypotheses.md` / `output/hypotheses.md` — отчёт анализа (не constraint)
- `infra/README.md` — деплой (не ограничивает UI)

## Можно менять
- Тексты, заголовки, описания
- Цвета, шрифты, отступы, визуальное оформление
- Изображения
- Расположение элементов **внутри** секций
- Видимость CTA через CSS (но не удалять сами кнопки)
- Добавлять `.btn-register`, менять JS-поведение скролла (не ломая классы)

## Нельзя менять
- Форма `#registration-form` с `action="api/submit.php"`
- Поля формы: `name`, `phone`, `email`, `purpose`
- Скрытое поле `bot_session_id`
- Скрипт `<script src="api/visit.php">` в `<head>`
- Классы: `.btn-register`, `.pricing-section`, `.program-module`, `.program-list`
- PHP-файлы в папке `api/` и схема `sql/schema.sql`

## Какие файлы/папки редактировать
- `index.php`, `css/style.css`, `js/main.js` (UI лендинга)

## Workflow после правок (из site_dir)
1. Redeploy (сброс БД)
2. Run visits simulator
3. Сравнить конверсию до/после (`api/export.php`, admin, консоль симулятора)

## Блокеры
- [x] Инструкции найдены в STUDENTS.md — внедрение разрешено в рамках правил выше
