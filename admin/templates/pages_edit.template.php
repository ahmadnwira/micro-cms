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
    <legend>Update Page:</legend>
    
    <input type="hidden" name=id value="<?= clean_str($db[0]['id'])?>"> 
    <input type="hidden" name="table" value="pages">
    
    <div class="input_group">
          <label for="">Menue Name</label>
          <input type="text" name="menue_name" 
          value="<?= clean_str($db[0]['menue_name'])?> "> 
    </div>

    <div class="input_group">
          <label for="">postion</label>
          <input type="text" name="position" 
                value="<?= clean_str($db[0]['position']) ?>" >      
    </div>

  <div class="input_group">
  <label for="">content</label>
      <textarea name="content" cols="30" rows="5">
          <?= clean_str($db[0]['content']) ?>
      </textarea>  
    </div>

    <div class="input_group">
    
    <?php 

      $db[0]['visibility']=='1' ? $visible='show' : $visible='hiden';

    ?>

    <label for="" style="color:red">visibility [<?=$visible?>]</label>
    <select name="visibility">
          <option value="1">show</option>
          <option value="0">hide</option>
    </select>
    </div>

    <input type="submit" value="save">
</fieldset>      

</form>

<?php render("footer"); ?>