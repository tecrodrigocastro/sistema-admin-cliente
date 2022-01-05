<?php

include 'authentication.php';
include 'includes/header.php';
?>

    <div class="container-fluid px-4">
        
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Adicionar Usuario
                            <a href="view-register.php" class="btn btn-danger float-end">Voltar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    <form action="code.php" method="POST">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="">Primeiro Nome</label>
                                    <input type="text" name="fname"  class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Sobrenome</label>
                                    <input type="text" name="lname"  class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Email</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Senha</label>
                                    <input type="password" name="password"  class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Tipo de Conta</label>
                                    <select name="role_as" >
                                        <option value="">--Selecione uma Opção--</option>
                                        <option value="admin" >Admin</option>
                                        <option value="user" >User</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Status</label>
                                    <input type="checkbox" name="status" width="70px" heigth="70px">
                                </div>
                                <div class="col-md12 mb-3">
                                    <button type="submit" name="add_user" class="btn btn-success" >
                                        Add Usuario
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