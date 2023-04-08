/* To display the date and time in the header: */
const months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec"];
const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
function displayDate() {
    let date = new Date();
    document.getElementById("date").innerHTML = days[date.getDay()] + ", " + months[date.getMonth()] 
        + " " + date.getDate() + ", " + date.getFullYear() + "<br>" + date.toLocaleTimeString();
}
setInterval(displayDate, 1000);

/* Client-side form validation for cat & dog finder forms */
function validateCatForm() { 
    const formElements = document.forms["catform"];
    if (!formElements["animalGender"][0].checked && !formElements["animalGender"][1].checked && !formElements["animalGender"][2].checked) {
        alert("Please choose the cat's gender.");
        return false;
    } 
    else if (formElements["catBreed"].value == "") {
        alert("Please choose the cat's breed.");
        formElements["catBreed"].focus();
        return false;
    }
    else if (formElements["catAge"].value == "") {
        alert("Please choose the cat's age.");
        formElements["catBreed"].focus();
        return false;
    }
    return true;
}

function validateDogForm() { 
    const formElements = document.forms["dogform"];
    if (!formElements["animalGender"][0].checked && !formElements["animalGender"][1].checked && !formElements["animalGender"][2].checked) {
        alert("Please choose the dog's gender.")
        return false;
    }
    else if (formElements["dogBreed"].value == "") {
        alert("Please choose the dog's breed.");
        formElements["dogBreed"].focus();
        return false;
    }
    else if (formElements["dogAge"].value == "") {
        alert("Please choose the dog's age.");
        formElements["dogBreed"].focus();
        return false;
    }
    return true;
}

/* Client-side form validation for the pet giveaway form */
function validateGiveawayForm() {
    const formElements = document.getElementById("giveawayform");
    if (!formElements["animalType"][0].checked && !formElements["animalType"][1].checked) {
        alert("Please choose an animal type.");
        return false;
    }
    else if (formElements["animalBreed"].value == "") {
        alert("Please choose an animal breed.");
        formElements["animalBreed"].focus();
        return false;
    }
    else if (formElements["animalAge"].value == "") {
        alert("Please choose an animal age.");
        formElements["animalAge"].focus();
        return false;
    }
    else if (!formElements["animalGender"][0].checked && !formElements["animalGender"][1].checked) {
        alert("Please choose an animal gender.");
        return false;
    }
    else if (formElements["petDescription"].value == "") {
        alert("Please enter a short description.");
        formElements["petDescription"].focus();
        return false;    
    }
    else if (formElements["firstName"].value == "") {
        alert("Please enter your first name.");
        formElements["firstName"].focus();
        return false;
    }
    else if (formElements["familyName"].value == "") {
        alert("Please enter your family name.");
        formElements["familyName"].focus();
        return false;
    }    
    else if (formElements["email"].value == "") {
        alert("Please enter your email.");
        formElements["email"].focus();
        return false;
    }
    else if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(formElements["email"].value))) {
        alert("Please enter a valid email.");
        formElements["email"].focus();
        return false;
    }
    else {
        return true;
    }
}