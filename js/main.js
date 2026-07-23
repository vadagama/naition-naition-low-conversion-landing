document.addEventListener('DOMContentLoaded', () => {
    const registrationSection = document.getElementById('registration');
    const form = document.getElementById('registration-form');
    const message = document.getElementById('form-message');
    const tariffChip = document.getElementById('tariff-chip');
    const purposeField = form?.querySelector('textarea[name="purpose"]');
    const stickyCta = document.getElementById('sticky-cta');
    const hero = document.querySelector('.hero');
    const registerButtons = document.querySelectorAll('.btn-register');

    let selectedTariff = '';

    const scrollToRegistration = () => {
        if (!registrationSection) {
            return;
        }
        registrationSection.scrollIntoView({ behavior: 'auto', block: 'start' });
    };

    const setTariff = (tariff) => {
        selectedTariff = (tariff || '').trim();
        if (!tariffChip) {
            return;
        }
        if (selectedTariff) {
            tariffChip.hidden = false;
            tariffChip.textContent = `Выбран тариф: ${selectedTariff}`;
        } else {
            tariffChip.hidden = true;
            tariffChip.textContent = '';
        }
    };

    const prependTariffToPurpose = () => {
        if (!(purposeField instanceof HTMLTextAreaElement) || !selectedTariff) {
            return;
        }
        const prefix = `Тариф: ${selectedTariff}. `;
        const value = purposeField.value.trim();
        if (value.startsWith('Тариф:')) {
            purposeField.value = value.replace(/^Тариф:\s*[^.]+\.\s*/, prefix);
            return;
        }
        purposeField.value = prefix + value;
    };

    registerButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const tariff = button.getAttribute('data-tariff');
            if (tariff) {
                setTariff(tariff);
            }
            scrollToRegistration();
        });
    });

    if (stickyCta && hero) {
        const updateSticky = () => {
            const pastHero = window.scrollY > Math.max(hero.offsetHeight * 0.5, 200);
            stickyCta.hidden = !pastHero;
        };
        updateSticky();
        window.addEventListener('scroll', updateSticky, { passive: true });
    }

    if (!form) {
        return;
    }

    if (purposeField instanceof HTMLTextAreaElement) {
        purposeField.addEventListener('focus', () => {
            if (selectedTariff && !purposeField.value.trim()) {
                purposeField.value = `Тариф: ${selectedTariff}. Хочу пройти курс первой помощи`;
            }
        });
    }

    form.addEventListener('submit', async (event) => {
        event.preventDefault();

        prependTariffToPurpose();

        const submitButton = form.querySelector('button[type="submit"]');
        const formData = new FormData(form);

        if (submitButton instanceof HTMLButtonElement) {
            submitButton.disabled = true;
        }

        if (message) {
            message.textContent = '';
            message.className = 'form-message';
        }

        try {
            const response = await fetch(form.action, {
                method: 'POST',
                body: formData,
            });

            const data = await response.json();

            if (!response.ok || !data.ok) {
                throw new Error(data.error || 'Не удалось отправить заявку.');
            }

            if (message) {
                message.textContent = 'Заявка успешно отправлена. Мы свяжемся с вами в ближайшее время.';
                message.className = 'form-message success';
            }

            form.reset();
            if (purposeField instanceof HTMLTextAreaElement) {
                purposeField.value = 'Хочу пройти курс первой помощи';
            }
            setTariff('');
        } catch (error) {
            if (message) {
                message.textContent = error instanceof Error ? error.message : 'Не удалось отправить заявку.';
                message.className = 'form-message error';
            }
        } finally {
            if (submitButton instanceof HTMLButtonElement) {
                submitButton.disabled = false;
            }
        }
    });
});
