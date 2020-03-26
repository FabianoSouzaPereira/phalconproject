<?php

echo "<h1>Usuarios cadastrasdos no sistema</h1>";

echo $this->tag->linkTo(["signup", "Registrar", 'class' => 'btn btn-primary']);
echo "  ";
echo $this->tag->linkTo(["sign", "Logar", 'class' => 'btn btn-primary']);
echo "  ";
echo $this->tag->linkTo(["sign/update", "Atualizar", 'class' => 'btn btn-primary']);
$users = new Users(); 
if ($users->count() > 0) { ?>
    <table class="table table-bordered table-hover">
        <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <td colspan="3">Quantidade: <?php echo $users->count(); ?></td>
        </tr>
        </tfoot>
        <tbody>
        <?php foreach($users as $user){  ?>
            <tr>
                <td><?php echo isset($user['iduser']);?></td>
                <td><?php echo isset($user['useremail']); ?></td>
                <td><?php echo isset($user['userpassword']); ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <?php
}