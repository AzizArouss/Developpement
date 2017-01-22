<?php

abstract class Produits {
	protected $produits;
	protected $poids;
	protected $qté;
	protected $prix;
	
	abstract protected function getValue();	
	abstract protected function affiche();

	public function __construct($produit, $poids, $prix, $qte){
		$this->produit = $produit;
		$this->poids = $poids;
		$this->prix = $prix;
		$this->qte = $qte;
	}
}

Class fromages extends Produits{

	protected $type;

	const LAIT_CRU = "cru";
	const LAIT_CUIT = "cuit";

	function getValue(){
		return $this->qte.' '.$this->produit.'(s) cout(ent) : '.$this->qte*$this->poids;
	}

	function affiche(){
		return $this->produit.' est un fromage à pate : '.self::LAIT_CRU;
	}
}

Class Boissons extends Produits{
protected $type;
protected $vendeur;

const BOISSON_GAZEUSE = "gazeuse";
const BOISSON_PLATE = "plate";

	public function __construct($produits, $poids, $prix, $qte,$type){
		PARENT::__construct($produits, $poids, $prix, $qte);
		$this->type = $type;
		$this->vendeur = new vendeurs();

	}

	function getValue(){
		return $this->qte.' '.$this->produit.'(s) cout(ent) : '.$this->qte*$this->poids*1.2;
	}
	
	function affiche(){
		return $this->produit.' est une boisson : '.$this->type;
	}
	
	function vendeur(){
	return $this->vendeur->affiche();
	}
}

Class Vendeurs{
	protected $vendeur;
	protected $adresse;
	protected $cp;
	protected $pays;

	function __construct(){
		$this->vendeur = 'Nestlé';
		$this->adresse = 'Rue de la vache';
		$this->cp = '99900';
		$this->pays = 'Suisse';
	}

	function affiche(){
		return $this->vendeur.' est au '.$this->adresse.', '.$this->cp.' '.$this->pays;
	}

}

?>