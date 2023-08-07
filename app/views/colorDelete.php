<?php $this->layout('master', [$colors]);

$colorName = $this->data['colorName'];
$colorValid = $this->data['colorValid'];


if($colorValid){
    echo sprintf("
    <div class='row d-flex justify-content-center'>
        <div class='alert alert-success m-3 col-4 text-center'>
            A cor <b>$colorName->name</b> foi deletada com sucesso!
        </div>
    </div>
    ");
}else{
    echo sprintf("
    <div class='row d-flex justify-content-center'>
        <div class='alert alert-danger m-3 col-4 text-center'>
            Selecione uma cor para deletar!
        </div>
    </div>
    ");
}


?>

<div class="row d-flex justify-content-center">
<a class="btn btn-secondary col-2" href="/" role="button">Home</a>
</div>