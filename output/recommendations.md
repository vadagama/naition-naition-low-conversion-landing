# Рекомендации (этап 5)

## Executive summary
- **Approved:** 5 (3 cluster + 2 structural)
- **Blocked:** 0
- **Deferred:** 0
- **Цель:** поднять CR симулятора с ~7.9% до ≥12%

## Таблица рекомендаций

| id | layer | cluster / N | hypothesis | change | targetSection | files | changeType | constraintRef | status | implementOrder |
|----|-------|-------------|------------|--------|---------------|-------|------------|---------------|--------|----------------|
| R1 | structural | CTA→pricing | Ранние CTA ведут на тарифы | Все `.btn-register` скроллят к `#registration`; убрать `data-scroll-to=pricing`; `behavior:'auto'` | s1 | js/main.js, index.php | js/layout | Можно JS/CTA | approved | 1 |
| R2 | structural | hero tall + form@85% | Форма далеко | Укоротить hero (без 100vh); padding секций ↓ | s1 | css/style.css | css | Можно CSS | approved | 2 |
| R3 | cluster | interaction_start / 261 | Focus без submit | Prefill `purpose`; крупнее submit; форма сразу после about вместе с pricing | s9 | index.php, js/main.js | layout/copy/js | Поля нельзя удалять | approved | 3 |
| R4 | cluster | m1 / 28 | Застрял в программе | Переставить `.pricing-section` + `#registration` сразу после «О курсе»; программу ниже | s3→s8 | index.php | layout | Классы сохранить | approved | 4 |
| R5 | cluster / structural | falseAffordances | Ложный pointer | Убрать `cursor:pointer` с `.feature-card/.program-module/.injury-card` | s2 | css/style.css | css | Можно CSS | approved | 5 |

## Заблокированные / отложенные
Нет.

## План внедрения (сверху вниз)
1. R1 — прямой скролл CTA → форма — **implemented**
2. R2 — короткий hero / меньше воздуха — **implemented**
3. R4 — pricing + registration вверх (после about) — **implemented**
4. R3 — prefill purpose + submit UX — **implemented**
5. R5 — убрать ложный pointer — **implemented**

Статусы всех approved: `implemented`.
