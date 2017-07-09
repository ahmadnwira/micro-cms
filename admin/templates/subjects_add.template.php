<?php render("header"); ?>

<form action="add.php" method="post">
      <fieldset>
            <legend>New Subject:</legend>
      
            <input type="hidden" name="table" value="subjects">

            <div class="input_group">
                  <label for="">Menue Name</label>
                  <input type="text" name="menue_name"> 
            </div>

            <div class="input_group">
                  <label for="">postion</label>
                  <select name="position">
                  <?php for ($i=1; $i <= $count[0]->count; $i++): ?>
                        <option value="<?= $i ?>"><?= $i ?></option>
                  <?php endfor; ?>
                  </select>
            </div>

            <div class="input_group">
                  <label for="">Visible</label>
                  <select name="visibility">
                        <option value="1">show</option>
                        <option value="0">hide</option>
                  </select>
            </div>

            <input type="submit" value="save">
      </fieldset>      

</form>

<?php render("footer"); ?>