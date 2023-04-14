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
    if (!formElements["gender"][0].checked && !formElements["gender"][1].checked && !formElements["gender"][2].checked) {
        alert("Please choose the cat's gender.");
        return false;
    } 
    else if (formElements["breed"].value == "") {
        alert("Please choose the cat's breed.");
        formElements["breed"].focus();
        return false;
    }
    else if (formElements["age"].value == "") {
        alert("Please choose the cat's age.");
        formElements["age"].focus();
        return false;
    }
    return true;
}

function validateDogForm() { 
    const formElements = document.forms["dogform"];
    if (!formElements["gender"][0].checked && !formElements["gender"][1].checked && !formElements["gender"][2].checked) {
        alert("Please choose the dog's gender.")
        return false;
    }
    else if (formElements["breed"].value == "") {
        alert("Please choose the dog's breed.");
        formElements["breed"].focus();
        return false;
    }
    else if (formElements["age"].value == "") {
        alert("Please choose the dog's age.");
        formElements["age"].focus();
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
    else if (formElements["animalName"].value == "") {
        alert("Please enter your animal's name.");
        return false;
    }
    else if (formElements["animalAge"].value == "") {
        alert("Please enter your animal's age.");
        formElements["animalAge"].focus();
        return false;
    }
    else if (formElements["animalBreed"].value == "") {
        alert("Please choose an animal breed.");
        formElements["animalBreed"].focus();
        return false;
    }
    else if (!formElements["animalGender"][0].checked && !formElements["animalGender"][1].checked) {
        alert("Please choose an animal gender.");
        return false;
    }
    else if (formElements["quote"].value == "") {
        alert("Please enter a short description.");
        formElements["quote"].focus();
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

function validateCredentials(formName) {
    const form = document.getElementById(formName);
    if (form["username"].value == "" || form["password"].value == "") {
        alert("All fields must be filled.");
        return false;
    }
    else if (!/^[a-zA-Z0-9]*$/.test(form["username"].value)) {
        alert("Usernames may only contain letters and digits.");
        form["username"].focus();
        return false;
    }
    else if (!/^[a-zA-Z0-9]*$/.test(form["password"].value)) {
        alert("Passwords may only contain letters and digits.");
        form["password"].focus();
        return false;
    }
    else if (form["password"].value.length < 4) {
        alert("Passwords must be atleast 4 characters long.");
        form["password"].focus();
        return false;
    }
    else if (!/[a-zA-Z]/.test(form["password"].value)) {
        alert("Passwords must contain at least 1 letter.");
        form["password"].focus();
        return false;
    }
    else if (!/\d/.test(form["password"].value)) {
        alert("Passwords must contain at least 1 digit.");
        form["password"].focus();
        return false;
    }
    else {
        return true;
    }
}