<?php render("header"); ?>

  <div id="content">
    <div>
        <h3> Site administration </h3>
        <a href="logout.php" style="float:right;">logout</a>
    </div>
    
    <!-- place holder for tables from DB -->
    <table style="width:55%;">
        <th colspan="3">content</th>
      <?php for($i=0;$i<sizeof($data);$i++): ?>
    
      <tr>
        <?php $tbl = $data[$i]->TABLE_NAME  ?>

        <td><a href="<?=clean_str($tbl);?>.php"> <?= clean_str($tbl) ; ?> </a></td>
        
          <td class="td">
            <a href= "<?= clean_str($tbl) ; ?>.php?f=add"
              <i class="fa fa-plus" aria-hidden="true"></i>
              Add
            </a>
          </td>        
      </tr>

    <?php endfor; ?>
    
    </table>


  </div>

<?php render("footer"); ?>