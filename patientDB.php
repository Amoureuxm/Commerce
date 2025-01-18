<?php

$serveur = "127.0.0.1";
$login = "root";
$password = "";
    try {
        $connexion = new PDO("mysql:host=$serveur;dbname=gestionpatient",$login,$password);
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
    /*    $patient = "CREATE TABLE Patient (
            PatientID INT AUTO_INCREMENT PRIMARY KEY,
            Nom VARCHAR(50),
            Prenom VARCHAR(50),
            DateNaissance DATE,
            Sexe VARCHAR(1),
            Adresse VARCHAR(200),
            Email VARCHAR(200),
            NumeroTelephone VARCHAR(30)
            ChambreID INT FOREIGN KEY REFERENCES Chambre(ChambreID)
    )";
    

        $connexion->exec($patient);
    
        echo "Connexion Patient reussi\n";

        $medecin = "CREATE TABLE Medecin (
            Matricule VARCHAR(50) UNIQUE PRIMARY KEY,
            Nom VARCHAR(50),
            Prenom VARCHAR(50),
            DateNaissance DATE,
            Sexe VARCHAR(1),
            Adresse VARCHAR(200),
            Email VARCHAR(200),
            NumeroTelephone VARCHAR(30)
    )";

        $connexion->exec($medecin);
        echo "Connexion Medecin reussi\n";
*/
         $infirmier = "CREATE TABLE Infirmier (
            Matricule VARCHAR(50) UNIQUE PRIMARY KEY,
            Nom VARCHAR(50),
            Prenom VARCHAR(50),
            DateNaissance DATE,
            Sexe VARCHAR(1),
            Adresse VARCHAR(200),
            Email VARCHAR(200),
            NumeroTelephone VARCHAR(30)
    )";

        $connexion->exec($infirmier);

        echo "Connexion Infirmier reussi\n";
/*
        $chambre = "CREATE TABLE Chambre (
            ChambreID INT AUTO_INCREMENT PRIMARY KEY,
            Nom VARCHAR(50),
            Bloc VARCHAR(20)
    )";

        $connexion->exec($chambre);

        echo "Connexion Chambre reussi\n";

        $consultation = "CREATE TABLE Consultation(
            ConsultationID  INT AUTO_INCREMENT UNIQUE PRIMARY KEY,
            CodePatient INT FOREIGN KEY REFERENCES Patient(PatientID),
            DateConsultation DATE,
            AgePatient DATE FOREIGN KEY REFERENCES Patient(DateNaissance)
            )";

        echo "Connexion consultation reussi\n";

        */
        
    } catch (PDOException $ex) {
        echo "Echec de la connexion". $ex->getMessage();
    }        
    
        
?>