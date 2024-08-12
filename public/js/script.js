document.addEventListener('DOMContentLoaded', function () {
    Fancybox.bind("[data-fancybox]", {
        // Your custom options
    });

    // masks begin
    const phoneInputs = document.querySelectorAll('.js-phone');
    const IINInput = document.querySelector('.js-iin');

    const phoneMaskOptions = {
        mask: '+{7} (000) 000-00-00'
    };

    const IINMskOptions = {
        mask: '000000000000'
    };

    phoneInputs.forEach(input => {
        const mask = IMask(input, phoneMaskOptions);
    });

    const IINMask = IMask(IINInput, IINMskOptions);
    // masks end

    // form validation begin
    const feedbackForm = document.querySelector('.feedback-form');

    feedbackForm.addEventListener('submit', (e) => {
       e.preventDefault();
       let flag = true;
       let errors = [];

       for (input of phoneInputs) {
           if (input.value.length < 18) {
               flag = false;
               errors.unshift('Номер заполнен не до конца');
               break;
           }
       }

       if (IINInput.value.length < 12) {
           flag = false;
           errors.unshift('ИИН заполнен не до конца');
       }

       if (!iinCheck(IINInput.value)) {
           flag = false;
           errors.unshift('ИИН заполнен неверно');
       }

       flag === true ? feedbackForm.submit() : false;
       Fancybox.show(errors);

    });
    // form validation end

    // pseudo-placeholders begin
    const inputWrappers = document.querySelectorAll('.feedback-form__input-wrapper');

    inputWrappers.forEach(inputWrapper => {
        const pseudoPlaceholder = inputWrapper.querySelector('.feedback-form__pseudo-placeholder');
        const input = inputWrapper.querySelector('input');

        if (input) {
            const placeholder = input.placeholder;

            if (input.value !== '') {
                pseudoPlaceholder.innerHTML = '';
            }

            if(input.value === '') {
                pseudoPlaceholder.innerHTML = placeholder + '<span> *</span>';
            }

            input.addEventListener('input', () => {
                if (input.value !== '') {
                    pseudoPlaceholder.innerHTML = '';
                }

                if(input.value === '') {
                    pseudoPlaceholder.innerHTML = placeholder + '<span> *</span>';
                }
            });
        }
    });
    // pseudo-placeholders end
});