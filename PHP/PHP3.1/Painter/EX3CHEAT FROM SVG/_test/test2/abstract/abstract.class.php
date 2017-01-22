<?php
abstract class Produits {

	protected $produit;
	protected $poids;
	protected $prix;
	protected $qte;

	abstract protected function getValue();	
	abstract protected function affiche();
	abstract protected function dessine(Dessine $dessin);


    // methode commune
    // enregistre le produit

	public function __construct($produit, $poids, $prix, $qte){
		$this->produit = $produit;
		$this->poids = $poids;
		$this->prix = $prix;
		$this->qte = $qte;
	}

    public function get_produit(){
    	return $this->produit;
    }
    public function get_poids(){
    	return $this->poids;
    }
	// ....


}

Class Fromages extends Produits{
	protected $type;

	const LAIT_CRU = "cru";
	const LAIT_CUIT = "cuit";
	const PRODUIT = 'Fromage';

	function getValue(){
		return $this->qte.' '.$this->produit.'(s) cout(ent) : '.$this->qte*$this->poids;
	}

	function affiche(){
		return $this->produit.' est un fromage à pate : '.self::LAIT_CRU;
	}
	function dessine(Dessine $dessin){
		// on constitue le nom de la methode
		$methode = 'dessine'.self::PRODUIT;
		return $dessin->$methode($this->produit);
	}


}
Class Boissons extends Produits{
	protected $type;
	protected $vendeur;

	const BOISSON_GAZEUSE = "gazeuse";
	const BOISSON_PLATE = "plate";
	const PRODUIT = 'Boisson';

	public function __construct($produit, $poids, $prix, $qte, $type){
		PARENT::__construct($produit, $poids, $prix, $qte);
		$this->type = $type;
		$this->vendeur = new Vendeurs();
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
	function dessine(Dessine $dessin){
		// on constitue le nom de la methode
		$methode = 'dessine'.self::PRODUIT;
		return $dessin->$methode($this->produit);
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

Class Dessine{
	function dessineFromage($nom){
		return 'Je dessine un Fromage - <b>'.$nom.'</b> qui pû';
	}
	function dessineBoisson($nom){
		return 'Je dessine une Boisson - <b>'.$nom.'</b>';
	}

}
