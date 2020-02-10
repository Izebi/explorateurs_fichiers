<?php

if (isset($_POST['name_folder'])) {
    $folder_name = $_POST['name_folder'];

    $path_doc = '../mesDocuments' . '/' . $folder_name . '';

    if (!file_exists($path_doc)) {
        mkdir($path_doc, 0777, true);
    }
    
    else {
        echo 'Ce dossier existe déjà!'; 
        return false;
    }
}


if (isset($_POST['name_folder_in_folder']) && isset($_POST['fold_in_fold_hidden']) ) {
    $folder_name = $_POST['name_folder_in_folder'];
    $folder_name_hidden = $_POST['fold_in_fold_hidden'];
    // echo $folder_name;

    $path_doc = '../mesDocuments' . '/' . $folder_name_hidden . '/'. $folder_name . '';


    if (!file_exists($path_doc)) {
        mkdir($path_doc, 0777, true);
    }
    
    else {
        echo 'Ce dossier existe déjà!'; 
        return false;
    }
}


if (isset($_POST['name_edit_folder']) && isset($_POST['old_name_hidden'])) {
    $name_doc_for_edit = $_POST['name_edit_folder'];
    $old_name = $_POST['old_name_hidden'];
    // echo $name_doc_for_edit .'<br>'. $old_name;

    $path_doc_for_edit = '../mesDocuments' . '/' . $name_doc_for_edit . '';
    
    $path_old_name = '../mesDocuments' . '/' . $old_name . '';

    if (!file_exists($path_doc_for_edit)) {
        rename($path_old_name, $path_doc_for_edit);
    }

    else {
        echo 'Désolé ce nom existe déjà';
        return false;
    }
}


if (isset($_POST['folder_delete'])) {
    
    $doc_delete = $_POST['folder_delete'];
    // echo $doc_delete;
    $path_to_delete = '../mesDocuments' . '/' . $doc_delete . '';

    // var_dump(scandir($path_to_delete));

    $all_files = scandir($path_to_delete);

    foreach ($all_files as $key => $value) {
        if ($value === '.' || $value === '..') {
            continue;
        }
        else{
            unlink($path_to_delete .'/'. $value);
        }
    }

    if (file_exists($path_to_delete)) {
        rmdir($path_to_delete);
    }
    else{
        echo 'Déja supprimer';
    }
}


if (isset($_POST['upload_name_hidden']) && isset($_FILES['name_import_in_folder'])) {
    $folder_on_upd = $_POST['upload_name_hidden'];
    $path_folder_name = '../mesDocuments' . '/' . $folder_on_upd . '';

    $file_name = $_FILES['name_import_in_folder'];
    // echo $folder_on_upd .'<br>';
    // var_dump($file_name) . '<br> <br>';
    // var_dump ($_FILES['name_import_in_folder']['name']);

    
        //$uploads_dir = 'mes_dossiers'.'/'.$_POST['nom_dossier'];

        $error = $_FILES["name_import_in_folder"]["error"];
        if ($error == 0) {
          $folder_temporer = $_FILES["name_import_in_folder"]["tmp_name"];
          $name = $_FILES["name_import_in_folder"]["name"];
        //   echo $name . '<br>';
        //   echo $error . '<br>';
        //   echo $temporer . '<br>';
          move_uploaded_file($folder_temporer, $path_folder_name . '/' . $name);
          echo 'fichier enregistre avec succes';
          
        }
    
}


