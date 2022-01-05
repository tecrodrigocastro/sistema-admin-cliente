<?php
    session_start();
    include('includes/header.php');
    include('includes/navbar.php');
?>

<div class ="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">

                <?php include('message.php');   ?>

              <div class="card">
                  <div class="card-header">
                      <h4>Registrar</h4>
                  </div>
                  <div class="card-body">
                      <form action="registercode.php" method="POST">
                        <div class="form-group mb 3">
                          <label for="">Primeiro Nome:</label>
                          <input required type="text" name="fname" placeholder="Digite seu Primeiro nome" class="form-control">
                      </div>
                      <div class="form-group mb 3">
                          <label for="">Segundo Nome:</label>
                          <input required type="text" name="lname" placeholder="Digite seu Segundo Nome" class="form-control">
                      </div>
                      <div class="form-group mb 3">
                          <label for="">Email:</label>
                          <input required type="email" name="email" placeholder="Digite seu email" class="form-control">
                      </div>
                      <div class="form-group mb 3">
                          <label for="">Senha:</label>
                          <input required type="password" name="password" placeholder="Digite sua senha" class="form-control">
                      </div>
                      <div class="form-group mb 3">
                          <label for="">Confirmar Senha:</label>
                          <input required type="password" name="cpassword" placeholder="Confirme sua senha" class="form-control">
                      </div>
                      <div class="form-group mb 3">
                         <button type="submit" name="register_btn" class="btn btn-primary">Registrar</button>
                      </div>
                    </form>
                  </div>
                  
              </div>
            </div>
        </div>
    </div>
</div>


<?php
    include('includes/footer.php')
?>