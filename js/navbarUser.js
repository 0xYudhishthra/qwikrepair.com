userIcon = document.getElementById('userPic');
userName = document.getElementById('userName');

function setUserIcon(filename) {
    if (userIcon != null) {
        userIcon.src=filename;
    }
}

function setUserName(name) {
    if (userName != null) {
        userName.innerHTML=name;
    }
}

//Get personal details from database and update in navbar
document.addEventListener('DOMContentLoaded', function() {
    let formData = new FormData();
    formData.append("request-type", "getProfileDetails");
    fetch ('api/crudHandler.php', {
        method: 'POST',
        body: formData
    })
    .then(res => {
        return res.json();
    })
    .then(data => {
        fullName = data.firstName + " " + data.lastName;
        setUserName(fullName);
    }
    )
    .catch(err => {
        console.log(err);
    }
    );
}, {once: true});


