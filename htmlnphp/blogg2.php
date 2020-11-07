<?php

    if (isset($_POST['likee'])){
        $conn = mysqli_connect('localhost', 'root', '123456', 'blogging');
        
        if(mysqli_connect_errno()){
            //failed
            echo 'Failed'. mysqli_connect_errno();
        }
        
        //if($numm == 1){

        
        mysqli_query($conn, "UPDATE counterr SET likes=likes + 1,total_votes=likes + dislikes WHERE id='11'");
        
        $select = mysqli_query($conn, "SELECT * FROM counterr") or die(mysqli_error($conn));
        
        $rows = mysqli_fetch_all($select, MYSQLI_ASSOC);
       // var_dump($rows);
        
        mysqli_free_result($select);

       
        
        foreach($rows as $row):
        
            $total_votes=$row['total_votes'];
            $likes=$row['likes'];
            $dislikes=$row['dislikes'];
        
        
        endforeach;

        echo "<p id='total_rating'>Total Ratings ( ".$total_votes." )</p>";
        echo "<p id='total_like'>".$likes."</p>";
        echo "<p id='total_dislike'>".$dislikes."</p>";
        exit();
    }

    if (isset($_POST['dlikee'])){
        $conn = mysqli_connect('localhost', 'root', '123456', 'blogging');
        
        if(mysqli_connect_errno()){
            //failed
            echo 'Failed'. mysqli_connect_errno();
        }
        
        //if($numm == 1){

        
        mysqli_query($conn, "UPDATE counterr SET dislikes=dislikes + 1,total_votes=likes + dislikes WHERE id='11'");
        
        $select = mysqli_query($conn, "SELECT * FROM counterr") or die(mysqli_error($conn));
        
        $rows = mysqli_fetch_all($select, MYSQLI_ASSOC);
       // var_dump($rows);
        
        mysqli_free_result($select);

       
        
        foreach($rows as $row):
        
            $total_votes=$row['total_votes'];
            $likes=$row['likes'];
            $dislikes=$row['dislikes'];

            
        
        
        endforeach;

        echo "<p id='total_rating'>Total Ratings ( ".$total_votes." )</p>";
        echo "<p id='total_like'>".$likes."</p>";
        echo "<p id='total_dislike'>".$dislikes."</p>";
        exit();
    }
    if (isset($_POST['lil'])){
        $conn = mysqli_connect('localhost', 'root', '123456', 'blogging');
        
        if(mysqli_connect_errno()){
            //failed
            echo 'Failed'. mysqli_connect_errno();
        }
        
        //if($numm == 1){

        
        mysqli_query($conn, "UPDATE counterr SET user_count=user_count + 1 WHERE id='11'");
        
        $select = mysqli_query($conn, "SELECT * FROM counterr") or die(mysqli_error($conn));
        
        $rows = mysqli_fetch_all($select, MYSQLI_ASSOC);
       // var_dump($rows);
        
        mysqli_free_result($select);

       
        
        foreach($rows as $row):
        
            $cnt=$row['user_count'];
            

            
        
        
        endforeach;

        echo $cnt;
        exit();
    }
       
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <title>count</title>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript">
    
            function test1(){
                var lik = $("#btn1").val();
                $.ajax({type:'post',url:"blogg2.php",data:'likee'+lik,success:function(result){
                    $("#like1").html(result);
                }})
            }
            function test2(){
                var dlik = $("#btn2").val();
                $.ajax({type:'post',url:"blogg2.php",data:'dlikee'+dlik,success:function(result){
                    $("#like1").html(result);
                }})
            }
            function test3(){
                i = null;
                $.ajax({type:'post',url:"blogg2.php",data:'lil'+i,success:function(result){
                    $("#like2").html(result);
                }})
            }
        </script>
      
    </head>

    <body>
        <img src="like.png" name = "btn1" id="btn1" onclick="test1()">
        <div id="like1">

        </div>
        <img src="dislike.png" name = "btn2" id="btn2" onclick="test2()">
        <div id="like2"></div>

        <button onclick="test3()">click</button>


    </body>
</html>

   