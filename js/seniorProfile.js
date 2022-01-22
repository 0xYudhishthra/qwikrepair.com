Element.prototype.appendAfter = function (element) {
    element.parentNode.insertBefore(this, element.nextSibling);
}, false;

function instantiateElement(data, elementID, elementType) {
        var element = document.createElement(elementType);
        element.innerHTML = data;
        element.id = elementID;
        element.appendChild(document.createElement("br"));
        return element;
};

document.addEventListener("DOMContentLoaded", function() {
    let formData = new FormData();
    formData.append("request-type", "getProfileDetails");
    fetch('api/crudHandler.php', {
        method: 'POST',
        body: formData
    })
    .then(res => {
        return res.json();
    })
    .then(data => {
        instantiateElement(data['firstName'] + ' ' + data['lastName'], 'fullNameData', 'div').appendAfter(document.getElementById('fullName'));
        instantiateElement(data['email'], 'emailData', 'p').appendAfter(document.getElementById('emailAddress'));
        instantiateElement(data['role'], 'roleData', 'p').appendAfter(document.getElementById('role'));
        instantiateElement(data['dob'], 'dobData', 'h3').appendAfter(document.getElementById('dob'));
        instantiateElement(data['phoneNumber'], 'phoneNumberData', 'h3').appendAfter(document.getElementById('phoneNumber'));
        instantiateElement(data['street'], 'streetData', 'h3').appendAfter(document.getElementById('street'));
        instantiateElement(data['city'], 'cityData', 'h3').appendAfter(document.getElementById('city'));
        instantiateElement(data['state'], 'stateData', 'h3').appendAfter(document.getElementById('state'));
        instantiateElement(data['postcode'], 'postcodeData', 'h3').appendAfter(document.getElementById('postcode'));
    })
    .catch(err => {
        console.log(err);
    }
    );
});
