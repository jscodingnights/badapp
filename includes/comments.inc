<?php

    $imgArr = glob("./uploads/*");
    $imgMap = array();
    foreach($imgArr as $img) {
        $key = pathinfo($img, PATHINFO_FILENAME);
        $imgMap[$key] = $img;
    }

?>

<?php foreach(glob("./comments/*.comment") as $comment) : ?>
        <div style=" margin-bottom: 10px; padding-bottom: 10px; padding-top: 10px; border-bottom: 1px solid #dadada;"> 
            <?php 
                $splt1 = explode("/", $comment);
                
                $comment_file_name = pathinfo($comment, PATHINFO_FILENAME);
                $imgdec_path = "./imgdescr/".$comment_file_name.".imgdescr";
                $img_alt = "";
                if(file_exists($imgdec_path)) {
                    $img_alt = file_get_contents("./imgdescr/".$comment_file_name.".imgdescr");
                }
                
                $splt2 = explode("-", $comment_file_name);
                echo file_get_contents($comment);
                
                if(isset($imgMap[$comment_file_name])){
                    
                    $imgPath = str_replace("./", "", $imgMap[$comment_file_name]);
                    echo "<img src='".$imgPath."' alt='".$img_alt."' style='display: block; float: left;height: 200px;' />";
                    echo "<br style='clear: both' />";
                }
                
                $comment_author = $splt2[0];
                echo "<span>By ".$comment_author."</span>";

                if($isLoggedIn && $comment_author === $user) {
                    echo "<a href='delete.php?c=".$comment_file_name."'> delete</a>";
                }
            ?>
        </div>
<?php  endforeach; ?>
