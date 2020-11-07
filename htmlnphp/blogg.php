<?php 
    //sql connection
    $conn = mysqli_connect('localhost', 'root', '123456', 'blogging');

    //connection check
    if(mysqli_connect_errno()){
        //failed
        echo 'Failed'. mysqli_connect_errno();
    }

    mysqli_query($conn, "UPDATE counterr SET viewcount=viewcount + 1 WHERE id='11'");

    $query = 'SELECT * FROM counterr';

    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //var_dump($posts);

    mysqli_free_result($result);

    mysqli_close($conn);

    
  

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>count</title>
      
    </head>

    <body>
        <h1> Count </h1>
        <?php foreach($posts as $post) : ?>
            <div class = "well">
                <h3> <?php echo $post['viewcount']; ?></h3>
            </div>
        <?php endforeach; ?>
        

        
    </body>

</html>