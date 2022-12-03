<?php include("db.php")?>
<?php include("./includes/header.php")?>

<div class="container p4">
    <div class="row">
        <div class="col-md-4">

            <?php if (isset($_SESSION['message'])) {?>
            <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php session_unset(); } ?>

            <div class="card card-body">
                <form action="save_task.php" method="POST">
                    <div class="form-group">
                      <label for="" class="form-label">Title</label>
                      <input type="text" name="title" id="" class="form-control" placeholder="Task title" autofocus>

                      <label for="" class="form-label mt-2">Description</label>
                      <textarea type="text" name="description" id="" class="form-control" placeholder="Task title"></textarea>

                      <input type="submit" class="btn btn-success btn-block mt-3" name="save_task">
                    </div>
                </form>
            </div>
        </div>

        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Created at</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <?php
                $queryGetTasks = "SELECT * FROM tasks";
                $resultTasks = mysqli_query($conexion, $queryGetTasks);
                while ($row = mysqli_fetch_array($resultTasks)) { ?>
                    <tr>
                        <td><?php echo $row['titulo']?></td>
                        <td><?php echo $row['descripcion']?></td>
                        <td><?php echo $row['created_at']?></td>
                        <td><input class="btn btn-danger" type="submit" value="Eliminar"></td>
                    </tr>   
                <?php } ?>
            </table>
        </div>
    </div>
</div>

<?php include("./includes/footer.php")?>

