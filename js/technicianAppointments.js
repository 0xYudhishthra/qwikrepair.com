searchText = document.getElementById("searchText");
searchBox = document.getElementById("searchBox");

document.addEventListener("DOMContentLoaded", function() {
    let formData = new FormData();
    formData.append("request-type", "getConfirmedAppointmentDetails");
    fetch('api/crudHandler.php', {
        method: 'POST',
        body: formData
    })
    .then(res => {
        return res.json();
    })
    .then(data => {
        if (data == 0) {
            generateJobCards();
        } else {
            displayJobStatus(data); 
        }
    })
    .catch(err => {
        console.log(err);
    });
});


function generateJobCards() {
    let formData = new FormData();
    formData.append("request-type", "listJobs");
    fetch('api/crudHandler.php', {
        method: 'POST',
        body: formData
    })
    .then(res => {
        return res.text();
    })
    .then(data => {
        // if (data == 0) {
        //     emptyJobCard()
        // } else {
        //     for (i=0; i < data.length; i++) {
        //         addJobCard("src/home.svg", data[i].serviceName, data[i].seniorName, data[i].appointmentDate, data[i].appointmentTime, "");
        //     }
        alert(data);
    } )
    .catch(err => {
        console.log(err);
    });
}
        


function searchFocus() {
    if ((searchBox != null) && (searchText != null)) {
        searchText.style.borderColor = "#94D1EA"
        searchBox.style.boxShadow = "0 0 5px #94D1EA"
    }
}

function searchOutFocus() {
    if ((searchBox != null) && (searchText != null)) {
        searchText.style.borderColor = "white" 
        searchBox.style.boxShadow = "0 0 2px #94D1EA"   
    }
}

function addJobCard(cardPic, serviceName, seniorName, appointmentDate, appointmentTime, redirectUrl="") {
    cardWrapper = document.getElementById("cardWrapper");
    if (cardWrapper != null) {
        cardWrapper.innerHTML += `
            <div class="card">
                <img class="card-pic" src="${cardPic}">
                <div class="card-service-name font font-medium">${serviceName}</div>
                <div class="card-senior-name font">${seniorName}</div>
                <div class="card-desc font font-small">${appointmentDate}</div>
                <div class="card-desc font font-small">${appointmentTime}</div>
                <a class="btn btn-blue card-btn" href=${redirectUrl}>Select Job</a>
            </div>
            `
    }
}

function emptyJobCard(){
    cardWrapper = document.getElementById("cardWrapper");
    if (cardWrapper != null) {
        cardWrapper.innerHTML += `
            <div class="card">
                <div class="card-service-name font font-medium">There are no appointments assigned to you at the moment</div>
            </div>
            `
    }
}

