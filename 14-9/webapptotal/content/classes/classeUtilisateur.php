<?php
	require_once('classeConnexion.php'); 
	// CLASSE UTILISATEUR 
	/** Attributs de la classe "Utilisateur" **/
	class Utilisateur {
		private $idUtilisateur;
		private $nom;
		private $prenom;
		private $email;
		private $telephone;
		private $dateInscription;
		private $pass;

		/** Constructeur ... **/
		public function __construct(){
			//récupération du nombre d'arguments
			$nb= func_num_args();
			// S'il n'y a pas de paramètre, on initialise les variables à une valeur nulle
			if ($nb == 0) {
				$this->idUtilisateur= "";
				$this->nom= "";
				$this->prenom= "";
				$this->email= "";
				$this->telephone= "";
				$this->dateInscription= "";
				$this->pass= "";
			}
			/*Sinon s'il y a des paramètres on donne aux variables les valeurs des paramètres
	La fonction func_get_arg() recupère la valeur de l'argument à la position qui lui est donnée en paramètre*/
			if ($nb != 0) {
				$this->idUtilisateur= func_get_arg(0);
				$this->nom= func_get_arg(1);
				$this->prenom= func_get_arg(2);
				$this->email= func_get_arg(3);
				$this->telephone= func_get_arg(4);
				$this->dateInscription= func_get_arg(5);
				$this->pass= func_get_arg(6);
			}
		}
		/** Getter et Setter de l'attribut "idUtilisateur" **/
		public function getIdUtilisateur(){
			return $this->idUtilisateur;
		}
		public function setIdUtilisateur($idUtilisateur){
			$this->idUtilisateur = $idUtilisateur;
		}
		/** Getter et Setter de l'attribut "nom" **/
		public function getNom(){
			return $this->nom;
		}
		public function setNom($nom){
			$this->nom = $nom;
		}
		/** Getter et Setter de l'attribut "prenom" **/
		public function getPrenom(){
			return $this->prenom;
		}
		public function setPrenom($prenom){
			$this->prenom = $prenom;
		}
		/** Getter et Setter de l'attribut "email" **/
		public function getEmail(){
			return $this->email;
		}
		public function setEmail($email){
			$this->email = $email;
		}
		/** Getter et Setter de l'attribut "telephone" **/
		public function getTelephone(){
			return $this->telephone;
		}
		public function setTelephone($telephone){
			$this->telephone = $telephone;
		}
		/** Getter et Setter de l'attribut "adresse" **/
		public function getDateInscription(){
			return $this->dateInscription;
		}
		public function setDateInscription($adresse){
			$this->dateInscription = $adresse;
		}
		
		/** Getter et Setter de l'attribut "adresse" **/
		public function getPass(){
			return $this->pass;
		}
		public function setPass($adresse){
			$this->pass = $adresse;
		}
		
		//Recherche d'un élément de la table Utilisateur**/
		public function rechercheUtilisateur($id){
			$list = array();

			$requete = Connexion::Connect()->query("SELECT * FROM user WHERE id = \"$id\" ");

			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee){
				$list[] = $donnee;
			}
			return $list;
		}
		// Insertion des valeurs 
		/** Fonctions CRUD **/
		public function addUtilisateur() {
			$list = $this->rechercheUtilisateur($this->getIdUtilisateur());
			$res = -1;
			/**Si aucun élément n'est trouvé**/
			if(count($list) == 0){ /**Preparation de la requete d'insertion**/
				$requete = Connexion::Connect()->prepare('INSERT INTO user(nom, prenom, email, telephone, dateInscription, pass) VALUES (?, ?, ?, ?, ?, ?)');
				/**La fonction bindValue associe une valeur à un paramètre**
	**Execution de la requete
	**On retourne le resultat de la requete
	**/
				$requete->bindValue(1, $this->getNom());
				$requete->bindValue(2, $this->getPrenom());
				$requete->bindValue(3, $this->getEmail());
				$requete->bindValue(4, $this->getTelephone());
				$requete->bindValue(5, date('d-m-y'));
				$requete->bindValue(6, $this->getPass());
				$res = $requete->execute();
			}
			return($res);
		}
		// Modification des valeurs
		public function updateUtilisateur() {
			$list = $this->rechercheUtilisateur($this->getIdUtilisateur());
			$res = -1;
			/**Si un élément est trouvé**/
			if(count($list) != 0){ /**Preparation de la requete de mise à jour**/
				$requete = Connexion::Connect()->prepare('UPDATE user SET nom = ?, prenom = ?, email = ?, telephone = ?, dateInscription = ? , pass = ? WHERE id = ? ');
				/**La fonction bindValue associe une valeur à un paramètre**
	**Execution de la requete
	**On retourne le resultat de la requete
	**/
				$requete->bindValue(1, $this->getNom());
				$requete->bindValue(2, $this->getPrenom());
				$requete->bindValue(3, $this->getEmail());
				$requete->bindValue(4, $this->getTelephone());
				$requete->bindValue(5, $this->getDateInscription());
				$requete->bindValue(6, $this->getPass());
				$requete->bindValue(7, $this->getIdUtilisateur());
				$res = $requete->execute(); 
			}
			return($res);
		}
		// Suppression des valeurs
		public function deleteUtilisateur($code) {
			$list = $this->rechercheUtilisateur($code);
			$res = -1;
			/**Si un élément est trouvé**/
			if(count($list) != 0){ /**Preparation de la requete de suppression**/
				$requete = Connexion::Connect()->prepare('DELETE FROM user WHERE id = ?');
				/**La fonction bindValue associe une valeur à un paramètre**
	**Execution de la requete
	**On retourne le resultat de la requete
	**/
				$requete->bindValue(1, $code);
				$res = $requete->execute();
			}
			return($res);
		}
		// Liste des utilisateurs 
		public function listUtilisateur(){
			$list = array();

			$requete = Connexion::Connect()->query('SELECT * FROM user');

			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee) {
				if($donnee['id'] != 0)
					$list[] = $donnee;
			}
			return $list;
		}	
	}
?>