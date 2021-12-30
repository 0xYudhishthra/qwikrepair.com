const signup = document.querySelector('input[type="submit"]');
var httpStatus
signup.addEventListener('click', () => {
    const formData = new FormData(document.querySelector('form'));
    fetch('http://localhost:8080/model.php', {
        method: 'POST',
        body: formData
    })
    .then(res => {
        httpStatus = res.status;
        return res.text();
    })
    .then(data => {
        alert(data);
        if (httpStatus === 200) 
            location.href = 'login.php';
    })
    .catch(err => {alert(err)})
});