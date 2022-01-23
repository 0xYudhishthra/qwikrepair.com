contentWrap = document.getElementById("contentWrap");

function faqShow(array) {
    if (contentWrap != null) {
        for (var i = 1; i <= array.length; i++) {
            contentWrap.innerHTML += getHtml(i, array[i-1][0], array[i-1][1]);
        }
    }
}

function getHtml(i, question, answer) {
    return (`
        <div class="card">
            <div class="font font-medium card-t">${i}. ${question}</div>
            <div class="font card-d">${answer}</div>
        </div>
    `)
}

const faq = [
    [
        "How much for each service?",
        "The services are all free of charge. All the services are provided by the volunteers."
    ],
    [
        "How much for each service?",
        "The services are all free of charge. All the services are provided by the volunteers."
    ],
    [
        "How much for each service?",
        "The services are all free of charge. All the services are provided by the volunteers."
    ],
    [
        "How much for each service?",
        "The services are all free of charge. All the services are provided by the volunteers."
    ],
    [
        "How much for each service?",
        "The services are all free of charge. All the services are provided by the volunteers."
    ],
    [
        "How much for each service?",
        "The services are all free of charge. All the services are provided by the volunteers."
    ],
    [
        "How much for each service?",
        "The services are all free of charge. All the services are provided by the volunteers."
    ],
]

faqShow(faq);