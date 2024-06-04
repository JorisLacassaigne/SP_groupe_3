<?php


class CommandeModele extends Modele
{


    private $parametre = []; //$_REQUEST

    public function __construct($parametre){

        $this->parametre = $parametre;
    }

    public function getListeCommandes(){

        $sql = 'SELECT * FROM commande';

        $idRequete = $this->executeRequete($sql);

        if($idRequete->rowCount() > 0){
            // Création du tableau d'objets
            while($uneCommande = $idRequete->fetch(PDO::FETCH_ASSOC)){

                $listeCommandes[] = new CommandeTable($uneCommande);
            }

            return $listeCommandes;

        }else{

            return null;
        }

    }

    public function getUneCommande(){

        $sql = 'SELECT * FROM client WHERE codec = ?';

        $idRequete = $this->executeRequete($sql, [
            $this->parametre['codec'],
        ]);

        $laCommande = new CommandeTable($idRequete->fetch(PDO::FETCH_ASSOC));

        return $laCommande;

    }

    public function addCommande(CommandeTable $uneCommande){

        $sql='INSERT INTO client (nom, adresse, cp, ville, telephone) VALUES (?,?,?,?,?,?,?,?)';

        $idRequete = $this->executeRequete($sql, [
            $uneCommande->getNumero(),
            $uneCommande->getcodev(),
            $uneCommande->getCodec(),
            $uneCommande->getDateLivraison(),
            $uneCommande->getDateCommande(),
            $uneCommande->getTotalHt(),
            $uneCommande->getTotalTva(),
            $uneCommande->getEtat(),
        ]);

        if($idRequete){
            ClientTable::setMessageSucces("Ajout effectué avec succès.");
        }
    }


    public function editCommande(CommandeTable $uneCommande){

        $sql = 'UPDATE commande SET nom = ?, adresse = ?, cp = ? , ville = ?, telephone = ? WHERE codec = ? ';

        $idRequete = $this->executeRequete($sql, [
            $uneCommande->getNumero(),
            $uneCommande->getcodev(),
            $uneCommande->getCodec(),
            $uneCommande->getDateLivraison(),
            $uneCommande->getDateCommande(),
            $uneCommande->getTotalHt(),
            $uneCommande->getTotalTva(),
            $uneCommande->getEtat(),
        ]);

        if($idRequete){
            ClientTable::setMessageSucces("Modification effectuée avec succès.");
        }

    }

    public function suppressionPossible(){

        $sql = 'SELECT COUNT(codec) AS nombre FROM commande WHERE codec = ?';

        $idRequete = $this->executeRequete($sql, [
            $this->parametre['codec'],
        ]);

        $row = $idRequete->fetch(PDO::FETCH_ASSOC);

        if($row['nombre'] > 0){

            return false;

        }else{

            return true;
        }
    }


    public function deleteCommande(){

        $sql = 'DELETE FROM client WHERE codec = ?';

        $idRequete = $this->executeRequete($sql, [
            $this->parametre['codec'],
        ]);

        if($idRequete){

            ClientTable::setMessageSucces("Suppression effectuée avec succès.");

        }
    }

    public function stat01(CommandeTable $enCours){
        $sql ='SELECT SUM(total_ht) AS st01 FROM commande WHERE codec = ?';
        $idRequete = $this->executeRequete($sql, [
            $this->parametre['codec'],
        ]);
        $row= $idRequete-> fetch(PDO::FETCH_ASSOC);
        if ($row['st01'] != null){
            $enCours->setStat01($row['st01']);

        }else{
            $enCours->setStat01(0);
        }
    }


}