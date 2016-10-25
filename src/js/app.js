

(function() {
'use strict';
    var name = document.getElementById('name');
    var subject = document.getElementById('subject');
    var email = document.getElementById('email');
    var message = document.getElementById('message');
    var submit = document.querySelector('.form-submit');
    var form = document.querySelector('.contact-form');
    var xhr = new XMLHttpRequest();

    var validate = function(n, s, e, m) {
        //TODO: Validate data;
        var data = new FormData(form);
        data.append('message', m.value);
        return data;
    };

    submit.addEventListener('click', function(e) {
        submit.disabled = true;
        e.preventDefault();
        xhr.onreadystatechange = function() {
            if(xhr.readyState === 4 && xhr.status === 200) {
                submit.disabled = false;
                console.log(xhr);
            }
        }

        xhr.open(form.method.toUpperCase(), form.action, true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send(validate(name, subject, email, message));
     }, false);
     
})();
