<?php
	require_once('classeConnexion.php'); 
	// CLASSE GALERIE 
	/** Attributs de la classe "Galerie" **/
	class Home {
		

		/** Constructeur ... **/
		public function __construct(){
			//récupération du nombre d'arguments
			$nb= func_num_args();
			// S'il n'y a pas de paramètre, on initialise les variables à une valeur nulle
			
		}
		
		
		// avisglobal
		public function avisglobal(){
			$list = array();

			$requete = Connexion::Connect()->query('SELECT q.libelle AS question, COUNT(dq.Reponse) AS score FROM questionnaire q,  detailquestionnement dq WHERE q.idQuestionnaire = dq.idQuestionnaire AND dq.Reponse = 1 GROUP BY q.idQuestionnaire ORDER BY score DESC');

			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee) {
				$list[] = $donnee;
			}
			return $list;
		}
     public function Region(){
			$list = array();

			$requete = Connexion::Connect()->query('SELECT * from region');

			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee) {
				$list[] = $donnee;
			}
			return $list;
		}
     public function Station(){
			$list = array();

			$requete = Connexion::Connect()->query('SELECT * from station');

			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee) {
				$list[] = $donnee;
			}
			return $list;
		}
     // avisglobal
		public function clientIentifies(){

			$requete = Connexion::Connect()->query('SELECT COUNT(*) FROM utilisateur WHERE idUser!=1;');

			
			return $requete->fetchColumn();;
		}	
	   public function clientAnonymes(){

			$requete = Connexion::Connect()->query('SELECT COUNT(*) FROM `questionnement` WHERE idUser=1;');

			
			return $requete->fetchColumn();;
		}	
	   public function TotalAvis(){

			$requete = Connexion::Connect()->query('SELECT COUNT(*) FROM `questionnement`');

			
			return $requete->fetchColumn();;
		}	
	
	// avisglobal
		public function lesMieuxNotees(){
			$list = array();

			$requete = Connexion::Connect()->query('SELECT s.libelle AS station, r.libelle AS region, COUNT(dq.Reponse) AS score FROM   detailquestionnement dq, station s, region r, questionnement q WHERE  q.idStation = s.idStation AND  s.idRegion = r.idRegion AND q.idQuestionnement = dq.idQuestionnement AND dq.Reponse = 1 GROUP BY s.idStation ORDER BY score DESC');

			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee) {
				$list[] = $donnee;
			}
			return $list;
		}	
	public function ScoreRegionOUI($code){
			$list = array();

			$requete = Connexion::Connect()->query('SELECT qu.libelle AS question,  COUNT(dq.Reponse) AS score
FROM questionnement q, questionnaire qu, detailquestionnement dq, station s, region r WHERE q.idQuestionnement=dq.idQuestionnement 
AND dq.idQuestionnaire=qu.idQuestionnaire 
AND s.idStation=q.idStation 
AND q.idRegion=r.idRegion 
AND r.idRegion=s.idRegion 
AND r.idRegion='.$code.'
AND dq.Reponse=1
GROUP BY question
ORDER BY score DESC');

			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee) {
				$list[] = $donnee;
			}
			return $list;
		}	
	public function ScoreRegionNON($code){
			$list = array();

			$requete = Connexion::Connect()->query('SELECT qu.libelle AS question,  COUNT(dq.Reponse) AS score
FROM questionnement q, questionnaire qu, detailquestionnement dq, station s, region r WHERE q.idQuestionnement=dq.idQuestionnement 
AND dq.idQuestionnaire=qu.idQuestionnaire 
AND s.idStation=q.idStation 
AND q.idRegion=r.idRegion 
AND r.idRegion=s.idRegion 
AND r.idRegion= = '.$code.'
AND dq.Reponse=0
GROUP BY question
ORDER BY score DESC');

			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee) {
				$list[] = $donnee;
			}
			return $list;
		}	
	public function ScoreStationOUI($code){
			$list = array();

			$requete = Connexion::Connect()->query('SELECT qu.libelle AS question,  COUNT(dq.Reponse) AS score
                                                    FROM questionnement q, questionnaire qu, detailquestionnement dq, station s, region r WHERE q.idQuestionnement=dq.idQuestionnement 
                                                    AND dq.idQuestionnaire=qu.idQuestionnaire 
                                                    AND s.idStation=q.idStation 
                                                    AND q.idRegion=r.idRegion 
                                                    AND r.idRegion=s.idRegion 
                                                    AND s.idStation='.$code.'
                                                    AND dq.Reponse=1
                                                    GROUP BY question
                                                    ORDER BY score DESC');

			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee) {
				$list[] = $donnee;
			}
			return $list;
		}	
	public function ScoreStationNON($code){
			$list = array();

			$requete = Connexion::Connect()->query('SELECT qu.libelle AS question,  COUNT(dq.Reponse) AS score
                                                    FROM questionnement q, questionnaire qu, detailquestionnement dq, station s, region r WHERE q.idQuestionnement=dq.idQuestionnement 
                                                    AND dq.idQuestionnaire=qu.idQuestionnaire 
                                                    AND s.idStation=q.idStation 
                                                    AND q.idRegion=r.idRegion 
                                                    AND r.idRegion=s.idRegion 
                                                    AND s.idStation='.$code.'
                                                    AND dq.Reponse=0
                                                    GROUP BY question
                                                    ORDER BY score DESC');

			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee) {
				$list[] = $donnee;
			}
			return $list;
		}	
	public function ScoreOUI(){
			$list = array();

			$requete = Connexion::Connect()->query('SELECT qu.libelle AS question,  COUNT(dq.Reponse) AS score
                                                    FROM questionnement q, questionnaire qu, detailquestionnement dq, station s, region r WHERE q.idQuestionnement=dq.idQuestionnement 
                                                    AND dq.idQuestionnaire=qu.idQuestionnaire 
                                                    AND s.idStation=q.idStation 
                                                    AND q.idRegion=r.idRegion 
                                                    AND r.idRegion=s.idRegion 
                                                    AND dq.Reponse=1
                                                    GROUP BY question
                                                    ORDER BY score DESC');

			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee) {
				$list[] = $donnee;
			}
			return $list;
		}	
	public function ScoreNON(){
			$list = array();

			$requete = Connexion::Connect()->query('SELECT qu.libelle AS question,  COUNT(dq.Reponse) AS score
                                                     FROM questionnement q, questionnaire qu, detailquestionnement dq, station s, region r WHERE q.idQuestionnement=dq.idQuestionnement 
                                                     AND dq.idQuestionnaire=qu.idQuestionnaire 
                                                     AND s.idStation=q.idStation 
                                                     AND q.idRegion=r.idRegion 
                                                     AND r.idRegion=s.idRegion 
                                                     AND dq.Reponse=0
                                                     GROUP BY question
                                                     ORDER BY score DESC');

			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee) {
				$list[] = $donnee;
			}
			return $list;
		}	
	}
?>