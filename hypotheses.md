# Гипотезы дропоффа (без заявки через форму)

## Метод и данные

- **Лендинг:** https://vadagama.naition.sortedmap.ru/
- **Дата визитов:** 2026-07-23
- **Выборка:** 302 визита из `data/visits/` (инвентарь `data/visits-inventory.json`); **0** с `form_submitted=true`.
- **Карта секций:** `data/landing-structure.md` (hero → about → program → injuries → legal → photo → instructors → pricing → registration → footer).
- **Подход:** для каждого визита без заявки — `data/hypotheses/{visit_id}.json` (`sections_reached`, `exit_section`, гипотезы).
- **Боты (300):** глубокий разбор репрезентативной выборки (~16) + template по паттерну; клоны — `data/hypotheses/_meta/clone_templates.json`.
- **Атипичные (2):** полный custom-разбор — `4169838777501745336`, `4182468975911501852`.
- **Ограничение:** в экспорте `scroll_depth_pct=null`, `sections_seen` ≈ заголовок hero; глубина **инферилась** из scroll/click/form-focus/duration + карты секций.

## Bot vs human-like

| Класс | N | Доля | Submit |
|---|---:|---:|---|
| Bot-like (fingerprint + burst) | 300 | 99.3% | 0 |
| Non-bot / atypical | 2 | 0.7% | 0 |
| **Всего** | **302** | **100%** | **0** |

**Главный вывод:** «нулевая конверсия» за сутки объясняется ботоподобным всплеском (~300 визитов с одним fingerprint), а не провалом формы у живых лидов. UX-гипотезы ниже — структурные риски лендинга; на этих данных они **не валидированы** человеческим трафиком.

### Bot-шаблоны

| template_id | N | Паттерн |
|---|---:|---|
| `bot_full_path_form_focus` | 261 | scroll~50–60, click~4, form focus, dur~40–66с, без submit |
| `bot_mid_scroll_no_form` | 28 | средний/глубокий скролл, без form focus |
| `bot_early_exit` | 3 | мало скролла, выход hero/about |

### Exit sections (инференс)

| exit_section | N |
|---|---:|
| `registration` | 261 |
| `pricing` | 17 |
| `injuries` | 12 |
| `about` | 6 |
| `hero` | 4 |
| `program` | 2 |

## Ранжированные гипотезы (по частоте)

