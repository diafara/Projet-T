<?php
	require_once('classeConnexion.php'); 
	// CLASSE questionnement 
	/** Attributs de la classe "AVIS" **/
	class Avis {
		private $idQuest;
		private $idUser;
		private $idStation;
		private $idRegion;
		private $Commentaire;
		private $longitude;
		private $latitude;
		private $DateQuestionnement;
		private $imei;
		private $photo;
		private $telephone;

		/** Constructeur ... **/
		public function __construct(){
			//récupération du nombre d'arguments
			$nb= func_num_args();
			// S'il n'y a pas de paramètre, on initialise les variables à une valeur nulle
			if ($nb == 0) {
				$this->idQuest= "";
				$this->idUser= "";
				$this->idStation= "";
				$this->idRegion= "";
				$this->Commentaire= "";
				$this->longitude= "";
				$this->latitude= "";
				$this->DateQuestionnement= "";
				$this->imei= "";
				$this->photo= "";
				$this->telephone= "";
			}
			/*Sinon s'il y a des paramètres on donne aux variables les valeurs des paramètres
	La fonction func_get_arg() recupère la valeur de l'argument à la position qui lui est donnée en paramètre*/
			if ($nb != 0) {
				$this->idQuest= func_get_arg(0);
				$this->idUser= func_get_arg(1);
				$this->idStation= func_get_arg(2);
				$this->idRegion= func_get_arg(3);
				$this->Commentaire= func_get_arg(4);
				$this->longitude= func_get_arg(5);
				$this->latitude= func_get_arg(6);
				$this->DateQuestionnement= func_get_arg(7);
				$this->imei= func_get_arg(8);
				$this->photo= func_get_arg(9);
				$this->telephone= func_get_arg(9);
			}
		}
		/** Getter et Setter de l'attribut "idquestionnement" **/
		public function getIdQuest(){
			return $this->idQuest;
		}
		public function setIdQuest($idQuest){
			$this->idQuest = $idQuest;
		}
		/** Getter et Setter de l'attribut "idquestionnement" **/
		public function getIdUser(){
			return $this->idUser;
		}
		public function setIdUser($idUser){
			$this->idUser = $idUser;
		}
		/** Getter et Setter de l'attribut "idquestionnement" **/
		public function getIdStation(){
			return $this->idStation;
		}
		public function setIdStation($idStation){
			$this->idStation = $idStation;
		}
		/** Getter et Setter de l'attribut "idquestionnement" **/
		public function getIdRegion(){
			return $this->idRegion;
		}
		public function setIdRegion($idRegion){
			$this->idRegion = $idRegion;
		}
		/** Getter et Setter de l'attribut "titrefr" **/
		public function getCommentaire(){
			return $this->Commentaire;
		}
		public function setCommentaire($Commentaire){
			$this->Commentaire = $Commentaire;
		}
		/** Getter et Setter de l'attribut "titreen" **/
		public function getLongitude(){
			return $this->longitude;
		}
		public function setLongitude($Longitude){
			$this->longitude = $Longitude;
		}
		/** Getter et Setter de l'attribut "contenufr" **/
		public function getLatitude(){
			return $this->latitude;
		}
		public function setLatitude($Latitude){
			$this->latitude = $Latitude;
		}
		/** Getter et Setter de l'attribut "contenuen" **/
		public function getDateQuestionnement(){
			return $this->DateQuestionnement;
		}
		public function setDateQuestionnement($DateQuestionnement){
			$this->DateQuestionnement = $DateQuestionnement;
		}
		/** Getter et Setter de l'attribut "datePublication" **/
		public function getImei(){
			return $this->imei;
		}
		public function setImei($Imei){
			$this->imei = $Imei;
		}
		/** Getter et Setter de l'attribut "images" **/
		public function getPhoto(){
			return $this->photo;
		}
		public function setPhoto($Photo){
			$this->photo = $Photo;
		}
		/** Getter et Setter de l'attribut "idSousmenu" **/
		public function getTelephone(){
			return $this->telephone;
		}
		public function setTelephone($Telephone){
			$this->telephone = $Telephone;
		}
		
		//Recherche d'un élément de la table questionnement**/
		public function rechercheQuestionnement($id){
			$list = array();

			$requete = Connexion::Connect()->query("SELECT r.libelle AS region, s.libelle AS station, q.DateQuestionnement, q.idUser, q.telephone,q.Commentaire, q.Commentaire, q.latitude, q.longitude, q.photo, COUNT(dq.idDetailQuestionnement) AS score, q.idQuestionnement FROM questionnement q, detailquestionnement dq,station s, region r WHERE q.idQuestionnement=dq.idQuestionnement AND s.idStation=q.idStation AND q.idRegion=r.idRegion AND dq.Reponse='1' AND q.idQuestionnement = \"$id\" ");

			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee){
				$list[] = $donnee;
			}
			return $list;
		}
		// Insertion des valeurs 
		/** Fonctions CRUD **/
		public function addQuestionnement() {
			$list = $this->rechercheQuestionnement($this->getIdQuest());
			$res = -1;
			/**Si aucun élément n'est trouvé**/
			if(count($list) == 0){ /**Preparation de la requete d'insertion**/
				$requete = Connexion::Connect()->prepare('INSERT INTO questionnement(idQuestionnement, idUser, idStation, idRegion, Commentaire, longitude, latitude, DateQuestionnement, imei, photo, telephone) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
				/**La fonction bindValue associe une valeur à un paramètre**
	**Execution de la requete
	**On retourne le resultat de la requete
	**/
				$requete->bindValue(1, $this->getIdQuest());
				$requete->bindValue(2, $this->getIdUser());
				$requete->bindValue(3, $this->getIdStation());
				$requete->bindValue(4, $this->getIdRegion());
				$requete->bindValue(5, $this->getCommentaire());
				$requete->bindValue(6, $this->getLongitude());
				$requete->bindValue(7, $this->getLatitude());
				$requete->bindValue(8, $this->getDateQuestionnment());
				$requete->bindValue(9, $this->getImei());
				$requete->bindValue(10, $this->getPhoto());
				$requete->bindValue(11, $this->getTelephone());
				$res = $requete->execute();
			}
			return($res);
		}
		// Modification des valeurs
		public function updateQuestionnement() {
			$list = $this->recherchequestionnement($this->getIdQuest());
			$res = -1;
			/**Si un élément est trouvé**/
			if(count($list) != 0){ /**Preparation de la requete de mise à jour**/
				$requete = Connexion::Connect()->prepare('UPDATE questionnement SET idUser = ?, idStation = ?, idRegion = ?, Commentaire = ?, longitude = ?, latitude = ?, DateQuestionnement = ?, imei = ?, photo = ?, telephone = ? WHERE idQuestionnement = ? ');
				/**La fonction bindValue associe une valeur à un paramètre**
	**Execution de la requete
	**On retourne le resultat de la requete
	**/
				
				$requete->bindValue(1, $this->getIdUser());
				$requete->bindValue(2, $this->getIdStation());
				$requete->bindValue(3, $this->getIdRegion());
				$requete->bindValue(4, $this->getCommentaire());
				$requete->bindValue(5, $this->getLongitude());
				$requete->bindValue(6, $this->getLatitude());
				$requete->bindValue(7, $this->getDateQuestionnment());
				$requete->bindValue(8, $this->getImei());
				$requete->bindValue(9, $this->getPhoto());
				$requete->bindValue(10, $this->getTelephone());
                $requete->bindValue(11, $this->getIdQuest());
				$res = $requete->execute(); 
			}
			return($res);
		}
		// Suppression des valeurs
		public function deleteQuestionnement($code) {
			$list = $this->rechercheQuestionnement($code);
			$res = -1;
			/**Si un élément est trouvé**/
			if(count($list) != 0){ /**Preparation de la requete de suppression**/
				$requete = Connexion::Connect()->prepare('DELETE FROM questionnement WHERE idQuestionnement = ?');
				/**La fonction bindValue associe une valeur à un paramètre**
	**Execution de la requete
	**On retourne le resultat de la requete
	**/
				$requete->bindValue(1, $code);
				$res = $requete->execute();
			}
			return($res);
		}
		// Liste des questionnements 
		public function listQuestionnement(){
			$list = array();

			$requete = Connexion::Connect()->query("select r.libelle as region, s.libelle as station, q.DateQuestionnement, q.telephone,q.Commentaire, COUNT(dq.idDetailQuestionnement) as score, q.idQuestionnement from questionnement q, detailquestionnement dq,station s, region r where q.idQuestionnement=dq.idQuestionnement and s.idStation=q.idStation and q.idRegion=r.idRegion and dq.Reponse='1' GROUP by q.idQuestionnement ORDER BY q.DateQuestionnement DESC");

			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee) {
				$list[] = $donnee;
			}
			return $list;
		}	
	public function DetailsQuestionnement($code){
			$list = array();

		
	$requete = Connexion::Connect()->prepare('SELECT  q.libelle AS question, dq.Reponse AS reponse 
FROM detailquestionnement dq, questionnement qu, questionnaire q
WHERE dq.idQuestionnement = qu.idQuestionnement
AND dq.idQuestionnaire = q.idQuestionnaire
AND qu.idQuestionnement = ?;');
				
				$requete->bindValue(1, $code);
				$res = $requete->execute();
			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee) {
				$list[] = $donnee;
			}
			return $list;
		}	
	public function Utilisateur($code){
			$list = array();

		
	$requete = Connexion::Connect()->prepare('SELECT * from utilisateur where idUser = ?;');
				
				$requete->bindValue(1, $code);
				$res = $requete->execute();
			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee) {
				$list[] = $donnee;
			}
			return $list;
		}	
	}
?>