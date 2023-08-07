<?php $this->layout('master', [$userColor]);

$userColorValid = $this->data['userColorValid'];
$colorName = $this->data['colorName'];
$userName = $this->data['userName'];
$data = $this->data;

echo sprintf("
        <div class='row d-flex justify-content-center'>
            <div class='alert alert-warning m-3 col-4 text-center'>
            A cor <b>$colorName</b> já existe em nosso sistema!
            </div>
        </div>

<div class='row d-flex justify-content-center'>
  <a class='btn btn-success col-2' value='$data' href='/user-color-update' type='submit' role='button'>Alterar</a>
</div>

");
?>
<div class="row d-flex justify-content-center">
  <a class="btn btn-secondary col-2" href="/" role="button">Home</a>
</div>

