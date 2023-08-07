<?php $this->layout('master', [$users]);
$userValid = $this->data['userValid'];
$userEmail = $this->data['userEmail'];
$userName = $this->data['userName'];


if($userValid){

  echo sprintf("
    <div class='row d-flex justify-content-center'>
        <div class='alert alert-success m-3 col-4 text-center'>
            Usuário <b>$userName</b> foi cadastrado com sucesso!
        </div>
    </div>
    ");
}else{
  echo sprintf("
  <div class='row d-flex justify-content-center'>
      <div class='alert alert-danger m-3 col-4 text-center'>
          O email <b>$userEmail</b> já existe em nosso sistema!
      </div>
  </div>
  
  ");
}
?>
<div class="row d-flex justify-content-center">
    <a class="btn btn-secondary col-2" href="/" role="button">Home</a>
</div>