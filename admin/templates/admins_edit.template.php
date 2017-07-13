<?php render("header"); ?>
<?php if (!empty($errors)):  ?>
      <div class="error">
            <?php foreach ($errors as $key => $error ): ?>
                 <li> <?= $key.' is '.$error; ?> </li>
            <?php endforeach; ?>
      </div>
<?php endif; ?>
<form action="update.php" method="post">
<fieldset>
      <legend>Update Admins:</legend>
      
      <input type="hidden" name=id value="<?=clean_str($db[0]['id'])?>"> 
      <input type="hidden" name="table" value="admins">
      
      <div class="input_group">
            <label for="">E-mail</label>
            <input type="text" name="mail" 
            value="<?=clean_str($db[0]['mail'])?> "> 
      </div>

      <div class="input_group">
            <label for="">password</label>
            <input type="text" name="password" 
                  value="<?=clean_str($db[0]['password'])?>" >      
      </div>

      <div class="input_group">
    

      <input type="submit" value="save">
</fieldset>      

</form>

<?php render("footer"); ?>