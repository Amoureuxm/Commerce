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

$client = "CREATE TABLE Clients(
    ClientID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Nom VARCHAR(50),
    Postnom VARCHAR(50),
    Adresse VARCHAR(255),
    Email VARCHAR(30),
    NumeroPhone VARCHAR(15))";
$connexion->exec($client);
echo "Creation Client table reussi"."<br>";

$employer = "CREATE TABLE Employers(
EmployerID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Nom VARCHAR(50),
Postnom VARCHAR(50),
Adresse VARCHAR(255),
Email VARCHAR(30),
NumeroPhone VARCHAR(15))";
$connexion->exec($employer);
echo "Creation Employer table reussi"."<br>";


$fournisseur = "CREATE TABLE Fournisseurs(
FournisseurID INT AUTO_INCREMENT PRIMARY KEY,
NomFournisseur VARCHAR(50),
Postnom VARCHAR(50),
Adresse VARCHAR(255),
Email VARCHAR(30),
NumeroPhone VARCHAR(50))";
$connexion->exec($fournisseur);
echo "Creation Fournisseur table reussi"."<br>";

$produit = "CREATE TABLE Produits(
ProduitID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Nom VARCHAR(70),
Details VARCHAR(255),
Prix DECIMAL(10,2),
FournisseurID INT,
FOREIGN KEY (fournisseurID) REFERENCES Fournisseurs(fournisseurID)
)";
$connexion->exec($produit);
echo "Creation Produit table reussi";


$vente = "CREATE TABLE Ventes(
VenteID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Nom VARCHAR(50),
Postnom VARCHAR(50),
Adresse VARCHAR(255),
Email VARCHAR(30),
NumeroPhone VARCHAR(50))";
$connexion->exec($client);
echo "Creation Vente table reussi";
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