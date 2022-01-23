searchText = document.getElementById("searchText");
searchBox = document.getElementById("searchBox");

bookCard = document.getElementById("book-card");
bookCard.style.display = "none";

statusCard = document.getElementById("status-card");
statusCard.style.display = "none";

reviewCard = document.getElementById("review-card");
reviewCard.style.display = "none";

searchWrapper = document.getElementById("search-wrapper");
searchWrapper.style.display = "none";



function showBookCard() {
    if (bookCard != null) {
        bookCard.style.display = "flex";
    }
}

function showStatusCard(data){
    if (statusCard != null) {
        statusCard.style.display = "flex";
        if (data.appointmentStatus == "1") {
            num1 = document.getElementById("num-1");
            num1.classList.add("num-active");
        } else {
            num1 = document.getElementById("num-1");
            num1.classList.add("num-active");
            num2 = document.getElementById("num-3");
            num2.classList.add("num-active");
        }
    }
}

function showReviewCard(data) {
    if (reviewCard != null) {
        reviewCard.style.display = "flex";
    }
}

document.addEventListener("DOMContentLoaded", function() {
    let formData = new FormData();
    formData.append("request-type", "getAppointmentDetails");
    fetch('api/crudHandler.php', {
        method: 'POST',
        body: formData
    })
    .then(res => {
        return res.json();
    })
    .then(data => {
        if (data.appointmentStatus == "3") {
            showReviewCard(data);
        } else if (data.appointmentStatus == "1" || data.appointmentStatus == "2") {
            showStatusCard(data); 
        } else 
            generateServiceCards();

    })
    .catch(err => {
        console.log(err);
    });
}, {once: true});


function generateServiceCards() {
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
            emptyServiceCard()
        } else {
            for (i=0; i < data.length; i++) {
                addServiceCard("src/home.svg", data[i].serviceName, data[i].techFullName, data[i].serviceDescription);
            }
        } 
    })
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

function addServiceCard(cardPic, serviceName, techName, serviceDescription, redirectUrl="") {
    cardWrapper = document.getElementById("cardWrapper");
    if (cardWrapper != null) {
        cardWrapper.innerHTML += `
            <div class="card">
                <img class="card-pic" src="${cardPic}">
                <div class="card-service-name font font-medium">${serviceName}</div>
                <div class="card-tech-name font">${techName}</div>
                <div class="card-desc font font-small">${serviceDescription}</div>
                <a class="btn btn-blue card-btn" type="submit" href='${redirectUrl}' id=${serviceName}${techName}>Book Now</a>
            </div>
            `
    }
}


var starValue = 1;

function starHover(rate) {
    reviewStar = document.getElementById("reviewStar");
    if (reviewStar != null) {
        reviewStar.innerHTML = starHtml(rate);
    }
    starValue = rate;
}

function starHtml(rate) {
    var html = ``
    var a = 1
    for (i=1 ; i <= rate ; i++) {
        html += `<div onclick="starHover(${a})" class="star"><img src="src/star-solid.svg"></div>`
        a++
    }
    for (i=1 ; i <= (5-rate) ; i++) {
        html += `<div onclick="starHover(${a})" class="star"><img src="src/star-empty.svg"></div>`
        a++
    }
    return html
}