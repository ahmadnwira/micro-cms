
<?php render("header"); ?>
    <div id="content">
        
        <h3 class="title"> <?= $title ; ?>  </h3>

        <span class="caption"> Action: </span>

        <form action="delte.php" class="inline_form" method="post">
            <select name="action" required="">
                <option value="" selected="">---------</option>
                <option value="delete_selected">Delete selected</option>
            </select>
            
            <input type="submit" value="delte">
        </form>
    </div>

    <table style="width:60%;margin-left:10%;">
        <th colspan="3"> Pages </th>
          
    <!-- for field in fields -->
    <?php for ($i=0;$i<sizeof($data);$i++): ?> 
        <tr>
          <td>
                <input type="checkbox">
                <!-- use htmlspecialchars on $id -->
                <a href="pages.php?id=<?=$data[$i]->pages_id?>"> 
                    <?= $data[$i]->menu_name?> </a>
          </td>
        </tr>
    <?php endfor; ?>
    
    <!-- loop end -->

    </table>

<?php render("footer"); ?>