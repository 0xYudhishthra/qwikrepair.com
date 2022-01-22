searchText = document.getElementById("searchText");
searchBox = document.getElementById("searchBox");

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

function addServiceCard(cardPic, serviceName, techName, serviceDescription, redirectUrl) {
    cardWrapper = document.getElementById("cardWrapper");
    if (cardWrapper != null) {
        cardWrapper.innerHTML += `
            <div class="card">
                <img class="card-pic" src="${cardPic}">
                <div class="card-service-name font font-medium">${serviceName}</div>
                <div class="card-tech-name font">${techName}</div>
                <div class="card-desc font font-small">${serviceDescription}</div>
                <a class="btn btn-blue card-btn" href=${redirectUrl}>Book Now</a>
            </div>
            `
    }
}

for (i=0; i < 10; i++) {
    addServiceCard("src/home.svg", "Plumbing", "John", "I will plumb ur backdoor.")
}