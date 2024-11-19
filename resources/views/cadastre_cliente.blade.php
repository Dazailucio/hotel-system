@include('layout.layout')

@include('layout.header')

<div class="teste">
    <div class="cardlogin-left"> 
        <div class="textfield">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="Nome">
    </div>
    <div class="textfield">
        <label for="email">Email</label>
        <input type="email" name="email" id="Email">
    </div>
</div>
    
<div class="cardlogin-center"> 
    <div class="textfield2">
        <label for="#phone_with_ddd">Telefonecontato</label>
        <input id="cpf" type="text" class="form-control">
    </div>
        <div class="textfield2">
        <label for="#phone">Telefone</label>
        <input id="phone" type="text" class="form-control">
        </div>
    <div class="textfield2">
        <label for="cpf">Quarto</label>
        <input id="cpf" type="text" class="form-control">
    </div>
    <div class="textfield2">
        <label for="money">Valordoquarto</label>
        <input id="money" type="text" class="form-control">
    </div>
</div>

<div class="cardlogin-rigth"> 
    <div class="textfield2">
        <label for="check-in">Check-in</label>
        <input id="check-in" type="text" class="form-control">
    </div>
    <div class="textfield2">
        <label for="check-out">Check-out</label>
        <input id="check-out" type="text" class="form-control">
    </div>
    <div class="textfield2">
        <label for="n*-do-quarto">N*-do-quarto</label>
        <input id="n*-do-quarto" type="text" class="form-control">
    </div>
    <div class="textfield2">
        <label for="date">Dia</label>
        <input id="date" type="text" class="form-control">
    </div>

    
</div>

</div>
<button class="btnLogin">
<a class="btn-menu" href="telainicial.html" role="button"> Entrar</button>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script> <!--fazer uns input maneirinhos para o trabalho -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    