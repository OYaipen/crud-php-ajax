<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Owen Yaipen</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/small-business.css" rel="stylesheet">
  <style type="text/css">
    .box-title {
      border-radius: 5px;
      box-shadow: 0px 0px 3px 1px gray;
      padding: 10px 0px;
    }

    .error-msg {
      color: #dc3545;
      font-weight: 600;
    }

    .success-msg {
      color: green;
      font-weight: 600;
    }
  </style>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Owen Yaipen</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Heading Row -->
    <div class="row align-items-center my-5">
      <div class="col-lg-7">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe src="https://www.youtube.com/embed/-tJYN-eG1zk" allowfullscreen></iframe>
        </div>

      </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-5">
        <h1 class="font-weight-light">Video de Muestra</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio et provident facere debitis quaerat adipisci
          omnis reprehenderit, eius placeat, ullam enim rem voluptatum nulla! Iste excepturi voluptate nihil vero
          expedita.</p>
      </div>
      <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->

    <!-- Call to Action Well -->
    <div class="card text-white bg-secondary my-5 py-4 text-center">
      <div class="card-body">
        <p class="text-white m-0">Crud AJAX | PHP</p>
      </div>
    </div>

    <!-- Content Row -->
    <div class="row">
      <div class="container-fluid">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Agregar Registro</button>
            </div>
            <div class="col-lg-6">
              <input type="text" id="search" class="form-control" placeholder="Buscar...">
            </div>
          </div>
          <div class="row mt-5" id="tbl_rec">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-tJYN-eG1zk" allowfullscreen></iframe>
            </div>

          </div>
        </div>
      </div>

      <!-- Insert Design Modal -->

      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Agregar Nuevo Registro</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" id="ins_rec">
              <div class="modal-body">
                <div class="form-group">
                  <label><b>Nombre De Usuario</b></label>
                  <input type="text" name="username" class="form-control" placeholder="Username">
                  <span class="error-msg" id="msg_1"></span>
                </div>
                <div class="form-group">
                  <label><b>Email</b></label>
                  <input type="text" name="email" class="form-control" placeholder="tucorreo
@email.com">
                  <span class="error-msg" id="msg_2"></span>
                </div>
                <div class="form-group">
                  <label><b>País</b></label>
                  <select class="custom-select" name="country" id="country">
                    <option value="" selected>Escoger...</option>
                    <option value="Perú">Perú</option>
                    <option value="Chile">Chile</option>
                    <option value="Argentina">Argentina</option>
                  </select>
                  <span class="error-msg" id="msg_3"></span>
                </div>
                <div class="form-group">
                  <label><b>Fecha de Nacimmiento</b></label>
                  <input type="date" name="bod" class="form-control">
                  <span class="error-msg" id="msg_4"></span>
                </div>
                <div class="form-group">
                  <label class="mr-3"><b>Genero :- </b></label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" value="Masculino" checked>
                    <label class="form-check-label">Masculino</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" value="Femenino">
                    <label class="form-check-label">Femenino</label>
                  </div>
                  <span class="error-msg" id="msg_5"></span>
                </div>
                <div class="form-group">
                  <span class="success-msg" id="sc_msg"></span>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="close_click" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Agregar Regisro</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- End Insert Modal -->

      <!-- Update Design Modal -->

      <div class="modal fade" id="updateModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="updateModalCenterTitle">Actualizar Registro</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" id="updata">
              <div class="modal-body">
                <div class="form-group">
                  <label><b>Nombre de Usuario</b></label>
                  <input type="text" class="form-control" name="username" id="upd_1" placeholder="Username">
                  <span class="error-msg" id="umsg_1"></span>
                </div>
                <div class="form-group">
                  <label><b>Email</b></label>
                  <input type="text" class="form-control" name="email" id="upd_2" placeholder="tucorreo
