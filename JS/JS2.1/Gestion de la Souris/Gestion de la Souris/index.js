'use strict';

/*VARIABLES*/

var button = document.getElementById("toggle-rectangle");
var rectangle = document.querySelector(".rectangle")

/*FONCTIONS*/

function onClickToggle() {
	console.log("onClickToggle");
	rectangle.classList.toggle('hide');
}

function onMouseIn() {
	console.log("onMouseIn");
	rectangle.classList.add('important');
}

function onMouseOut() {
	console.log("onMouseOut");
	rectangle.classList.remove('important');
}

function onMouseDoubleClick() {
	console.log("onMouseDoubleClick")
	rectangle.classList.add('good');
}

/*CODE*/

button.addEventListener('click', onClickToggle);
rectangle.addEventListener('mouseenter', onMouseIn);
rectangle.addEventListener('mouseout', onMouseOut);
rectangle.addEventListener('dblclick', onMouseDoubleClick);