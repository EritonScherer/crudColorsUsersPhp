<?php $this->layout('master', [$users]);

$userName = $this->data['userName'];
$userValid = $this->data['userValid'];

if($userValid){
    echo sprintf("
    <div class='row d-flex justify-content-center'>
        <div class='alert alert-success m-3 col-4 text-center'>
            O usuário <b>$userName->name</b> foi deletado com sucesso!
        </div>
    </div>
    ");
}else{
    echo sprintf("
    <div class='row d-flex justify-content-center'>
        <div class='alert alert-danger m-3 col-4 text-center'>
            Selecione uma usuário para deletar!
        </div>
    </div>
    ");
}

?>

<div class="row d-flex justify-content-center">
<a class="btn btn-secondary col-2" href="/" role="button">Home</a>
</div>