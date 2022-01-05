<?php

include 'authentication.php';
include 'includes/header.php';
?>

    <div class="container-fluid px-4">

        <div class="row mt-4">
            <div class="col-md-12">
                <?php include 'message.php';?>
                <div class="card">
                    <div class="card-header">
                        <h4>Ver Categorias
                            <a href="category-add.php" class="btn btn-success float-end">Add categoria</a>
                        </h4>
                    </div>
                    <div class="card-body">
                   
                        <div class="table-responsive">
                        <table class="table table-bordered table-stripe">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Editar</th>
                                    <th>Deletar</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            $category = "SELECT * FROM categories";
                            $category_run = mysqli_query($con, $category);

                            if (mysqli_num_rows($category_run)>0) {
                                foreach($category_run as $item){
                                    ?>
                                        
                                <tr>
                                    <td><?= $item['id'];?></td>
                                    <td><?= $item['name']; ?></td>
                                    <td>
                                        <?= $item['status'] == '1' ? 'hidden':'visible'?>
                                    </td>
                                    <td>
                                        <a href="category-edit.php?id=<?= $item['id'];?>" class="btn btn-primary">Editar</a>
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-danger">Deletar</a>
                                    </td>
                                </tr>
                                <?php
                                }
                            }else{
                                ?>
                                <tr>
                                    <td colspan="5">nenhum registro encontrado</td>
                                </tr>
                                <?php
                            }
                        ?>
                            </tbody>
                        </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>


<?php
include 'includes/footer.php';
include 'includes/scripts.php';
?>