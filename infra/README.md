# Инфраструктура — Naition Low Conversion Landing

## Тип проекта

PHP 8.3 + Apache лендинг с SQLite (регистрация на курс первой помощи).

## Структура

```
infra/
└── README.md           # Этот файл

.github/workflows/
└── deploy.yml          # CI/CD: сборка Docker-образа при пуше в main
```

## CI/CD Pipeline

**Триггер:** push в `main`, manual (`workflow_dispatch`).

**Что делает:**
1. Собирает Docker-образ (PHP 8.3 + Apache + SQLite)
2. Пушит в GitHub Container Registry (`ghcr.io/vadagama/naition-naition-low-conversion-landing`)

**Теги:** `latest`, `sha-<короткий хеш>`, `main`.

## Локальный запуск

```bash
# Через встроенный сервер PHP
php -S 127.0.0.1:8765
curl http://127.0.0.1:8765/api/init.php

# Через Docker
docker build -t naition-landing .
docker run -p 8080:80 naition-landing
curl http://localhost:8080/api/init.php
```

## Деплой через Docker

```bash
docker pull ghcr.io/vadagama/naition-naition-low-conversion-landing:latest
docker run -d -p 80:80 --name naition-landing \
  ghcr.io/vadagama/naition-naition-low-conversion-landing:latest
```

## Порты

| Сервис | Порт |
|--------|------|
| Apache (PHP) | 80 |

## Переменные окружения

Не требуются. База данных SQLite создаётся автоматически в `data/app.db`.

## Health-check

```bash
curl http://localhost/api/init.php
# → {"ok":true,"message":"Database initialized."}
```

## Админка

`/admin/orders.php` — просмотр заявок (пароль: из кода).
