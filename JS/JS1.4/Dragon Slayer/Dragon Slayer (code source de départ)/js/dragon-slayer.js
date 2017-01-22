'use strict';   // Mode strict du JavaScript

/*************************************************************************************************/
/* **************************************** DONNEES JEU **************************************** */
/*************************************************************************************************/

//ARMOR
const ARMOR_COPPER = 1;
const ARMOR_IRON = 2;
const ARMOR_MAGICAL = 3;

//LEVEL
const LEVEL_EASY = 1;
const LEVEL_NORMAL = 2;
const LEVEL_HARD = 3;

//SWORD
const SWORD_WOOD = 1;
const SWORD_STEEL = 2;
const SWORD_EXCALIBUR = 3;

//INITIALISATION DU JEU
// 1 > Niveau de difficulté ?
//		> Nombre de points de vie
// 2 > L'armure ?
// 3 > L'arme ?

//LE JEU EN LUI MEME
// 1 > Tant que 1 est en vie, alors on recommencer a se battre
// 2 > Quand il y a 1 mort, affiche le gagnant

var game;

/*************************************************************************************************/
/* *************************************** FONCTIONS JEU *************************************** */
/*************************************************************************************************/
	
//DEMARRER LE JEU
function startGame() {
//INITIALISATION
	console.clear();
	initializeGame();

//JEUX
	showGameState();
	gameLoop();
	
//AFFICHAGE RESULTAT
	showGameWinner();
}

/*************************************************************************************************/
/* ************************************** CODE PRINCIPAL *************************************** */
/*************************************************************************************************/

startGame();

function initializeGame() {
	game = {};											//new Object();
	game.round = 1;
	game.difficulty = requestInteger("Niveau ?", 1, 3);
		console.log("Niveau");
	switch(game.difficulty){
		case LEVEL_EASY:
		game.hpDragon = 100;
		game.hpPlayer = 150;
		break;

		case LEVEL_NORMAL:
		game.hpDragon = 150;
		game.hpPlayer = 150;
		break;

		case LEVEL_HARD:
		game.hpDragon = 150;
		game.hpPlayer = 100;
		break;
	}
	console.log("Difficulty : "+ game.difficulty);
	game.armor = requestInteger("Armure ?", 1, 3);
		console.log("Armure");
	switch(game.armor){
		case ARMOR_COPPER:
		game.armorRatio = 1;
		break;

		case  ARMOR_IRON:
		game.armorRatio = 1.25;
		break;

		case ARMOR_MAGICAL:
		game.armorRatio = 2;
		break;
	}
	console.log("Armor : " + game.armorRatio);
	game.sword = requestInteger("Epee ?", 1, 3);
		console.log("Epee");
	switch(game.sword){
		case SWORD_WOOD:
		game.swordRatio = 0.5;
		break;

		case SWORD_STEEL:
		game.swordRatio = 1;
		break;

		case SWORD_EXCALIBUR:
		game.swordRatio = 2;
		break;
	}
	console.log("Sword : "+ game.swordRatio);
	console.log("Initialize");
}

function showGameState() {
	console.log("PV Dragon : "+ game.hpDragon + "PV Joueur : " + game.hpPlayer);
	console.log("showgamestate");
}

function gameLoop() {
	console.log("gameloop");
	var damagePoint, dragonSpeed, playerSpeed;
	while (game.hpPlayer > 0 && game.hpDragon > 0) {
	dragonSpeed = getRandomInteger(10,20);
	playerSpeed = getRandomInteger(10,20);
	console.log("dragonSpeed : "+ dragonSpeed);
	console.log("playerSpeed : "+ playerSpeed);
		if (dragonSpeed > playerSpeed) {
			console.log("Dragon gagne le tour");
			damagePoint = 15;
			game.hpPlayer -= damagePoint;
		}
		else {
			console.log("Player gagne le tour");
			damagePoint = 15;
			game.hpDragon -= damagePoint;
		}
		game.round++;
	}
}

function computeDamageDragonPoint() {
	//Dommages au Player
	var damagePoint;
	if (game.difficulty == LEVEL_EASY) {
		damagePoint = getRandomInteger(10,20);
	}
	else {
		damagePoint = getRandomInteger(30,40);
	}
	return Math.round(damagePoint / game.armorRatio);
}

function computeDamagePlayerPoint() {
	//Dommages au Dragon
	var damagePoint;
	switch(game.difficulty){
		case LEVEL_EASY:
		damagePoint = getRandomInteger(25, 30);
		break;

		case LEVEL_NORMAL:
		damagePoint = getRandomInteger(15, 20);
		break;

		case LEVEL_HARD:
		damagePoint = getRandomInteger(5, 10);
		break;
	}
	return Math.floor(damagePoint * game.swordRatio);
}

function showGameWinner() {
	if (game.hpDragon <= 0) {
		document.write("<h2>Dragon KO</h2>")
	}
	else {
		document.write("<h2>Player KO</h2>")
	}
	console.log("showgamewinner");
}