<div class="body">
<div class="cadastro">

<?php echo $this->tag->form(["signup/register",'class' => 'formcad']); ?>
{{'<h1>Cadastre um Login</h1>'}}
    <p>
        <label for="name">Nome</label>
        <?php echo $this->tag->textField("username"); ?>
    </p>
    <p>
        <label for="email">E-Mail</label>
        <?php echo $this->tag->textField("useremail"); ?>
    </p>
    <p>
        <label for="password">Senha</label>
        <?php echo $this->tag->textField("userpassword"); ?>
    </p>
    <p>
        <?php echo $this->tag->submitButton(["Registrar",'class'=> 'btn btn-primary btncad']); ?>
    </p>

</form>
</div>
<div>