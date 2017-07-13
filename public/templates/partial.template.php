<div class="content">
    <?php
        
        $allowed = '<div><img><h1><h2><h3><p><br><strong><em><ul><li>' ;


        echo strip_tags( $content[0]['content'], $allowed); 
    ?>
</div>