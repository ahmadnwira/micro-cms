<?php render("header"); ?>

  
  <div id="content">
      <h3> Site administration </h3>

    <!-- place holder for tables from DB -->
    <table style="width:55%;">
        <th colspan="3">content</th>
      <?php for($i=0;$i<sizeof($data);$i++): ?>
    
      <tr>
        <?php $tbl = $data[$i]->TABLE_NAME  ?>

        <td><a href="<?=$tbl;?>.php"> <?= $tbl ; ?> </a></td>
        
          <td class="td">
            <a href= "<?= $tbl; ?>.php?f=add"
              <i class="fa fa-plus" aria-hidden="true"></i>
              Add
            </a>
          </td>        
      </tr>

    <?php endfor; ?>
    
    </table>


  </div>

<?php render("footer"); ?>