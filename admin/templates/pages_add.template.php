<?php render("header"); ?>

<form action="add.php" method="post">
      <fieldset>
            <legend>New Page:</legend>
            <input type="hidden" name="table" value="pages">
            <div class="input_group">
                  <label for="menu_name">Menue Name</label>
                  <input type="text" name="menu_name">
            </div>

            <div class="input_group">
                  <label for="">postion</label>
                  <select name="position">
                        <option value="1">1</option>
                        <option value="2">2</option>
                  </select>
            </div>

            <div class="input_group">
                  <label for="">subject</label>
                  <select name="subject_id">
                        <option value="2">about</option>
                        <option value="1">home</option>
                  </select>
            </div>

            <div class="input_group">
                  <label for="">Visible</label>
                  <input type="checkbox" name="visibility">
            </div>

            <div class="input_group">
                  <label for="">content</label>
                  <textarea name="content" cols="20" rows="5"> </textarea>
            </div>
            <input type="submit" value="save">
      </fieldset>      

</form>

<?php render("footer"); ?>