<?php


class CommandeModele extends Modele
{


    private $parametre = []; //$_REQUEST

    public function __construct($parametre){

        $this->parametre = $parametre;
    }

    public function getListeCommandes(){

        $sql = 'SELECT commande.*, client.nom AS nom_client, client.prenom AS prenom_client, vendeur.nom AS nom_vendeur, vendeur.prenom AS prenom_vendeur
FROM commande
JOIN client ON commande.codec = client.codec
JOIN vendeur ON commande.codev = vendeur.codev';

        $idRequete = $this->executeRequete($sql);

        if($idRequete->rowCount() > 0){
            // Création du tableau d'objets
            while($uneCommande = $idRequete->fetch(PDO::FETCH_ASSOC)){

                $commande = new CommandeTable($uneCommande);

                $sqlClient = 'SELECT * FROM client WHERE codec = ?';
                $idRequeteClient = $this->executeRequete($sqlClient, [
                    $commande->getCodec()
                ]);
                $client = new ClientTable($idRequeteClient->fetch(PDO::FETCH_ASSOC));

                $sqlVendeur = 'SELECT * FROM vendeur WHERE codev = ?';
                $idRequeteVendeur = $this->executeRequete($sqlVendeur, [
                    $commande->getCodev()
                ]);
                $vendeur = new VendeurTable($idRequeteVendeur->fetch(PDO::FETCH_ASSOC));

                $listeCommandes[] = ["commande"=>$commande, "client"=>$client, "vendeur"=>$vendeur];


            }

            return $listeCommandes;

        }else{

            return null;
        }

    }

    public function getUneCommande() {

        $sql = 'SELECT commande.*,client.nom AS nom_client, client.prenom AS prenom_client, vendeur.nom AS nom_vendeur, vendeur.prenom AS prenom_vendeur
FROM commande
JOIN client ON commande.codec = client.codec
JOIN vendeur ON commande.codev = vendeur.codev
WHERE numero = ?';

        $idRequete = $this->executeRequete($sql, [
            $this->parametre['numero'],
        ]);

        if($idRequete->rowCount() > 0){
            // Création du tableau d'objets
            while($laCommande = $idRequete->fetch(PDO::FETCH_ASSOC)){

                $commande = new CommandeTable($laCommande);

                $sqlClient = 'SELECT * FROM client WHERE codec = ?';
                $idRequeteClient = $this->executeRequete($sqlClient, [
                    $commande->getCodec()
                ]);
                $client = new ClientTable($idRequeteClient->fetch(PDO::FETCH_ASSOC));

                $sqlVendeur = 'SELECT * FROM vendeur WHERE codev = ?';
                $idRequeteVendeur = $this->executeRequete($sqlVendeur, [
                    $commande->getCodev()
                ]);
                $vendeur = new VendeurTable($idRequeteVendeur->fetch(PDO::FETCH_ASSOC));

                $uneCommande = ["commande"=>$commande, "client"=>$client, "vendeur"=>$vendeur];

            }

            return $uneCommande;

        }else{

            return null;
        }

    }


//    public function addCommande(CommandeTable $uneCommande){
//
//        $sql='INSERT INTO client (nom, adresse, cp, ville, telephone) VALUES (?,?,?,?,?,?,?,?)';
//
//        $idRequete = $this->executeRequete($sql, [
//            $uneCommande->getNumero(),
//            $uneCommande->getCodev(),
//            $uneCommande->getCodec(),
//            $uneCommande->getDateLivraison(),
//            $uneCommande->getDateCommande(),
//            $uneCommande->getTotalHt(),
//            $uneCommande->getTotalTva(),
//            $uneCommande->getEtat(),
//        ]);
//
//        if($idRequete){
//            ClientTable::setMessageSucces("Ajout effectué avec succès.");
//        }
//    }


//    public function editCommande(CommandeTable $uneCommande){
//
//        $sql = 'UPDATE commande SET nom = ?, adresse = ?, cp = ? , ville = ?, telephone = ? WHERE codec = ? ';
//
//        $idRequete = $this->executeRequete($sql, [
//            $uneCommande->getNumero(),
//            $uneCommande->getCodev(),
//            $uneCommande->getCodec(),
//            $uneCommande->getDateLivraison(),
//            $uneCommande->getDateCommande(),
//            $uneCommande->getTotalHt(),
//            $uneCommande->getTotalTva(),
//            $uneCommande->getEtat(),
//        ]);
//
//        if($idRequete){
//            ClientTable::setMessageSucces("Modification effectuée avec succès.");
//        }
//
//    }

//    public function suppressionPossible(){
//
//        $sql = 'SELECT COUNT(codec) AS nombre FROM commande WHERE codec = ?';
//
//        $idRequete = $this->executeRequete($sql, [
//            $this->parametre['codec'],
//        ]);
//
//        $row = $idRequete->fetch(PDO::FETCH_ASSOC);
//
//        if($row['nombre'] > 0){
//
//            return false;
//
//        }else{
//
//            return true;
//        }
//    }


//    public function deleteCommande(){
//
//        $sql = 'DELETE FROM client WHERE codec = ?';
//
//        $idRequete = $this->executeRequete($sql, [
//            $this->parametre['codec'],
//        ]);
//
//        if($idRequete){
//
//            ClientTable::setMessageSucces("Suppression effectuée avec succès.");
//
//        }
//    }

//    public function stat01(CommandeTable $enCours){
//        $sql ='SELECT SUM(total_ht) AS st01 FROM commande WHERE codec = ?';
//        $idRequete = $this->executeRequete($sql, [
//            $this->parametre['codec'],
//        ]);
//        $row= $idRequete-> fetch(PDO::FETCH_ASSOC);
//        if ($row['st01'] != null){
//            $enCours->setStat01($row['st01']);
//
//        }else{
//            $enCours->setStat01(0);
//        }
//    }
//
//    public function stat02(CommandeTable $enCours)
//    {
//
//        $sql = 'SELECT ROUND(SUM(totalHT)/ (SELECT SUM(totalHT) FROM commande) *100, 2) AS st02 FROM `commande` WHERE codec = ?';
//
//        $idRequete = $this->executeRequete($sql, [
//            $enCours->getCodec(),
//        ]);
//
//        $row = $idRequete->fetch(PDO::FETCH_ASSOC);
//
//        if ($row['st02'] != null) {
//            $enCours->setStat02($row['st02']);
//        } else {
//            $enCours->setStat02(0);
//        }
//    }


}