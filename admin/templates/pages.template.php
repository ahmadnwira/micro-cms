
<?php render("header"); ?>
    <div id="content">
        
        <h3 class="title"> <?= $title ; ?>  </h3>

        <span class="caption"> Action: </span>

        <form action="delete.php" class="inline_form" method="post">
            <select name="action" required="">
                <option value="" selected="">---------</option>
                <option value="delete_selected">Delete selected</option>
            </select>
            
            <input type="submit" value="delte">
       
  <table style="width:100%;">

    <th colspan="3"> Pages </th>
    <!-- for field in fields -->
  <?php for($i=0;$i<sizeof($db);$i++): ?>
    <tr>
              <td>
              <input type="checkbox" name="id"
                    value="<?=$db[$i]['id'] ?>">
                    <!-- use htmlspecialchars on $id -->
                    <a href="subjects.php?id=<?=$db[$i]['id']?>"> 
                        <?= $db[$i]['menu_name'] ?> </a>
              </td>
    </tr>
  
  <?php endfor; ?>
  <!-- loop end -->
  
  </table>
        <!-- loop end -->
    </form>
</div>
<?php render("footer"); ?>