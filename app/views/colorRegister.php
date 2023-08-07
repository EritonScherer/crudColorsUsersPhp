<?php $this->layout('master', [$color]);

    $colorValid = $this->data['colorValid'];
    $colorName = $this->data['colorName'];

    if($colorValid){
        echo sprintf("
        <div class='row d-flex justify-content-center'>
            <div class='alert alert-success m-3 col-4 text-center'>
            A cor <b>$colorName</b> foi cadastrada com sucesso!
            </div>
        </div>
        ");
    }else{
        echo sprintf("
        <div class='row d-flex justify-content-center'>
            <div class='alert alert-danger m-3 col-4 text-center'>
            A cor <b>$colorName</b> já existe em nosso sistema!
            </div>
        </div>
        ");
    }
?>
  <div class="row d-flex justify-content-center">
      <a class="btn btn-secondary col-2" href="/" role="button">Home</a>
  </div>