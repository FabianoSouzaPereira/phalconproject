{{'<h2>Faça o login com e-mail e senha</h2>'}}

<?php echo $this->tag->form("sign/login"); ?>

    <p>
        <label for="email">E-Mail</label>
        <?php echo $this->tag->textField("useremail"); ?>
    </p>
    <p>
        <label for="password">Senha</label>
        <?php echo $this->tag->textField("userpassword"); ?>
    </p>
    <p>
        <?php echo $this->tag->submitButton("Login"); ?>
    </p>

</form>