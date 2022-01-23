searchText = document.getElementById("searchText");
searchBox = document.getElementById("searchBox");


document.addEventListener("DOMContentLoaded", function() {
    let formData = new FormData();
    formData.append("request-type", "listService");
    fetch('api/crudHandler.php', {
        method: 'POST',
        body: formData
    })
    .then(res => {
        return res.json();
    })
    .then(data => {
        if (data == 0) {
            emptyJobCard();
        } else {
            for (i=0; i < data.length; i++) {
                addJobCard("src/home.svg", data[i].serviceName, data[i].serviceDescription); 
            }
        }
    })
    .catch(err => {
        console.log(err);
    });
}); 

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

function addJobCard(cardPic, serviceName, serviceDescription, redirectUrl="") {
    cardWrapper = document.getElementById("cardWrapper");
    if (cardWrapper != null) {
        cardWrapper.innerHTML += `
            <div class="card">
                <img class="card-pic" src="${cardPic}">
                <div class="card-service-name font font-medium">${serviceName}</div>
                <div class="card-desc font font-small">${serviceDescription}</div>
                <div id="deleteBtn" class="btn btn-blue card-delete" href=${redirectUrl}>Delete</div>
            </div>
            `
    }
}

function emptyJobCard(){
    cardWrapper = document.getElementById("cardWrapper");
    if (cardWrapper != null) {
        cardWrapper.innerHTML += `
            <div class="card">
                <div class="card-service-name font font-medium">No Service Added</div>
            </div>
            `
    }
}

