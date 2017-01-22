"use strict";
 
/*************************************************************************************************/
/* ****************************************** DONNEES ****************************************** */
/*************************************************************************************************/
 
var contacts = JSON.parse(localStorage.getItem("users"));
if (contacts == null){contacts = [];}
 
/*************************************************************************************************/
/* ***************************************** FONCTIONS ***************************************** */
/*************************************************************************************************/
 
function plus() {
    hideAll();
    $("#form").toggleClass("hidden");
    $("select[name=civilites]").val("M.");
    $("input[name=prenom]").val("");
    $("input[name=nom]").val("");
    $("input[name=tel]").val("");  
}
 
function save() {
    var newContact = new Object();
    newContact.civilite = $("select[name=civilites]").val();
    newContact.prenom = $("input[name=prenom]").val();
    newContact.nom = $("input[name=nom]").val();
    newContact.tel = $("input[name=tel]").val();
    console.log("New contact : "+newContact);
    addToContacts(newContact);
    plus();
}
 
function addToContacts(newContact) {
    contacts.push(newContact);
    console.log(contacts);
    addToStorage();
}
 
function addToStorage() {
    localStorage.setItem("users",JSON.stringify(contacts));
    console.log(localStorage.getItem("users"));
    displayContacts();
}
 
function displayContacts() {
    var contactsList = JSON.parse(localStorage.getItem("users"));
    if (contactsList == null) {contactsList = [];}
 
    console.log(contactsList);
 
    $("#contactList").empty();
    $("#contactDetails").empty();
 
    for (var i = 0 ; i < contactsList.length ; i++) {
    $("ul").append("<li><a href='#' data-index='"+i+"' class='contact'>"+contactsList[i].prenom+" "+contactsList[i].nom+"</li>");
    $("#contactDetails").append("<article class='hidden' data-index='"+i+"'><h2>"+contactsList[i].civilite+" "+contactsList[i].prenom+" "+contactsList[i].nom+"</h2><p>"+contactsList[i].tel+"</p><a href='#'' class='edit' data-index='"+i+"'>Editer cette victime</a></article>")
    }
    console.log("Fin displayContacts");
    // $("#contactList li a").on("click", showContact);
}
 
function showContact() {
    hideAll()
    var id_contact = $(this).data("index");
    console.log(id_contact);
    $("article[data-index="+id_contact+"]").toggleClass("hidden");
}
 
function hideAll () {
    $("article, #form").addClass("hidden")
}

/*************************************************************************************************/
/* ************************************** CODE PRINCIPAL *************************************** */
/*************************************************************************************************/
 
$(function() {
    $( "#plus" ).on( "click", plus);
    $("#enregistrer").on("click", save);
    displayContacts();
    $("#contactList").on("click",'li a', showContact);
})