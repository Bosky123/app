var name = window.prompt("Prosím zadej svoje jméno")
var ageCheck = window.prompt("Prosím zadej svůj věk")

if (ageCheck < 18) {
    window.alert("odeslali jste že vám je " + ageCheck + " let, " + name + ".....");
    window.alert("Musí ti být alespoň 18 let, aby si mohl navštívit tuto stránku");
    window.location.href="home.php"
}


else if (ageCheck > 18 && ageCheck < 101) {

window.alert("můžeš vstoupis na tuto stránku");
window.alert("Vítej " + name + "!");


}


else {

    window.alert("Prosím buďte upřímní ohledně vašeho věku, " + name - ".");
    window.location.href="vip.html"
}


