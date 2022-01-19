if (logout != null){
    logout.addEventListener('click', () => {
        fetch('api/crudHandler.php', {
            method: 'POST',
            body: 'logout',
            credentials:'include'
        })
        .then (res => {
            httpStatus = res.status
            return res.text();
        })
        .then(data => {
            if (httpStatus === 200) 
                location.href = 'index.php'
            else
                alert("Internal server error")
        })
        .catch(error => { alert(error) })})
}