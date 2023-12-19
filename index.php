<?php include("db.php"); ?>

<?php include("includes/header.php");?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">

            <?php if(isset($_SESSION['message'])) { ?>
                <?= $_SESSION['message']?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <?php  } ?>
            <div class="card card-body">
                <form action="insertar.php" method="POST">
                    <div class="form-group">
                        <h4 class=>Nombre</h4>
                        <input type="text" name="nombre" class="form-control" placeholder="Titulo de la pelicula" autofocus>
                    </div>

                    <div class="form-group mt-3">
                        <h4 class=>Protagonista</h4>
                        <input type="text" name="protagonista" class="form-control" placeholder="Introduce nombre del protagonista" autofocus>
                    </div>

                    <div class="form-group mt-3">
                        <h4 class=>Genero</h4>
                        <input type="text" name="genero" class="form-control" placeholder="Genero de la pelicula" autofocus>
                    </div>

                    <div class="form-group mt-3">
                        <h4 class=>Casa productora</h4>
                        <input type="text" name="publisher" class="form-control" placeholder="Casa productora de la pelicula" autofocus>
                    </div>

                    <div class="form-group mt-3">
                        <h4 class=>Sinopsis</h4>
                        <textarea type="text" name="sinopsis" class="form-control" placeholder="Sinopsis" autofocus></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block mt-3" name="save_task" value="guardar">

                </form>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php");?>