@email.com">
                  <span class="error-msg" id="umsg_2"></span>
                </div>
                <div class="form-group">
                  <label><b>País</b></label>
                  <select class="custom-select" id="upd_3" name="country">
                    <option value="" selected>Escoger...</option>
                    <option value="Perú">Perú</option>
                    <option value="Chile">Chile</option>
                    <option value="Argentina">Argentina</option>
                  </select>
                  <span class="error-msg" id="umsg_3"></span>
                </div>
                <div class="form-group">
                  <label><b>Fecha de Nacimmiento</b></label>
                  <input type="date" class="form-control" id="upd_4" name="bod">
                  <span class="error-msg" id="umsg_4"></span>
                </div>
                <div class="form-group">
                  <label><b>Genero</b></label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="upd_5" name="gender" value="Masculino">
                    <label class="form-check-label">Masculino</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="upd_6" name="gender" value="Femenino">
                    <label class="form-check-label">Femenino</label>
                  </div>
                  <span class="success-msg" id="umsg_5"></span>
                </div>
                <div class="form-group">
                  <input type="hidden" name="dataval" id="upd_7">
                  <span class="success-msg" id="umsg_6"></span>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="up_cancle">Cancle</button>
                <button type="submit" class="btn btn-primary">Actualizar Registro</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- End Update Design Modal -->

      <!-- Delete Design Modal -->

      <div class="modal fade" id="deleteModalCenter" tabindex="-1" role="dialog" aria-labelledby="deleteModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="deleteModalCenterTitle">¿Estás segura de eliminar este registro?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Si hace clic en el botón Eliminar, el registro se eliminará. No tenemos copia de seguridad, así que tenga cuidado.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" id="de_cancle" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-primary" id="deleterec">Borrar</button>
            </div>
          </div>
        </div>
      </div>


    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; OWen Yaipen 2020</p>
    </div>
    <!-- /.container -->
  </footer>


  <!-- End Delete Design Modal -->

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" type="text/javascript"></script>


  <script type="text/javascript">
    $(document).ready(function() {
      $('#tbl_rec').load('record.php');

      $('#search').keyup(function() {
        var search_data = $(this).val();
        $('#tbl_rec').load('record.php', {
          keyword: search_data
        });
      });

      //insert Record

      $('#ins_rec').on("submit", function(e) {
        e.preventDefault();
        $.ajax({

          type: 'POST',
          url: 'insprocess.php',
          data: $(this).serialize(),
          success: function(vardata) {

            var json = JSON.parse(vardata);

            if (json.status == 101) {
              console.log(json.msg);
              $('#tbl_rec').load('record.php');
              $('#ins_rec').trigger('reset');
              $('#close_click').trigger('click');
            } else if (json.status == 102) {
              $('#sc_msg').text(json.msg);
              console.log(json.msg);
            } else if (json.status == 103) {
              $('#msg_1').text(json.msg);
              console.log(json.msg);
            } else if (json.status == 104) {
              $('#msg_2').text(json.msg);
              console.log(json.msg);
            } else if (json.status == 105) {
              $('#msg_3').text(json.msg);
              console.log(json.msg);
            } else if (json.status == 106) {
              $('#msg_4').text(json.msg);
              console.log(json.msg);
            } else if (json.status == 107) {
              $('#msg_5').text(json.msg);
              console.log(json.msg);
            } else {
              console.log(json.msg);
            }

          }

        });

      });

      //select data

      $(document).on("click", "button.editdata", function() {
        $('#umsg_1').text("");
        $('#umsg_2').text("");
        $('#umsg_3').text("");
        $('#umsg_4').text("");
        $('#umsg_5').text("");
        $('#umsg_6').text("");
        $('#umsg_7').text("");
        var check_id = $(this).data('dataid');
        $.getJSON("updateprocess.php", {
          checkid: check_id
        }, function(json) {
          if (json.status == 0) {
            $('#upd_1').val(json.username);
            $('#upd_2').val(json.email);
            $('#upd_3').val(json.country);
            $('#upd_4').val(json.bod);
            $('#upd_7').val(check_id);
            if (json.gender == 'Masculino') {
              $('#upd_5').prop("checked", true);
            } else {
              $('#upd_6').prop("checked", true);
            }
          } else {
            console.log(json.msg);
          }
        });
      });

      //Update Record

      $('#updata').on("submit", function(e) {
        e.preventDefault();

        $.ajax({

          type: 'POST',
          url: 'updateprocess2.php',
          data: $(this).serialize(),
          success: function(vardata) {

            var json = JSON.parse(vardata);

            if (json.status == 101) {
              console.log(json.msg);
              $('#tbl_rec').load('record.php');
              $('#ins_rec').trigger('reset');
              $('#up_cancle').trigger('click');
            } else if (json.status == 102) {
              $('#umsg_6').text(json.msg);
              console.log(json.msg);
            } else if (json.status == 103) {
              $('#umsg_1').text(json.msg);
              console.log(json.msg);
            } else if (json.status == 104) {
              $('#umsg_2').text(json.msg);
              console.log(json.msg);
            } else if (json.status == 105) {
              $('#umsg_3').text(json.msg);
              console.log(json.msg);
            } else if (json.status == 107) {
              $('#umsg_4').text(json.msg);
              console.log(json.msg);
            } else if (json.status == 106) {
              $('#umsg_5').text(json.msg);
              console.log(json.msg);
            } else {
              console.log(json.msg);
            }

          }

        });

      });

      //delete record

      var deleteid;

      $(document).on("click", "button.deletedata", function() {
        deleteid = $(this).data("dataid");
      });

      $('#deleterec').click(function() {
        $.ajax({
          type: 'POST',
          url: 'deleteprocess.php',
          data: {
            delete_id: deleteid
          },
          success: function(data) {
            var json = JSON.parse(data);
            if (json.status == 0) {
              $('#tbl_rec').load('record.php');
              $('#de_cancle').trigger("click");
              console.log(json.msg);
            } else {
              console.log(json.msg);
            }
          }
        });
      });


    });
  </script>
</body>

</html>