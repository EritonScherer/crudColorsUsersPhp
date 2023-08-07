<?php $this->layout('master', [$userColor]);

    $userColorValid = $this->data['userColorValid'];
    $colorName = $this->data['color']->name;
    $userName = $this->data['user']->name;
    $userExist = $this->data['userExist'];
    $userId = $this->data['user']->id;
    $colorId = $this->data['color']->id;

    if($userColorValid){
        echo sprintf("
        <div class='row d-flex justify-content-center'>
            <div class='alert alert-success m-3 col-4 text-center'>
            O usuário <b>$userName</b> foi vinculado a cor <b>$colorName</b> com sucesso!
            </div>
        </div>
        ");
    }elseif($userExist){

        echo sprintf("
            <div class='row d-flex justify-content-center'>
                <div class='alert alert-warning m-3 col-4 text-center'>
                O usuário <b>$userName</b> já está vinculado a uma cor! Continuar com a alteração?
                </div>
            </div>

            <form action='/user-color-update' method='post'>
                <input type='hidden' name='userId' class='form-control' value='$userId'/>
                <input type='hidden' name='userName' class='form-control' value='$userName'/>
                <input type='hidden' name='colorId' class='form-control' value='$colorId'/>
                <input type='hidden' name='colorName' class='form-control' value='$colorName'/>
                <div class='row d-flex justify-content-center'>
                    <button type='submit' class='btn btn-success col-2'>Sim, continuar!</button>
                </div>
            </form>    
            <div class='row d-flex justify-content-center mb-3'>
                <a class='btn btn-danger col-2' href='/' role='button'>Não alterar!</a>
            </div>

        ");

    }else{
        echo sprintf("
        <div class='row d-flex justify-content-center'>
            <div class='alert alert-danger m-3 col-4 text-center'>
            Selecione o nome e a cor para vincular.
            </div>
        </div>
        ");
}
?>
<div class="row d-flex justify-content-center">
  <a class="btn btn-secondary col-2" href="/" role="button">Home</a>
</div>