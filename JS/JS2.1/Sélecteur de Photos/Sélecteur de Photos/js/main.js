'use-strict'

var total = document.querySelectorAll("selected").length;
var photo = document.querySelectorAll("#photo-list li");
var index;

function selectedPhoto(){
	this.classList.toggle("selected");
	var selectedPhoto = document.querySelectorAll('.selected');

	console.log(selectedPhoto);

	total = document.querySelector('#total');
	total.textContent = selectedPhoto.length;
}

function clickEventPhoto(){
	for (var index = 0; index < photo.length; index++){
		photo[index].addEventListener("click", selectedPhoto);
		console.log("clickeventPhoto" +index);
	}
}

console.log("fin");

clickEventPhoto();

/*'use strict'

var total = document.querySelector("span");
var photo = document.querySelectorAll('#photo-list li');
var i;


function selectedPhoto(){
    console.log("selected");
    this.classList.toggle("selected");
    total.innerHTML = (document.querySelectorAll(".selected")).length;

}
function clickeventPhoto(){

    for (var i = 0; i < photo.length; i++)
    {
        photo[i].addEventListener('click', selectedPhoto);
      }
}

clickeventPhoto();*/