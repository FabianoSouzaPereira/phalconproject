<?= '<h2>Atualize seu Cadastro de Login</h2>' ?>

<?php echo $this->tag->form("signup/register"); ?>

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
        <?php echo $this->tag->submitButton("Register"); ?>
    </p>

</form>