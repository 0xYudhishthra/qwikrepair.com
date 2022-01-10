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

if (login != null) {
    login.addEventListener('click', () => {
        const formData = new FormData(document.querySelector('form'));
        fetch('api/model.php', {
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
                location.href = 'index.php'
            })
            .catch(error => { alert(error) })})}


// if (login != null) {
//     login.addEventListener('click', () => {
//         const formData = new FormData(document.querySelector('form'));
//         fetch('api/model.php', {
//             method: 'POST',
//             body: formData,
//             credentials:'include'
//         })
//         .then (response => {
//             httpStatus = response.status
//             return response.text();
//         })
//         .then(data => {
//             alert(data)
//             if (httpStatus === 200) 
//                 location.href = 'login.php'
//             })
//             .catch(error => { alert(error) })})}