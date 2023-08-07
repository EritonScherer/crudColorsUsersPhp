<?php $this->layout('master', [$users]);

$users = $this->data['users'];
$colors = $this->data['colors'];
$userColors = $this->data['userColors'];
?>


<div class="d-flex justify-content-center">
  <div class="p-2 col-2">
  <form action="/color-register" method="post" class="p-5 bg-light">

    <h4 class="mb-3 h-25">Cadastro de Cores</h4>
      <div>
          <input type="text" class="form-control" name="colorName" placeholder="Nome da Cor" required>
      </div>
      <div class="mt-3">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </div>
  </form>
  </div>



  <div class="p-2 col-2">
  <form action="/color-delete" method="post" class="p-5 bg-light">
    <h4 class="mb-3 h-25">Apagar a Cor</h4>
    <div>
      <select class="form-select" name="colorId">
          <option selected>Selecione a cor</option>
          <?php
            foreach($colors as $color) {
              $colorId = $color['id'];
              $nameColor = $color['name'];
              echo sprintf("<option value='$colorId'>$nameColor</option>");
            }?>
      </select>
    </div>
    <div class="mt-3">
      <button type="submit" class="btn btn-primary">Apagar</button>
    </div>
  </form>
  </div>

  <div class="p-2 col-2">
  <form action="/user-register" method="post" class="p-5 bg-light">
    <h4 class="mb-3 h-20">Cadastro de Usuários</h4>
      <div>
          <input type="text" class="form-control mb-2" name="userName" placeholder="Nome" required>
          <input type="email" class="form-control" name="userEmail" placeholder="E-mail" required>
      </div>
      <div class="mt-3">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </div>
  </form>
  </div>

<div class="p-2 col-2">
  <form action="/user-delete" method="post" class="p-5 bg-light">
    <h4 class="mb-3 h-25">Apagar o Usuário</h4>
    <div>
      <select class="form-select" name="userId">
          <option selected>Selecione o Usuário</option>
          <?php
            foreach($users as $user) {
              $userId = $user['id'];
              $userName= $user['name'];
              echo sprintf("<option value='$userId'> $userName</option>");
            }?>
      </select>
    </div>
    <div class="mt-3">
      <button type="submit" class="btn btn-primary">Apagar</button>
    </div>
  </form>
  </div>

  <div class="p-2 col-3">
  <form action="/user-color-register" method="post" class="p-5 bg-light">
    <h4 class="mb-3 h-20">Vincular Usuário e Cor</h4>
      <div>
      <select class="form-select mb-2" name="userId" aria-label="Default select example">
          <option selected>Selecione o Usuário</option>
          <?php
            foreach($users as $user) {
              $userId = $user['id'];
              $userName= $user['name'];
              echo sprintf("<option value='$userId'> $userName</option>");
            }
          ?>
      </select>
      <select class="form-select" name="colorId" aria-label="Default select example">
          <option selected>Selecione a Cor</option>
          <?php
            foreach($colors as $color) {
              $colorId = $color['id'];
              $nameColor = $color['name'];
              echo sprintf("<option value='$colorId'> $nameColor</option>");
            }
          ?>
        </select>
      </div>
      <div class="mt-3">
        <button type="submit" class="btn btn-primary">Vincular</button>
      </div>
  </form>
  </div>
</div>

<?php
    if($userColors){
      echo sprintf("


      <div class='container text-center border border-secondary rounded'>
      <table class='table table-striped'>
        <thead>
        <p class='fw-bold'>Usuários com cores vinculadas</p>
          <tr>
          <th scope='col'>User ID</th>
            <th scope='col'>Nome</th>
            <th scope='col'>Email</th>
            <th scope='col'>Cor</th>
          </tr>
        </thead>
        
        <tbody>
        ");
              foreach($userColors as $userColor) {
                $userId = $userColor['userId'];
                $userName = $userColor['userName'];
                $userEmail = $userColor['userEmail'];
                $userColor = $userColor['userColor'];
                echo sprintf("
                  <tr>
                    <td>$userId</td>
                    <td>$userName</td>
                    <td>$userEmail</td>
                    <td>$userColor</td>
                  </tr>
              ");}
    }

    ?>
  </tbody>
</table>
</div>