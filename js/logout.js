var logout = document.getElementById('logoutBtn');

if (logout != null) {
    logout.addEventListener('click', () => {
        fetch('api/crudHandler.php', {
            method: 'POST',
            credentials:'include'
        })
        .then (res => res.text())
        .then(data => {
                alert(data)            
                location.href = 'index.php'
        })
        .catch(error => { alert(error) })})
}