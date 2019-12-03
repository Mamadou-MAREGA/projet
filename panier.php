<?php 

	class Panier {

	    private $items = [];

	    public function __construct() {}

	    public function add($i) {
	        //$this->items[] = $i;
	        $_SESSION['panier'][] = $i;
	    }

	    public function count_item() {
	        return count($this->items);
	    }
	    
	    public function getItems() {
	        return $_SESSION['panier'];
	    }

	    public function delPanier($i){

	    	foreach ($_SESSION['panier'] as $key => $value) {
	    		
	    		if ($value['idP'] == $i) {
	    			
	    			unset($_SESSION['panier'][$key]);
	    		}
	    	}
	    }

	    public function total(){

	    	$total = 0;

		  	foreach ($_SESSION['panier'] as $product) {

		  		$total += $product['prix'];
		  	}

		  	return $total;
	    }

	    public function recalculer(){

	    	foreach ($_SESSION['panier'] as $product_id) {
	    	
	    		if (isset($_POST['panier']['qte'][$product_id])) {
	    			
	    			$_SESSION['panier']['idP'] = $_SESSION['panier']['qte'][$product_id]; 
	    		}
	    	}
	    }

	}