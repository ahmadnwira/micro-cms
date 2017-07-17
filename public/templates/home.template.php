<?php render("header"); 
require('../core/loader.php') ; 
?>

<nav>
    <ul>

    <?php foreach($subjects as $subject): ?>
        <li>

        <?php 
            $query = new Query(Connection::connect($conf));
            
            $pages=$query->get('pages',
                ['id','menu_name','visibility'],
                'subject_id='.$subject['id']) ;
        ?>

            <?php if($subject['visibility']==1): ?>
                <a href=""><?= $subject['menue_name'] ?></a>
            
            <ol>
                <?php foreach($pages as $page): ?>
                    <li>
                    <?php if($page['visibility']==1): ?>
                        <a href="index.php?page=<?= $page['id']?>">
                        <?= $page['menu_name'] ?>   </a>    
                    </li>
                    <?php endif ;?>
                <?php endforeach; ?>
            </ol>
            <?php endif; ?>  
                
        </li>
    
    <?php endforeach; ?>
    </ul>
</nav>

