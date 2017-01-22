/***************************************************************************/
/*                                                                         */
/*                                   TAF                                   */
/*                                                                         */
/*    X 1. Si tableau existe : afficher liste contats au chargement page   */
/*    X 2. Afficher détails contact (dans des <p>)                         */
/*    X 3. Afficher formulaire <= si appelé par contact, alors prérempli   */
/*                                si appelé par bouton '+' alors vide      */
/*                                                                         */
/*    X 1. Ajouter contact au tableau                                      */
/*    X 2. Supprimer contact du tableau                                    */
/*    X 3. Mettre tableau dans WebStorage                                  */
/*    X 4. Si WebStorage existe : charger WebStorage dans le tableau       */
/*      5. Un contact modifié apparaît comme nouvel élément                */
/*                                                                         */
/*                                                                         */
/***************************************************************************/
 
/***************************************************************************/
/*                                                                         */
/*                                 DONNÉES                                 */
/*                                                                         */
/***************************************************************************/
 
var contact = new Object();
contact.civ = [];
contact.firstname = [];
contact.lastname = [];
contact.tel = [];
 
var civilite = {mr:'Monsieur', ma:'Madame', ml:'Mademoiselle'};
 
 
/***************************************************************************/
/*                                                                         */
/*                                FONCTIONS                                */
/*                                                                         */
/***************************************************************************/
 
// Enregistre le tableau contact dans le webStorage
function saveWebstorage() {
    console.log('saveWebstorage');
    // convertir le tableau contact en string JSON
    // et le placer dans localStorage sous le nom contact
    localStorage.setItem('contact',JSON.stringify(contact));
    loadWebstorage();
}
 
// Récupère le webStorage et crée un tableau contact
function loadWebstorage() {
    console.log('loadWebstorage');
    // convertir le JSON en tableau contact
    if (localStorage.contact != null) {
        contact = JSON.parse(localStorage.getItem('contact'));
        console.log('contact from storage:'+contact);
        composeList();
    } else {
        console.log('pas de showstorage contact');
    }
}
 
// Utilise le tableau contact pour créer un liste li
function composeList() {
    console.log('composeList');
    if (contact.firstname.length > 0) {
        console.log('contact.length:'+contact.firstname.length);
        var contactsList = document.querySelector('#contactsList ul');
        var contactsListHTML = "";
        for (var i = 0; i < contact.firstname.length; i++) {
             contactsListHTML += '<li><a href="#" class="showContact" data-id="'+i+'">'+contact.firstname[i]+' '+contact.lastname[i]+'</li>\r\n';
        }
        // console.log('contenu li : '+contactsListHTML);
        // contactsList.innerHTML = contactsListHTML; // version javascript
        $('#contactsList ul').html(contactsListHTML); // version jquery
    } else {
        console.log('pas de contact');
    }
    // console.log('composeList done');
}
 
// Utilise une seule entrée de tableau pour afficher les infos dans des <p>
function showContactDetails() {
    console.log('showContactDetails');
    //récupère l'id du contact
    contactId = $(this).data('id');
    console.log('data-id in :'+contactId);
    // remplir les <p>
    $('#contactFullName').text(civilite[contact.civ[contactId]]+' '+contact.firstname[contactId]+' '+contact.lastname[contactId]);
    $('#contactTel').text(contact.tel[contactId]);
    $('#editContact').data('id',contactId);
    // afficher la section contactDetails
    // document.querySelector('#contactDetails').classList.remove('hide'); // (version javascript pur)
    // document.querySelector('#contactDetails').classList.add('show'); // (version javascript pur)
    $('#contactDetails').removeClass('hide'); // (version javascript jquery)
    $('#contactDetails').addClass('show'); // (version javascript jquery)
    /*console.log('contact='+
        'new:civ:'+contact.civ[contactId]+
        ' pre:'+contact.firstname[contactId]+
        ' nom:'+contact.lastname[contactId]+
        ' tel:'+contact.tel[contactId]
    );*/
    // console.log('data-id out :'+$('#editContact').data('id'));
}
 
// Affiche le contact form et si id contact est donné, alors
// utilise une seule entrée de tableau pré-remplir un form
function showContactForm() {
    console.log('showContactForm');
    console.log('select:'+this);
    if ($(this).data('id') == null) {
        $('#contactForm [type=text], #contactForm [type=tel], #contactForm select').val('');
        console.log('form vidé');
    } else {
        contactId = $(this).data('id');
        $('#contactCiv [value='+contact.civ[contactId]+']').prop('selected',true);
        $('#contactFirstName').val(contact.firstname[contactId]);
        $('#contactLastName').val(contact.lastname[contactId]);
        $('#contactTelInput').val(contact.tel[contactId]);
        $('#contactForm #delContact').data('id',contactId);
        console.log('form rempli id:'+contactId);
    }
    $('#contactForm').removeClass('hide');
    $('#contactForm').addClass('show');
}
 
// Ajoute un contact au tableau contact
// OU modifie un contact existant
function saveContact() {
    console.log('saveContact');
    contactId = $(this).data('id');
    if (contactId == 'new') {
        contact.civ.push($('#contactCiv').val());
        contact.firstname.push($('#contactFirstName').val());
        contact.lastname.push($('#contactLastName').val());
        contact.tel.push($('#contactTelInput').val());
        console.log('contact='+
            'new:civ:'+contact.civ+
            ' pre:'+contact.firstname+
            ' nom:'+contact.lastname+
            ' tel:'+contact.tel
        );
    } else {
        contact.civ[contactId] = $('#contactCiv').val();
        contact.firstname[contactId] = $('#contactFirstName').val();
        contact.lastname[contactId] = $('#contactLastName').val();
        contact.tel[contactId] = $('#contactTelInput').val();
        console.log('contact='+contactId+
            ':civ:'+contact.civ+
            ' pre:'+contact.firstname+
            ' nom:'+contact.lastname+
            ' tel:'+contact.tel
        );
    }
    saveWebstorage();
}
 
// Supprime un contact du tableau
function supContact() {
    console.log('supContact');
    if ($(this).data('id') != null) {
        contactId = $(this).data('id');
        console.log(contact[contactId]);
        for (var info in contact) {
            console.log(contact[info][contactId]);
            contact[info].splice(contactId,1);
        }
        console.log('suppress done');
    } else {
        console.log('Erreur. Choisissez un contact à supprimer.');
    }
    console.log(contact);
    saveWebstorage();
}
 
 
/***************************************************************************/
/*                                                                         */
/*                                EXÉCUTION                                */
/*                                                                         */
/***************************************************************************/
$(function(){
    // Exécuté au chargement
    loadWebstorage();
 
    /* boutons et liens tels que dans le html :
    .showContact : affiche les détails du contact
    .editContact : affiche le formulaire rempli
    #addContact : affiche le formulaire vide
    #saveContact : met le contact dans le tableau
    #delContact : supprimer le contact du tableau
    */
 
    // Event listener
    // bouton ajouter un contact
    $('#addContact').on("click",showContactForm);
    // bouton afficher un contact
    $('.showContact').on("click",showContactDetails);
    // bouton modifier un contact
    $('.editContact').on("click",showContactForm);
    // bouton enregistrer un contact
    $('#saveContact').on("click",saveContact);
    // bouton supprimer un contact
    $('#delContact').on("click",supContact);
 
});