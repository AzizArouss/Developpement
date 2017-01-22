/*1*/
var Vehicule = {
	type : 'Tank',
	marque : 'Rheinmetall',
	conso : '150',
	couleur : 'Noir',
	affiche : function(){console.log('type : '+this.type+' marque : '+this.marque);}
};

Vehicule.affiche();

/*2*/
var Tank = Object.create(Vehicule);
console.log(Tank.marque);

Tank.outil = 'Kit de soin';
console.log(Tank.outil);

Tank.couleur = 'Desert';
console.log(Tank.couleur);

Vehicule.couleur = 'Vert';
console.log(Tank.couleur);

/*3*/
function calculPerimetre(rayon){
	return 2 * Math.PI * rayon;
}

/*3.1*/
calculPerimetre(1);
console.log(calculPerimetre(1));

var cercle = {
	pi : Math.PI,
	perimetre : function(rayon){
		console.log(2*this.pi*rayon);
	},
	surface : function(rayon){
		console.log(this.pi*Math.pow(rayon, 2));
	}
}

var c1 = Object.create(cercle);
	c1.perimetre(16);
	c1.surface(16);

/*4*/
var Vehicule = {
	initVehicule : function(marque, coul, type){
		this.marque = marque || 'renault';
		this.couleur = coul,
		this.type = type
	}
};

var Voiture = Object.create(Vehicule);
	Voiture.initVehicule('Peugeot', 'Rouge', 'Tourisme');
	console.log(Voiture.couleur);

/*5*/
var Vehicule = function(marque, couleur){
	this.marque = marque;
	this.coul = couleur;
}

var Voiture = new Vehicule('Alpha', 'Noir');
console.log(Voiture.marque); 

/*6*/
var Vehicule = function(marque, coul){
	this.marque = marque;
	this.couleur = coul;
}

Vehicule.prototype.affiche = function(){
	console.log('marque : '+this.marque+' couleur : '+this.couleur);
}

Voiture = new Vehicule('Mercedes', 'Jaune');
Voiture.affiche();

/*7*/

calculPerimetre(1);
console.log(calculPerimetre(1));

var cercle = {
	pi : Math.PI,
	perimetre : function(rayon){
		console.log(2*this.pi*rayon);
	},
	surface : function(rayon){
		console.log(this.pi*Math.pow(rayon, 2));
	}
}

var c1 = Object.create(cercle);
	c1.perimetre(16);
	c1.surface(16);

/*8*/

    //1/ Définir un nouveua modele qui s'appelle propriétaire
    //2/ Ajouter à Vehicule un propriétaire
    //3/ Créer un nouvel objet ma_voiture
    //4/ Affoicher le prenom et le nom du propriétaire de ma_voiture

var Vehicule = function(marque, couleur, proprietaire){
	this.marque = marque,
	this.couleur = couleur,
	this.proprietaire = proprietaire
}

var Proprietaire = function(prenom, nom){
	this.prenom = prenom,
	this.nom = nom
}

var ma_voiture = new Vehicule('Skorpion', 'Noir', new Proprietaire('Aziz', 'Arouss'));
console.log(ma_voiture.proprietaire.prenom); // Aziz
