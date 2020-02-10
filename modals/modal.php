    <!--============================= Modal formulaire de création de dossier =============================-->

    <!-- Modal: create -->
    <div class="modal fade right animated bounceInRight my_modal" id="exampleModalLabel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
      <div class="modal-dialog modal-full-height modal-right modal-notify modal-info" role="document">
        <!--Content-->
        <div class="modal-content">

          <!--Header-->
          <div class="modal-header light-blue darken-3 white-text">
            <h4 class="title"><i class="fas fa-folder prefix active"></i> &nbsp;&nbsp; Nouveau dossier</h4>
            <button type="button" onclick="opacity_body_off();" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" style="color:white; font-size:30px;" title="fermer">×</span>
            </button>
          </div>
          <!--Body-->
          <div class="modal-body mb-0" style="border-bottom: 1px solid #ced4da;">
            <form action="" method="post" id="formulaire">
              <div class="md-form form-sm">
                <!-- <i class="fas fa-pen "></i> -->
                <i class="fas fa-pen-alt prefix active"></i>
                <input type="text" id="name_folder" class="form-control">
                <label for="name_folder" class="active">Nom du dossier</label>
              </div>

              <div class="text-center mt-1-half mt-5">
                <button type="submit" onclick="submit_form_folder(); return false;" class="btn btn-info mb-2 waves-effect waves-light animated swing delay-1s"> Créer <i class="fas fa-send ml-1"></i></button>
              </div>
            </form>
          </div>
        </div>
        <!--/.Content-->
      </div>
    </div>
    <!-- Modal: create -->












    <!--============================= Modal formulaire pour éditer un dossier =============================-->
    <!--Modal: edit-->
    <div class="modal fade animated jackInTheBox" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">
          <!--Header-->
          <div class="modal-header light-blue darken-3 white-text">
            <h4 class="title"> <i class="far fa-edit"></i> Renommer le dossier </h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <!--Body-->
          <div class="modal-body mb-0" style="border-bottom: 1px solid #ced4da;">
            <form action="" method="post" id="formulaire_edit">
              <div class="md-form form-sm">
                <i class="fas fa-desktop prefix active"></i>
                <input type="text" id="name_edit_folder" class="form-control">
              </div>
              <div class="text-center mt-1-half mt-5">
                <button type="submit" onclick="submit_form_edit_folder(); return false;" class="btn btn-info mb-2 waves-effect waves-light animated swing delay-1s"> Valider <i class="fas fa-send ml-1"></i></button>
              </div>
            </form>
          </div>
        </div>
        <!--/.Content-->
      </div>
    </div>
    <!--Modal: edit-->






    <!--============================= Modal formulaire pour importer un fichier =============================-->
    <!--Modal: upload-->
    <div class="modal fade animated zoomIn" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">
          <!--Header-->
          <div class="modal-header light-blue darken-3 white-text">
            <h4 class="title"> <i class="fas fa-download mr-2 white-text" aria-hidden="true"></i> Importer un fichier </h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <!--Body-->
          <div class="modal-body mb-0" style="border-bottom: 1px solid #ced4da;">
            <form action="" enctype='multipart/form-data' method="post" id="formulaire_upload" class="md-form">
              <div class="file-field">
                <div class="btn btn-success btn-sm float-left mb-4">
                  <!-- <span> dsfhjv </span> -->
                  <input type="file" id="name_import_in_folder" name="file_to_import">
                </div>
                <div class=" mt-1-half mt-5">
                  <button type="submit" onclick="submit_form_import_folder(); return false;" class="btn btn-info mb-2 waves-effect waves-light animated tada delay-1s"> Télécharger <i class="fas fa-send ml-1"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--Modal: upload-->





    <!--============================= Modal formulaire de création de dossier dans un dossier =============================-->

    <!-- Modal: create folder in folder -->
    <div class="modal fade right animated bounceInRight my_modal" id="create_folder_in_folder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
      <div class="modal-dialog modal-full-height modal-right modal-notify modal-info" role="document">
        <!--Content-->
        <div class="modal-content">

          <!--Header-->
          <div class="modal-header light-blue darken-3 white-text">
            <h4 class="title"><i class="fas fa-folder prefix active"></i> &nbsp;&nbsp; Nouveau dossier</h4>
            <button type="button" onclick="opacity_body_off();" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" style="color:white; font-size:30px;" title="fermer">×</span>
            </button>
          </div>
          <!--Body-->
          <div class="modal-body mb-0" style="border-bottom: 1px solid #ced4da;">
            <form action="" method="post" id="formulaire_fold_in_fold">
              <div class="md-form form-sm">
                <!-- <i class="fas fa-pen "></i> -->
                <i class="fas fa-pen-alt prefix active"></i>
                <input type="text" id="name_folder_in_folder" class="form-control">
              </div>

              <div class="text-center mt-1-half mt-5">
                <button type="submit" onclick="return false;" class="btn btn-info mb-2 waves-effect waves-light animated swing delay-1s"> Créer <i class="fas fa-send ml-1"></i></button>
                <!-- submit_form_folder_in_folder;  -->
              </div>
            </form>
          </div>
        </div>
        <!--/.Content-->
      </div>
    </div>

    <!-- Modal: create folder in folder -->





    <!--============================= Modal formulaire de création de dossier dans un dossier =============================-->
    <div class="modal fade animated zoomIn" id="view_folder" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">
          <!--Header-->
          <div class="modal-header light-blue darken-3 white-text">
            <h4 class="title"> <i class="fas fa-meh-rolling-eyes mr-2 white-text" aria-hidden="true" style="font-size: 30px;"></i> </h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <!--Body-->
          <div class="modal-body mb-0" style="border-bottom: 1px solid #ced4da;">
            <div class="card" style="border: 1px solid #ced4da;">
              <div class="card-body">
                <div id="list_view">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal: view folder -->