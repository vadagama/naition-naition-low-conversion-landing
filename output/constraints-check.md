# Проверка

## Чеклист «нельзя менять»
| Пункт | status |
|-------|--------|
| `#registration-form` + `action="api/submit.php"` | pass |
| Поля `name`, `phone`, `email`, `purpose` | pass |
| `bot_session_id` | pass |
| `<script src="api/visit.php">` | pass |
| Классы `.btn-register`, `.pricing-section`, `.program-module`, `.program-list` | pass |
| `api/*` и `sql/schema.sql` не трогались | pass |

## Structural audit — закрыто?
| наблюдение | рекомендация | status |
|------------|--------------|--------|
| Ранние CTA → pricing | R1 все CTA → #registration, scroll auto | implemented |
| Hero ~100vh, форма @85% | R2 короткий hero + padding; R4 form вверх | implemented |
| Ложный pointer на карточках | R5 cursor:default | implemented |

## Рекомендации
| id | layer | status | notes |
|----|-------|--------|-------|
| R1 | structural | implemented | нет data-scroll-to; JS всегда к форме |
| R2 | structural | implemented | hero min-height:auto, section padding 48px |
| R3 | cluster | implemented | purpose prefill; крупнее submit |
| R4 | cluster | implemented | порядок: about → pricing → registration → program → … |
| R5 | structural | implemented | убран cursor:pointer у карточек |

## Интерактив после правок
| элемент | ожидание | pass/fail |
|---------|----------|-----------|
| `.btn-register` (hero/sticky/mid/pricing) | скролл к `#registration` | pass (код) |
| pricing `data-tariff` | чип тарифа + скролл к форме | pass |
| `#registration-form` submit | POST api/submit.php | pass (без изменения API) |
| `.feature-card` и др. | не выглядят как кнопки | pass |

## Изменённые файлы
- `index.php` — порядок секций, CTA без detour, prefill purpose
- `js/main.js` — все register → registration, behavior auto
- `css/style.css` — короткий hero, padding, submit, cursor
- `.cursor/skills/webvisor-conversion-analysis/` — установленный скилл
- `output/*` — артефакты анализа по скиллу
- `hypotheses.md` — полный отчёт по шаблону

## Workflow (из site_dir)
- [ ] Redeploy
- [ ] Run visits simulator
- [ ] Сравнить CR (цель ≥12%)

## Итог
- [x] Все запреты соблюдены
- [x] Топ-3 + минимум 1 structural — implemented
