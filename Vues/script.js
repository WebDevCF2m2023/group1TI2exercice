function validateForm(e){
    var ageInput = document.getElementById("date").value;
    var birthday = new Date(ageInput);
    var yearBirthday = birthday.getFullYear();
    var currentYear = new Date().getFullYear();
    var age = currentYear - yearBirthday ;


    var password = document.getElementById('passWord').value;
    var lengthCheck = password.length >= 8;
    var uppercaseCheck = /[A-Z]/.test(password);
    var numberCheck = /\d/.test(password);
    var symbolCheck = /[!@#$%^&*(),.?":{}|<>]/.test(password);
    
    if (isNaN(age)|| age < 18)  {
        e.preventDefault();
        alert (" Vous n'êtes pas majeur");
    }
    if  (age > 110){
        e.preventDefault();
        alert (" Vous avez dépassé l'âge");
    } 

    if (!lengthCheck || !uppercaseCheck || !numberCheck || !symbolCheck) {
        e.preventDefault();
         alert("Le mot de passe ne respecte pas les critères");
    } 
}
