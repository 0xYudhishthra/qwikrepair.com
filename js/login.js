const Login = document.querySelector('input[type="submit"]');
var httpStatus 

Login.addEventListener('click', () => {
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
        .catch(error => { alert(error) })})