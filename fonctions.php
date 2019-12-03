<?php 

	function verif_panier($ref_prod){

		//On initialise la valleur de retour
		$present = false;

		if(count($_SESSION['panier']['idP']) > 0  AND array_search($ref_prod, $_SESSION['panier']['idP']) !== false){

			$present = true;
		}

		return $present;
	} 

	function ajout($produit){

		if(!verif_panier($prod['idP'])){

			array_push($_SESSION['panier']['idP'], $produit['idP']);
			array_push($_SESSION['panier']['marque'], $produit['marque']);
			array_push($_SESSION['panier']['categorie'], $produit['categorie']);
			array_push($_SESSION['panier']['qte'], $produit['qte']);
			array_push($_SESSION['panier']['prix'], $produit['prix']);
		}else{

			modif_qte($produit['idP'],$produit['qte']);
		}
	}

	function modif_qte($ref_prod,$qte){

		$nb_prod = count($_SESSION['panier']['idP']);

		$ajoute = false;

		for($i = 0 ; $i< $nb_prod ; $i++){

			if($ref_prod == $_SESSION['panier']['id']['i']){

				$_SESSION['panier']['qte'][$i] = $qte;
            	$ajoute = true;	
			}
		}

		return $ajoute;
	}

	function supprime_prod($ref_prod){

		$suppression = false ;

		/* création d'un tableau temporaire de stockage des articles */
		$panier_tmp = array('idP' =>array() , 'marque' => array() , 'categorie' => array() ,
		'qte' => array() , 'prix' => array());
		#Comptage des produits dans le panier
		$nb_prod = count($_SESSION['panier']['idP']);
		//Transfert du panier dans le panier temp

		for ($i = 0; $i < $nb_prod ; $i++) { 
			
			#On transfere tout sauf l'id à supprimer
			if($_SESSION['panier']['idP'][$id] != $ref_prod){

				array_push($panier_tmp['idP'],$_SESSION['panier']['idP'][$i]);
  				array_push($panier_tmp['marque'],$_SESSION['panier']['marque'][$i]);
           		array_push($panier_tmp['categorie'],$_SESSION['panier']['categorie'][$i]);
            	array_push($panier_tmp['qte'],$_SESSION['panier']['qte'][$i]);
            	array_push($panier_tmp['prix'],$_SESSION['panier']['prix'][$i]);

			}
		}

		//Une fois le transfert terminé on ré-initialise le panier
		$_SESSION['panier'] = $panier_tmp;

		#On supprime le panier temporaire
		unset($panier_tmp);
		$suppression = true;
		return $suppression ;
	}

	function montant_panier(){

		$montant = 0;

		$nb_prod = count($_SESSION['panier']['idP']);

		for ($i=0; $i < $nb_prod ; $i++) { 
			
			$montant += $_SESSION['panier']['qte'][$i] * $_SESSION['panier']['prix'][$i];
		}

		return $montant;
	}

	function vider_panier(){

		$vide = false;
		unset($_SESSION['panier']);
		if(!isset($_SESSION['panier'])){
			$vide = true;
		}
		return $vide;
	}


?>