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

})();