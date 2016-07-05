<?php
    $title = isset($title) ? $title : "";
    $body = isset($body) ? $body : "";
?>
<form method="post" action="postComment.php" enctype="multipart/form-data">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="<?php print $title ?>" /><br />
    <label for="text">Comment</label>
    <textarea name="text" id="text" style="width:600px; height: 200px">
        <?php print $body ?>
    </textarea>
    <p>No HTML allowed except <b><?php print htmlentities("<b>") ?></b> and <i><?php print htmlentities("<i>") ?></i></p>

    <label for="userfile">add image:</label> <input id="userfile" name="userfile" type="file" value="" /><br />
    <label for="imgdescr">image description: </label> <input type="text" name="imgdescr" id="imgdescr" value="" style="width: 500px;" /> 
    
    <input type="submit" value="Submit comment!" />
</form>    

