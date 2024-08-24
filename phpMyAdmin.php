<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySql</title>
</head>
<body>
    <?php
    $serveur = "127.0.0.1";
    $login = "root";
    $password = "" ;
    $nom = "Benjamin','Bauma','ben@gmail.com'),('David','Wete','david@gmail.com'),('Belssing";
    $prenom = "Daniella";
    $email = "danble@gmail.com";

    



    // $nom = $_POST["name"];
    // $postnom = $_POST["pname"];
    // $email = $_POST["email"];
    // $produit = $_POST["Produit"] ;

    // $nom1 = $_POST["name1"];
    // $postnom1 = $_POST["pname1"];
    // $email1 = $_POST["email1"];
    // $produit1 = $_POST["Produit1"] ;

    // $nom2 = $_POST["name2"];
    // $postnom2 = $_POST["pname2"];
    // $email2 = $_POST["email2"];
    // $produit2 = $_POST["Produit2"] ;

    // $nom3 = $_POST["name3"];
    // $postnom3 = $_POST["pname3"];
    // $email3 = $_POST["email3"];
    // $produit3 = $_POST["Produit3"] ;

    // $nom4 = $_POST["name4"];
    // $postnom4 = $_POST["pname4"];
    // $email4 = $_POST["email4"];
    // $produit4 = $_POST["Produit4"] ;

    try {
        
    $connexion = new PDO("mysql:host=$serveur;dbname=commerce",$login,$password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // $create = "CREATE DATABASE Commerce";
    // $connexion->exec($create);
    // echo "Creation successful";
//================================================================

$client = "CREATE TABLE Clients (
    ClientID INT PRIMARY KEY,
    Nom VARCHAR(200),
    Prenom VARCHAR(200),
    Adresse VARCHAR(200),
    Email VARCHAR(200),
    NumeroTelephone VARCHAR(30)
)";
$connexion->exec($client);

// Création de la table Fournisseurs
$fournisseur = "CREATE TABLE Fournisseurs (
	FournisseurID INT PRIMARY KEY,
    NomFournisseur VARCHAR(200),
    Adresse VARCHAR(100),
    Email VARCHAR(200),
    NumeroTelephone VARCHAR(200)
    )";
    $connexion->exec($fournisseur);
    
// Creation de la table employe
$employer = "CREATE TABLE Employes (
	EmployeID INT PRIMARY KEY,
    Nom VARCHAR(200),
    Prenom VARCHAR(200),
    Fonction VARCHAR(200),
    Email VARCHAR(200),
    NuméroTelephone VARCHAR(200)
    )" ;
    $connexion->exec($employer);
 
 // Insertion des données dans les table fournisseurs
 // INSERT INTO Fournisseurs (FournisseurID, NomFournisseur, Adresse, Email, NumeroTelephone)
 // VALUES (1233, "Steve", "Rue Voltaire", "steve2024@gmail.com", "07 54 34, 72"),
// (1444, "Arthur", "Rue Lumière", "arthur024@gmail.com", "07 54 34, 72");
 
 // Modification de la table Produits pour intégrer l'identifiant du fournisseur
 // Création de la table "Produits"
$produit = "CREATE TABLE Produits (
    ProduitID INT PRIMARY KEY,
    NomProduit VARCHAR(200),
    Description TEXT,
    PrixUnitaire DECIMAL(10, 2),
   FournisseurID INT,
   FOREIGN KEY(FournisseurID)  REFERENCES Fournisseurs(FournisseurID)
)";
$connexion->exec($produit);

 // Modification de la création de la table vente pour intégrer l'identifiant de l'employe
$vente = "CREATE TABLE Ventes (
    VenteID INT PRIMARY KEY,
    DateVente DATE,
    ClientID INT,
    ProduitID INT,
    EmployeID INT,
    FOREIGN KEY(ClientID) REFERENCES Clients(ClientID),
    FOREIGN KEY(ProduitID)  REFERENCES Produits(ProduitID),
    FOREIGN KEY(EmployeID) REFERENCES Employes(EmployeID),
    QuantiteVendue INT,
    MontantTotal DECIMAL(10, 2)
)";
$connexion->exec($vente);
echo "Creation Vente table reussi";

/*

/*$connexion->exec($client);
$connexion->exec($fournisseur);
$connexion->exec($employer);
$connexion->exec($produit);
$connexion->exec($vente);
echo "Bien ajoutes";
*/
//==================================================================



    // $insertion = "INSERT INTO Client(Nom, Postnom,Email,Produit)
    //                 VALUES ('$nom','$postnom','$email','$produit'),
    //                         ('$nom1','$postnom1','$email1','$produit1'),
    //                         ('$nom2','$postnom2','$email2','$produit2'),
    //                         ('$nom3','$postnom4','$email4','$produit4'),
    //                         ('$nom4','$postnom4','$email4','$produit4')";
    // $connexion->exec($insertion);
    // echo "Data added";

    // CREATION DB
    // $connexion->exec("CREATE DATABASE firstDB");
    // echo"BD created";

    // CREATION TABLE

   /* $sql = "CREATE TABLE Visiteurs(
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nom VARCHAR(50),
            prenom VARCHAR(50),
            email VARCHAR(50)
            )";
    $connexion->exec($sql);
    echo"Table created";

*/

/*
$insertion = "INSERT INTO Visiteurs(nom,prenom,email)
                VALUES('Shadrack','Bauma','shadrack.bauma@gmail.com'),
                        ('Jonas','Nsii','jonauma@gmail.com'),
                        ('$nom','$prenom','$email')";
$connexion->exec($insertion);
echo"Bien ajoutes";
*/
    } catch (PDOException $ex) {
        echo "Echec de connexion". $ex->getMessage();
    }

    

    ?>
</body>
</html>