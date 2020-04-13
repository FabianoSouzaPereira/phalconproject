{{ stylesheet_link("public/css/style.css") }}
<div class="login">
<?php echo $this->tag->form(["sign/login",'class' => 'formlogin']); ?>
<?php  echo "<h1>Faça o seu Login</h1>"; ?>
    <p>
        <label for="email">E-Mail</label>
        <?php echo $this->tag->textField("useremail"); ?>
    </p>
    <p>
        <label for="password">Senha</label>
        <?php echo $this->tag->textField("userpassword"); ?>
    </p>
    <p class="pLogin">
        <?php echo $this->tag->submitButton(["Login",'class' => 'btn btnlogin btnstyle']);?>
    </p>
<?php echo $this->tag->linkTo(["/signup/", "Registrar", 'class' => 'btn btnRegistrar btnstyle']); ?>
</form>
</div>