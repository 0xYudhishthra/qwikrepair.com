var passwordHide = document.getElementById('password-hide');
var passwordInput = document.getElementById('password');

if ((passwordHide != null) && (passwordInput != null)) {
    passwordHide.addEventListener('click', () => {
        if (passwordInput.getAttribute('type') == 'password') {
            passwordInput.setAttribute('type', 'text');
            passwordHide.setAttribute('src', 'src/eye.svg');
        } else {
            passwordInput.setAttribute('type', 'password');
            passwordHide.setAttribute('src', 'src/eye-crossed.svg');
        } // else
    }) //eventListener
} //if != null


var login = document.querySelector('input[type="submit"]');
var httpStatus;

if (login != null) {
    login.addEventListener('click', () => {
        const formData = new FormData(document.querySelector('form'));
        fetch('api/crudHandler.php', {
            method: 'POST',
            body: formData,
            credentials:'include'
        })
        .then (res => {
            httpStatus = res.status
            return res.text();
        })
        .then(data => {
            if (httpStatus === 200 && data.match(/senior/))
                location.href = 'seniorHomepage.php'
            else if (httpStatus === 200 && data.match(/technician/))
                location.href = 'technicianHomepage.php'
            else
                alert("Internal server error")
            })
            .catch(error => { alert(error) })})}
