<?php

include 'authentication.php';
include 'includes/header.php';
?>

    <div class="container-fluid px-4">

        <div class="row mt-4">
            <div class="col-md-6">
                <?php include 'message.php';?>
                <div class="card">
                    <div class="card-header">
                        <h4>Adicionar Categorias
                            <a href="category-view.php" class="btn btn-danger float-end">Voltar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="">Nome</label>
                                    <input type="text" name="name"  required class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Slug (URL)</label>
                                    <input type="text" name="slug"  required class="form-control">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Descrição</label>
                                    <textarea name="description"required class="form-control" rows="4"></textarea>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Titulo M.</label>
                                    <input type="text" name="meta_title"  required class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Descrição M.</label>
                                    <textarea name="meta_description"required class="form-control" rows="4"></textarea>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Palavras Chaves</label>
                                    <textarea name="meta_keywords"required class="form-control" rows="4"></textarea>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Navbar Status</label>
                                    <input type="checkbox" name="navbar_status" width="70px" heigth="70px">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="">Status</label>
                                    <input type="checkbox" name="status" width="70px" heigth="70px">
                                </div>
                                <div class="col-md12 mb-3">
                                    <button type="submit" name="add_category" class="btn btn-success" >
                                        Add Categoria
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


<?php
include 'includes/footer.php';
include 'includes/scripts.php';
?>