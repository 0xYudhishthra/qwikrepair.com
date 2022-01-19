// Listens to the click event on the "Logout" button.
if (logout != null) {
    logout.addEventListener('click', () => {
      fetch('api/crudHandler.php', {
        credentials: 'include',
        method: 'POST'
      }) //fetch
      .then(res => res.text())
      .then(data => {
        alert(data);
        location.href = "index.php";
      }) //then(data)
      .catch(err => {alert(err)})
    }) 
  } 
   