<?php render("header"); ?>

<form action="add.php" method="post">
      <fieldset>
            <legend>New Page:</legend>
            <input type="hidden" name="table" value="pages">
            <div class="input_group">
                  <label for="">Menue Name</label>
                  <input type="text" name="menue">
            </div>

            <div class="input_group">
                  <label for="">postion</label>
                  <select name="pos">
                        <option value="1">1</option>
                        <option value="2">2</option>
                  </select>
            </div>

            <div class="input_group">
                  <label for="">Visible</label>
                  <input type="checkbox" name="visible">
            </div>

            <div class="input_group">
                  <label for="">content</label>
                  <textarea name="content" cols="20" rows="5"> </textarea>
            </div>
            <input type="submit" value="save">
      </fieldset>      

</form>

<?php render("footer"); ?>