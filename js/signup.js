var passwordHide = document.getElementById('password-hide');
var passwordInput = document.getElementById('password');
var rptPasswordHide = document.getElementById('rptPassword-hide');
var rptPasswordInput = document.getElementById('rptPassword');
var signup = document.querySelector('input[type="submit"]');
var httpStatus;

if ((passwordHide != null) && (passwordInput != null)) {
    passwordHide.addEventListener('click', () => {
        if (passwordInput.getAttribute('type') == 'password') {
            passwordInput.setAttribute('type', 'text');
            passwordHide.setAttribute('src', 'src/eye.svg');
        } else {
            passwordInput.setAttribute('type', 'password');
            passwordHide.setAttribute('src', 'src/eye-crossed.svg');
        } 
    }) 
} 

if ((rptPasswordHide != null) && (rptPasswordInput != null)) {
    rptPasswordHide.addEventListener('click', () => {
        if (rptPasswordInput.getAttribute('type') == 'password') {
            rptPasswordInput.setAttribute('type', 'text');
            rptPasswordHide.setAttribute('src', 'src/eye.svg');
        } else {
            rptPasswordInput.setAttribute('type', 'password');
            rptPasswordHide.setAttribute('src', 'src/eye-crossed.svg');
        } 
    }) 
} 

if (signup != null) {
    signup.addEventListener('click', () => {
        const formData = new FormData(document.querySelector('form'));
        fetch('api/crudHandler.php', {
            method: 'POST',
            body: formData,
            credentials:'include'
        })
        .then (response => {
            httpStatus = response.status
            return response.text();
        })
        .then(data => {
            alert(data)
            if (httpStatus === 200) 
                location.href = 'login.php'
            })
            .catch(error => { alert(error) })})
}

