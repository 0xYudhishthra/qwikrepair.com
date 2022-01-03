passwordHide = document.getElementById('password-hide');
passwordInput = document.getElementById('password');
rptPasswordHide = document.getElementById('rptPassword-hide');
rptPasswordInput = document.getElementById('rptPassword');

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

if ((rptPasswordHide != null) && (rptPasswordInput != null)) {
    rptPasswordHide.addEventListener('click', () => {
        if (rptPasswordInput.getAttribute('type') == 'password') {
            rptPasswordInput.setAttribute('type', 'text');
            rptPasswordHide.setAttribute('src', 'src/eye.svg');
        } else {
            rptPasswordInput.setAttribute('type', 'password');
            rptPasswordHide.setAttribute('src', 'src/eye-crossed.svg');
        } // else
    }) //eventListener
} //if != null

const signup = document.querySelector('input[type="submit"]');
var httpStatus
signup.addEventListener('click', () => {
    window.alert("F U Cibai");
    // const formData = new FormData(document.querySelector('form'));
    // fetch('api/model.php', {
    //     method: 'POST',
    //     body: formData
    // })
    // .then(res => {
    //     httpStatus = res.status;
    //     return res.text();
    // }) 
    // .then(data => {
    //     alert(data);
    //     if (httpStatus === 200) 
    //         location.href = 'signup.php';
    // }) // status 200
    // .catch(err => {alert(err)})
}); //eventListener