| # | ID | Count | % | Avg conf. | Кратко | Секции |
|---:|---|---:|---:|---:|---|---|
| 1 | `H_NO_CTA_HERO` | 302 | 100.0% | 0.70 | В hero нет CTA; кнопки только у тарифов (~80%) | hero, pricing |
| 2 | `H_BOT_TRAFFIC` | 300 | 99.3% | 0.95 | Массовый ботоподобный fingerprint — конверсия не ожидается | все (шум трафика) |
| 3 | `H_BURST_NOISE` | 296 | 98.0% | 0.92 | Burst за узкое окно — шум, не UX-сигнал конверсии | все (шум трафика) |
| 4 | `H_AUTOMATED_SCROLL_CLICK` | 292 | 96.7% | 0.90 | Плотный scroll/click за 40–66с = автопрогон, не чтение | hero → registration |
| 5 | `H_LONG_SCROLL_FRICTION` | 291 | 96.4% | 0.65 | Длинная страница (~8900px) до формы (~88%) | program, legal, pricing, registration |
| 6 | `H_FORM_FRICTION_FOUR_FIELDS` | 262 | 86.8% | 0.55 | 4 обязательных поля на последнем шаге | registration |
| 7 | `H_NO_TARIFF_PRESELECT` | 262 | 86.8% | 0.50 | «Записаться» не привязывает тариф к заявке | pricing, registration |
| 8 | `H_FORM_FOCUS_NO_SUBMIT` | 261 | 86.4% | 0.88 | Focus на поле формы был, submit = 0 | registration |
| 9 | `H_MIDPAGE_DROP` | 30 | 9.9% | 0.60 | Отсев mid-page до CTA в pricing | program, injuries, legal |
| 10 | `H_NO_REGISTER_CTA_UNTIL_PRICING` | 30 | 9.9% | 0.72 | CTA записи нет до pricing — mid-page отсев без кнопки | program, injuries, legal, pricing |
| 11 | `H_EARLY_EXIT_HERO` | 8 | 2.6% | 0.80 | Короткий визит, выход на hero/about | hero, about |
| 12 | `H_PRICE_FRICTION` | 4 | 1.3% | 0.38 | Ценовой барьер на тарифах | pricing |
| 13 | `H_TRUST_GAP` | 4 | 1.3% | 0.30 | Доверие/соцдоказательства поздно на странице | instructors, legal, registration |
| 14 | `H_BOUNCE_HERO` | 1 | 0.3% | 0.95 | Мгновенный bounce (~1с) на hero | hero |
| 15 | `H_GEO_MISMATCH` | 1 | 0.3% | 0.80 | США → офлайн-курс в Москве | hero (geo) |
| 16 | `H_ACCIDENTAL_OPEN` | 1 | 0.3% | 0.70 | Случайное открытие / превью | hero |
| 17 | `H_HERO_NO_HOOK` | 1 | 0.3% | 0.55 | Текстоёмкий hero без действия | hero |
| 18 | `H_IDLE_TAB` | 1 | 0.3% | 0.90 | Долгое удержание вкладки без реального чтения | hero |
| 19 | `H_NO_SCROLL_ENGAGE` | 1 | 0.3% | 0.92 | 1 scroll / 0 clicks за 8+ мин — нет глубины | hero |
| 20 | `H_GEO_OFFLINE` | 1 | 0.3% | 0.72 | Алматы → офлайн Москва | hero (geo/offline) |
| 21 | `H_DISTRACTION_BLUR` | 1 | 0.3% | 0.68 | Уход в другие окна (blur) без возврата к CTA | hero |
| 22 | `H_TIME_NOT_ENGAGEMENT` | 1 | 0.3% | 0.85 | Duration ≠ интерес (idle) | hero |

### Смысловые кластеры

1. **Шум / боты** — `H_BOT_TRAFFIC`, `H_BURST_NOISE`, `H_AUTOMATED_SCROLL_CLICK`.
2. **Форма достигнута, заявка нет** — `H_FORM_FOCUS_NO_SUBMIT` (~261), плюс `H_FORM_FRICTION_FOUR_FIELDS`, `H_NO_TARIFF_PRESELECT`.
3. **Поздний CTA / длина страницы** — `H_NO_CTA_HERO`, `H_NO_REGISTER_CTA_UNTIL_PRICING`, `H_LONG_SCROLL_FRICTION`.
4. **Ранний/средний отсев** — `H_EARLY_EXIT_HERO`, `H_MIDPAGE_DROP`.

## Атипичные визиты (custom)

### `4169838777501745336` — США, Win11, 1с
- Секции: `hero` · exit: `hero` · max_scroll≈0%
- Гипотезы: `H_BOUNCE_HERO`, `H_NO_CTA_HERO`, `H_GEO_MISMATCH`, `H_ACCIDENTAL_OPEN`, `H_HERO_NO_HOOK`
- Вывод: мгновенный bounce; не RU-bot burst; для UX-конверсии нерелевантен.

### `4182468975911501852` — Казахстан, macOS, 502с
- Секции: `hero` · exit: `hero` · max_scroll≈5%
- Гипотезы: `H_IDLE_TAB`, `H_NO_SCROLL_ENGAGE`, `H_NO_CTA_HERO`, `H_GEO_OFFLINE`, `H_DISTRACTION_BLUR`, `H_TIME_NOT_ENGAGEMENT`
- Вывод: человекоподобный idle (вкладка открыта), без скролла к pricing/форме; единственный длинный «живой» визит — тоже без заявки.

## Артефакты

- Per-visit: `data/hypotheses/*.json` (302)
- Шаблоны: `data/hypotheses/_meta/templates.json`, `data/hypotheses/_meta/clone_templates.json`
- Структура: `data/landing-structure.md`
- Инвентарь: `data/visits-inventory.json`
- Итог: `hypotheses.md`
