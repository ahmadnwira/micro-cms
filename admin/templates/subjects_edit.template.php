<?php render("header"); ?>

<form action="update.php" method="post">
<fieldset>
      <legend>Update Subject:</legend>
      
      <input type="hidden" name=id value="<?=$db[0]['id']?>"> 

      <div class="input_group">
            <label for="">Menue Name</label>
            <input type="text" name="menue_name" 
            value="<?=$db[0]['menue_name']?> "> 
      </div>

      <div class="input_group">
            <label for="">postion</label>
            <input type="text" name="position" 
                  value="<?=$db[0]['position']?>" >      
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