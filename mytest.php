<!-- ============================= Scandir permet de retourner sous forme de tableau tous les dossiers ============================= */ -->
<?php
// $all_docs = scandir("mesDocuments");
$all_docs = scandir(__DIR__ ."./../mesDocuments");
// var_dump($all_docs);
$folder = array_filter(glob('mesDocuments/*'), 'is_dir');
var_dump($folder);
?>

<div class="container mt-5">

    <div class="row">
        <div class="col-md-1"></div>

        <div class="col-md-10 d-flex justify-content-center">
            <!-- Table  -->
            <table class="table table-bordered table-striped" id="table_docs">
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
                    // echo count($all_docs);
                    foreach ($all_docs as $key => $value) {
                        if ($value === '.' or $value === '..') {
                            continue;
                        }

                        else {
                    
                            $path = '../mesDocuments' . '/' . $value . '';
                            // echo $path;
                    ?>
                    
                            <tr id="area">
                                <th scope="row">
                                    <a href="<?php echo $path ?>"> <?php echo $value; ?> </a>
                                    <input type="hidden" id="hidden_folder" name="filter[]" value="<?php echo $value; ?>">
                                </th>
                                <td class="text-center width_td"> <button onclick="import_folder(); return false" id="import_folder" class="btn"> <i class="fas fa-download mr-2 green-text" aria-hidden="true"></i> Importer</button> </td>
                                <td class="text-center width_td"> <button onclick="edit_folder(); return false" id="edit_folder" class="btn"> <i class="far fa-edit mr-2 blue-text" aria-hidden="true"></i>Editer </button> </td>
                                <td class="text-center width_td"> <button data-path="<?php echo $path ?>" onclick="delete_folder(); return false;" id="delete_folder" class="btn"> <i class="fas fa-trash mr-2 red-text" aria-hidden="true"></i>Supprimer </button> </td>
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

        <div class="col-md-1"></div>
    </div>

</div>