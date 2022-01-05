<?php

include 'authentication.php';
include 'includes/header.php';
?>

    <div class="container-fluid px-4">
        <h4 class="mt-4">Users</h4>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item">Users</li>
        </ol>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Editar Usuarios</h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if(isset($_GET['id'])){
                            $user_id = $_GET['id'];
                            $users = "SELECT * FROM users WHERE id='$user_id'";
                            $users_run = mysqli_query($con, $users);

                            if(mysqli_num_rows($users_run)>0){
                                foreach($users_run as $user){
                                ?>
                        <form action="code.php" method="POST">
                            <input type="hidden" name="user_id" value="<?=$user['id'];?>">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="">Primeiro Nome</label>
                                    <input type="text" name="fname" value="<?=$user['fname'];?>" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Sobrenome</label>
                                    <input type="text" name="lname" value="<?=$user['lname'];?>" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Email</label>
                                    <input type="email" name="email" value="<?=$user['email'];?>" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Senha</label>
                                    <input type="password" name="password"  class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Tipo de Conta</label>
                                    <select name="role_as" >
                                        <option value="">--Selecione uma Opção--</option>
                                        <option value="admin" <?=$user['role_as'] == '1' ? 'selected':'' ?>>Admin</option>
                                        <option value="user" <?=$user['role_as'] == '0' ? 'selected':'' ?>>User</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Status</label>
                                    <input type="checkbox" name="status" <?=$user['status'] == '1' ? 'checked':'' ?> width="70px" heigth="70px">
                                </div>
                                <div class="col-md12 mb-3">
                                    <button type="submit" name="update_user" class="btn btn-primary" >
                                        Atualizar Usuario
                                    </button>
                                </div>
                            </div>
                        </form>
                        <?php
                                }
                            }
                            else{
                                ?>
                                <h4>nenhum registro encontrado</h4>
                                <?php
                            }
                        }  
                        ?>
                    </div>
                </div>
            </div>
        </div>


<?php
include 'includes/footer.php';
include 'includes/scripts.php';
?>