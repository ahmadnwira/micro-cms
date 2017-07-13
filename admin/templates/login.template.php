<?php render("header"); ?>

<form action="" method="POST">
    <div>
        <label for="mail">E-mail</label>
        <input type="text" name="mail">
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" name="password">
    </div>

    <input type="submit">
</form>

<?php if(!empty($msg)): ?>
    <div class="error" style="margin-top:4em">
        <?= $msg ?>
    </div>
<?php endif; ?>