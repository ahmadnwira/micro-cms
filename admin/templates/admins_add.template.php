<?php render("header"); ?>
<?php if (!empty($errors)):  ?>
      <div class="error">
            <?php foreach ($errors as $key => $error ): ?>
                 <li> <?= $key.' is '.$error; ?> </li>
            <?php endforeach; ?>
      </div>
<?php endif; ?>
<form action="add.php" method="post">
      <fieldset>
            <legend>New Admin:</legend>
      
            <input type="hidden" name="table" value="admins">

            <div class="input_group">
                  <label for="">mail</label>
                  <input type="text" name="mail"> 
            </div>

            <div class="input_group">
                  <label for="">password</label>
                  <input type="text" name="password"> 
            </div>


            <input type="submit" value="save">
      </fieldset>      

</form>

<?php render("footer"); ?>