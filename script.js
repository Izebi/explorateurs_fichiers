

// ============================= Quand on clique sur le bouton créer un dossier =============================
function opacity_body_on() {
    document.body.style.backgroundColor = "rgba(0,0,0,0.2)";
}


// ============================= Quand on ferme le modal de création de dossier =============================
function opacity_body_off() {
    document.body.style.backgroundColor = "white";
}


// ============================= Quand on appuie sur submit pour créer un dossier =============================
function submit_form_folder() {
    var name_folder = $('#name_folder').val();
    // alert(name_folder);

    if (name_folder == '' || name_folder == null) {
        alert('Remplir');
    }

    else {
        var formdata = new FormData;
        formdata.append("name_folder", name_folder);

        var ajax = new XMLHttpRequest;
        ajax.open("POST", "./traitement/traitement.php");
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4 && ajax.status == 200) {
                document.getElementById("response").innerHTML = this.responseText;

                update_table_list();
            }
        }
        ajax.send(formdata);

        // On appelle la fonction qui vide
        resetForm_input();

        // Izi toast
        iziToast.settings({
            resetOnHover: true,
            transitionIn: 'flipInX',
            transitionOut: 'flipOutX',
            // bottomRight, bottomLeft, topRight,
            // topLeft, topCenter, bottomCenter, center
            position: 'topLeft',
        });

        iziToast.success({ timeout: 5000, icon: 'fas fa-check', title: 'Parfait', message: 'Document créer avec succés!' });
    }

}


function import_folder(params) {
    // alert(params);
    $('#upload_name_hidden').val(params);
}

function submit_form_import_folder() {
    var upload_name_hidden = $('#upload_name_hidden').val();
    // alert(upload_name_hidden);
    var name_import_in_folder = $('#name_import_in_folder').prop('files')[0];
    // alert(name_import_in_folder);

    var formdata = new FormData;
    formdata.append("upload_name_hidden", upload_name_hidden);
    formdata.append("name_import_in_folder", name_import_in_folder);

    var ajax = new XMLHttpRequest;
    ajax.open("POST", "./traitement/traitement.php");
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById("response").innerHTML = this.responseText;

            // update_table_list();
        }
    }
    ajax.send(formdata);

    reset_Form_upload_input();

        // Izi toast
    iziToast.settings({
        resetOnHover: true,
        transitionIn: 'flipInX',
        transitionOut: 'flipOutX',
        // bottomRight, bottomLeft, topRight,
        // topLeft, topCenter, bottomCenter, center
        position: 'bottomLeft',
    });

    iziToast.warning({ timeout: 5000, icon: 'fas fa-check', title: 'Parfait', message: 'Dossier Modifié!' });
}


// ============================= Quand on appuie sur le bouton qui déclanche le modal d'édition de dossier =============================
function edit_folder(params) {
    // alert(params);
    $('#old_name_hidden').val(params);
    $('#name_edit_folder').val(params);
}

// ============================= Quand on appuie sur submit pour éditer un dossier =============================
function submit_form_edit_folder() {
    var name_edit_folder = $('#name_edit_folder').val();
    // alert(name_edit_folder);
    var old_name_hidden = $('#old_name_hidden').val();
    // alert(old_name_hidden);

    var formdata = new FormData;
    formdata.append("name_edit_folder", name_edit_folder);
    formdata.append("old_name_hidden", old_name_hidden);

    var ajax = new XMLHttpRequest;
    ajax.open("POST", "./traitement/traitement.php");

    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById("response").innerHTML = this.responseText;

            update_table_list();
        }
    }
    ajax.send(formdata);

    reset_Form_edit_input();

    // Izi toast
    iziToast.settings({
        resetOnHover: true,
        transitionIn: 'flipInX',
        transitionOut: 'flipOutX',
        // bottomRight, bottomLeft, topRight,
        // topLeft, topCenter, bottomCenter, center
        position: 'bottomCenter',
    });

    iziToast.info({ timeout: 5000, icon: 'fas fa-check', title: 'Parfait', message: 'Dossier Modifié!' });
}


function delete_folder(params) {
    // alert(params);

    if (confirm('Voulez vous vraiment supprimer le dossier ' + params + '?')) {
        // Ajax
        var formdata = new FormData;
        formdata.append("folder_delete", params);

        var ajax = new XMLHttpRequest;
        ajax.open("POST", "./traitement/traitement.php");

        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4 && ajax.status == 200) {
                document.getElementById("response").innerHTML = this.responseText;

                update_table_list();
            }

        }
        ajax.send(formdata);

        // Izi toast
        iziToast.settings({
            resetOnHover: true,
            transitionIn: 'flipInX',
            transitionOut: 'flipOutX',
            // bottomRight, bottomLeft, topRight,
            // topLeft, topCenter, bottomCenter, center
            position: 'center',
        });

        iziToast.info({ timeout: 5000, icon: 'fas fa-check', title: 'Parfait', message: 'Dossier Supprimé!' });
    }

    else {
        return false;
    }

}


// ============================= On vide l'input après avoir créer un dossier =============================
function resetForm_input() {
    $("#formulaire")[0].reset();
}

function reset_Form_edit_input() {
    $('#formulaire_edit')[0].reset();
}

function reset_Form_upload_input() {
    $('#formulaire_upload')[0].reset();
}

function resetForm_input_folder_in_folder() {
    $('#formulaire_fold_in_fold')[0].reset();
}
// ============================= Quand on clique sur le bouton qui ferme le sidebar =============================
// $("#menu-toggle").click(function (e) {
//     e.preventDefault();
//     $("#wrapper").toggleClass("toggled");
// });


// ============================= Preloading JS : chargement page index2.php =============================
$(window).ready(function () {
    $(".loader").delay(1000).fadeOut("slow");
    $("#overlayer").delay(1000).fadeOut("slow");
});


function update_table_list() {
    // Chargement du tableau après 2000ms
    setInterval(function () {
        $('#table_docs').load("./table/table.php").fadeIn('slow');
    }, 2000);
}





function open_modal_folder_in_folder(params) {
    // alert(params);
    // $('#name_folder_in_folder').val(params);
    $('#fold_in_fold_hidden').val(params);
}


// ============================= Quand on appuie sur submit pour créer un dossier dans un dossier =============================
function submit_form_folder_in_folder() {

    var name_folder_in_folder = $('#name_folder_in_folder').val();
    // alert(name_folder_in_folder);
    var fold_in_fold_hidden = $('#fold_in_fold_hidden').val();
    // alert(fold_in_fold_hidden);

    if (name_folder_in_folder == '' || name_folder_in_folder == null) {
        alert('Remplir svp');
    }

    else {
        var formdata = new FormData;
        formdata.append("name_folder_in_folder", name_folder_in_folder);
        formdata.append("fold_in_fold_hidden", fold_in_fold_hidden);
        var ajax = new XMLHttpRequest;
        ajax.open("POST", "./traitement/traitement.php");
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4 && ajax.status == 200) {
                document.getElementById("response").innerHTML = this.responseText;

            }
        }
        ajax.send(formdata);

        // On appelle la fonction qui vide
        resetForm_input_folder_in_folder();

        // Izi toast
        iziToast.settings({
            resetOnHover: true,
            transitionIn: 'flipInX',
            transitionOut: 'flipOutX',
            position: 'topLeft',
        });

        iziToast.success({ timeout: 5000, icon: 'fas fa-check', title: 'Parfait', message: 'Document créer avec succés!' });
    }


}