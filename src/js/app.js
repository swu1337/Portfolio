(function() {
'use strict';
    const _regexString = /^[A-Z][a-z]+( +[A-Z][a-z]+)*$/;
    const _regexEmail = /^\S+@\S+/;
    const _regexSpace = /\s/g;

    var name = document.getElementById('name'),
        subject = document.getElementById('subject'),
        email = document.getElementById('email'),
        message = document.getElementById('message'),
        submit = document.querySelector('.form-submit'),
        form = document.querySelector('.contact-form'),
        isEmpty = a => a.every(el => el.replace(_regexSpace, '').length > 0),
        xhr = new XMLHttpRequest(),
        validate = function(n, s, e, m) {
        //TODO: Validate data;
            var validN = n.value || '',
                validS = s.value || '',
                validE = e.value || '',
                validM = m.value || '';

            if(isEmpty([n.value, s.value, e.value, m.value])) {
                window.alert('full');
            } else {window.alert('empty');}

            var data = new FormData(form);
            data.append('message', m.value);
            return data;
        };

    form.addEventListener('click', function(e) {
        var input = e.target || e.srcElement;
        if(input.nodeName === 'INPUT' || input.nodeName === 'TEXTAREA'){
            input.addEventListener('keyup', function(event) {
                var element = event.target || event.srcElement
                if(_regexString.test(element.value)) {
                    if(element.classList.contains('error')) {
                        element.classList.remove('error');
                    }
                    element.classList.add('success');
                } else {
                    element.classList.add('error');
                }
            }, false);
        }
    }, false);

    submit.addEventListener('click', function(e) {
        e.preventDefault();
        submit.disabled = true;

        if(validate(name, subject, email, message)) {

        } else {

        }

        // submit.disabled = true;

        // xhr.onreadystatechange = function() {
        //     if(xhr.readyState === 4 && xhr.status === 200) {
        //         submit.disabled = false;
        //         console.log(xhr);
        //         console.log(JSON.parse(xhr.response));
        //     }
        // }
        //
        // xhr.open(form.method.toUpperCase(), form.action, true);
        // xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        // xhr.send(validate(name, subject, email, message));
     }, false);

})();
