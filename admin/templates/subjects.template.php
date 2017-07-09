<?php render("header"); ?>
      
<div id="content">

  <h3 class="title">Subjets</h3>
  <span class="caption"> Action: </span>

  <form action="delete.php" class="inline_form" method="post">
    <input type="hidden" name="table" value="subjects">
    <select name="action" required="">
        <option value="" selected="">---------</option>
        <option value="delete_selected">Delete selected</option>
    </select>
  
    <input type="submit" value="delte">
  
  
  <table style="width:60%;margin-left:10%;">

    <th colspan="3"> Subjects </th>
    <!-- for field in fields -->
  <?php for($i=0;$i<sizeof($db);$i++): ?>
  
    <tr>
              <td>
              <input type="checkbox" name="check_list[]"
                value="<?=$db[$i]['subjects_id']?>">
                    <!-- use htmlspecialchars on $id -->
                    <a href="subjects.php?id=<?=$db[$i]['id']?>"> 
                        <?= $db[$i]['menue_name'] ?> </a>
              </td>
    </tr>
  
  <?php endfor; ?>
  <!-- loop end -->
  
  </table>
</form>
</div>

<?php render("footer"); ?>