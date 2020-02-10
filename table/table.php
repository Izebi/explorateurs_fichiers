<!-- ============================= Scandir permet de retourner sous forme de tableau tous les dossiers ============================= */ -->
<?php
// $all_docs = scandir("mesDocuments");
$all_docs = scandir(__DIR__ . "./../mesDocuments");
// var_dump($all_docs);

// $folder = array_filter(glob('mesDocuments/*'), 'is_dir');
// var_dump($folder);
?>




<div class="row">

    <div class="col-sm-12">
        <div class="d-flex justify-content-center">
            <!-- Table  -->
            <!-- Split button -->

            <!-- <i class="fas fa-ellipsis-v ml-2 red-text" data-toggle="dropdown" aria-haspopup="true"
    aria-expanded="false"></i>

  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div> -->

            <table class="table table-bordered table-striped mt-2" id="table_docs">
                <input type="hidden" name="old_name_r" id="old_name_hidden">
                <input type="hidden" name="upload_name_u" id="upload_name_hidden">
                <input type="hidden" name="fold_in_fold" id="fold_in_fold_hidden">

                <!-- Table head -->
                <thead>
                    <tr>
                        <th> Liste des documents </th>
                        <th colspan="3" class="text-center"><i class="fas fa-th-large mr-2 blue-text" aria-hidden="true"></i> <span class="dossier">Actions</span> </th>
                    </tr>
                </thead>
                <!-- Table head -->
                <!-- Table body -->
                <tbody>
                    <?php
                    foreach ($all_docs as $key => $value) {
                        if ($value === '.' or $value === '..') {
                            continue;
                        } else {
                    ?>
                            <tr>
                                <th>
                                    <img src="images/any.png" alt="" height="2%" onclick="opacity_body_on();" data-toggle="modal" data-target="#view_folder">
                                    <a class="ml-3"> <?php echo $value; ?>

                                    </a>
                                    <i class="fas fa-ellipsis-v ml-2 red-text" onclick="opacity_body_on();" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#" onclick="open_modal_folder_in_folder('<?php echo $value ?>'); return false;" data-toggle="modal" data-target="#create_folder_in_folder">Ajouter un dossier</a>
                                        </div>
                                </th>
                                <td class="text-center"> <button type="button" onclick="import_folder('<?php echo $value ?>'); return false;" class="btn btn-success" data-toggle="modal" data-target="#uploadModal" style="border-radius: 10px;"> <i class="fas fa-download mr-2 white-text" aria-hidden="true"></i> </button> </td>
                                <td class="text-center"> <button type="button" onclick="edit_folder('<?php echo $value ?>'); return false;" class="btn btn-info" data-toggle="modal" data-target="#editModal" style="border-radius: 10px;"> <i class="far fa-edit mr-2 white-text" aria-hidden="true"></i> </button> </td>
                                <td class="text-center"> <button type="button" onclick="delete_folder('<?php echo $value ?>'); return false;" class="btn btn-danger" style="border-radius: 10px;"> <i class="fas fa-trash mr-2 white-text" aria-hidden="true"></i> </button> </td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
                <!-- Table body -->
            </table>
            <!-- Table  -->
        </div>

    </div>

</div>