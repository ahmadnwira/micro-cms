<?php render("header"); ?>
    <div id="content">
        <h3 class="title"> <?= $title ; ?>  </h3>

        <span class="caption"> Action: </span>

        <form action="delete.php" class="inline_form" method="post">
        <input type="hidden" name="table" value="pages">
            <select name="action" required="">
                <option value="" selected="">-----------------</option>
                <option value="delete_selected">Delete selected</option>
            </select>
            
            <input type="submit" value="delte">
       
  <table style="width:100%;">

    <th colspan="3"> Pages </th>
    <!-- for field in fields -->
  <?php for($i=0;$i<sizeof($db);$i++): ?>
    <tr>
        <td>
          <input type="checkbox" name="check_list[]" 
            value="<?=clean_str($db[$i]['id'])?>">
                            
                <a href="pages.php?id=<?=clean_str($db[$i]['id'])?>"> 
                      <?= clean_str($db[$i]['menu_name']) ?> </a>
        </td>
    </tr>
  
  <?php endfor; ?>
  <!-- loop end -->
  
  </table>
        <!-- loop end -->
    </form>
</div>
<?php render("footer"); ?>