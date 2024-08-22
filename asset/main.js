let username = prompt("Entrez votre nom s'il vous plait");
let sexe = prompt("Votre sexe ?")

let heure = 17;
let ygreet = (heure<=16) ? "Bonjour monsieur" : "Bonsoir monsieur"
let xgreet = (heure<=16) ? "Bonjour madame" : "Bonsoir madame"



switch (sexe) {
    case "F":
        let Fgreet = document.getElementById("screen").value = xgreet + " "+ username;
        break;
    case "M":
        let Mgreet = document.getElementById("screen").value = ygreet + " "+ username;
        break;

    default:
        alert("Veillez renseigner votre genre !")
        i = 0
        while (sexe != "F" && sexe !="M"){
            sexe = prompt("Votre sexe ?");
            i++;
        }
        (sexe = "F")? Fgreet : Mgreet;
        
        
        break;
}
// alert(greet)