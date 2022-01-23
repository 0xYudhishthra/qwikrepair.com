cardWrapper = document.getElementById('cardWrapper')

function addCard(imgSrc, seniorName, serviceName, rateStar, rateDesc) {
    if (cardWrapper != null) {
        newCardHtml = `
        <div class="card">
            <div class="user">
                <img src="${imgSrc}">
                <div>
                    <div class="font-large name">${seniorName}</div>
                    <div class="font-medium service-name">${serviceName}</div>
                </div>
            </div>
            <div id="reviewStar" class="review-star">
                ${starHtml(rateStar)}
            </div>
            <div class="review-desc">${rateDesc}</div>
            </div>
        `
        cardWrapper.innerHTML += newCardHtml;
    }
}

function starHtml(rate) {
    var html = ``
    var a = 1
    for (i=1 ; i <= rate ; i++) {
        html += `<div class="star"><img src="src/star-solid.svg"></div>`
        a++
    }
    for (i=1 ; i <= (5-rate) ; i++) {
        html += `<div class="star"><img src="src/star-empty.svg"></div>`
        a++
    }
    return html
}

addCard('src/home.svg', 'John Wick', 'Plumbing Your Backdoor', 4, 'Surprising and powerful plumbing tools.');
addCard('src/appointment.svg', 'Johnson & Johnson', 'Whack You', 5, 'Big and warm whacking tools. :)');
