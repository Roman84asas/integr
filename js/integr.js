(function () {
    "use strict";

    function returnParentElement(element) {
        return element.parentElement;
    }

    function removeClass(element, exampleClass) {
        element.querySelectorAll(exampleClass).forEach(function (el) {
            el.classList.remove('active');
        })
    }

    if( document.querySelectorAll('.example_item_control') ) {
        document.querySelectorAll('.example_item_control').forEach(function (element) {
            element.addEventListener('click', function (e) {
                e.preventDefault();
                removeClass(returnParentElement(element), '.example_item_control');

                document.querySelector(element.getAttribute('data-anti')).classList.remove('active');
                document.querySelector(element.getAttribute('href')).classList.add('active');

                element.classList.add('active');
            })
        })
    }


    const messageAlertMail = "Вы не заполнили форму отправки Email!";
    const messageAlertPhone = "Вы не заполнили форму отправки Телефона!";
    const messageAlertName = "Вы не заполнили форму отправки Имени!";

    //Проверка, что правильно введен номер телефона
    function validPhone(phone) {
        const pattern = /^[\d\+ \(\)\ -]{4,14}\d$/;
        return pattern.test(phone);
    }

    //Проверка, что правильно введен емаил
    function validateEmail(email) {
        const pattern  = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return pattern.test(email);
    }

    //Проверка, что правильно введен имя
    function validName(name) {
        return name.length > 0;
    }

    function returnResultValidate(validateResult, alertMessage) {
        if( !validateResult ) {
            return alert(alertMessage);
        }
    }

    if( document.querySelector('.integr_send_item_button') ) {
        document.querySelector('.integr_send_item_button').addEventListener('click', function () {
            const name = document.querySelector('#send_input_name').value
            const email = document.querySelector('#send_input_email').value
            const phone = document.querySelector('#send_input_phone').value

            returnResultValidate(validName(name), messageAlertName);
            returnResultValidate(validateEmail(email), messageAlertMail);
            returnResultValidate(validPhone(phone), messageAlertPhone);

            var data = new FormData();

            data.append( 'name', name );
            data.append( 'phone', phone );
            data.append( 'email', email );
            data.append( 'action', 'home_popup' );
            data.append( 'nonce', sendintegr.nonce );

            fetch(sendintegr.url, {
                method: "POST",
                credentials: 'same-origin',
                body: data
            })
                .then((response) => response.json())
                .then((data) => {
                    if (data.success) {
                        document.querySelector('#send-form').style.display = 'none';
                        document.querySelector('.integr_send_item_success').style.display = 'block';

                        document.querySelector('#send_input_name').value = '';
                        document.querySelector('#send_input_email').value = '';
                        document.querySelector('#send_input_phone').value = '';
                    } else {
                        console.log(data);
                    }
                })
                .catch((error) => {
                    console.log(error);
                });
        })
    }
})();