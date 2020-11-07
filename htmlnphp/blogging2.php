<?php

    if (isset($_GET['likee'])){
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
        echo "<p id='total_like'>LIKES: ".$likes."</p>";
        echo "<p id='total_dislike'>DISLIKES: ".$dislikes."</p>";
        exit();
    }

    if (isset($_GET['dlikee'])){
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
        echo "<p id='total_like'>LIKES: ".$likes."</p>";
        echo "<p id='total_dislike'>DISLIKES: ".$dislikes."</p>";
        exit();
    }

    

       
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Movies</title>
        <meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Raashid">
        <link rel = "stylesheet" type="text/css" href = "web3style.css">
        <link rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript">
            function test1(){
                var lik = $("#btn1").val();
                $.ajax({url:"blogging2.php",data:'likee'+lik,success:function(result){
                    $("#like1").html(result);
                }})
            }
            function test2(){
                var dlik = $("#btn2").val();
                $.ajax({url:"blogging2.php",data:'dlikee'+dlik,success:function(result){
                    $("#like1").html(result);
                }})
            }
        </script>

    </head>

    <body>
        <header>
            <nav>
                <u1>
                    <li><a href="index.php" style="color: white;">Home</a></li>
                    <li><a href="#" style="color: white;">Nation</a></li>
                    <li><a href="#" style="color: white;">Sports</a></li>
                    <li><a href="#" style="color: white;">Politics</a></li>
                    <li><a href="#" style="color: white;">Entertainment</a></li>
                    <li><a href="#" style="color: white;">Search</a></li>
                    <li><a href="#" style="color: white;">Contact Us</a></li>
                </u1>
            </nav>
        </header>

        <hr class="new2">

        <section id="infos3">
            <div class="container5">
                <a><i><b>MEMBER FEATURE STORY</b></i></a>
                <div class="waff">
                <img  src="./img/waffle.png">
                </div>
                <br><br>
                <p><b>No, That’s Not How You Say It</b></p>
                <br>
                <p><b>A short personal history of
                    my favorite fast food</b></p>
                <div class="ld">
                <div class="ld1">
                <img src="./img/like2.png" name = "btn1" id="btn1" onclick="test1()"></div>
                <div class="ld1">
                <img src="./img/dislike2.png" name = "btn2" id="btn2" onclick="test2()"></div>
                </div>
                <div class="ld" id="like1"></div>
                
            </div>
        </section>

        <br><br><br><br><br><br><br>

        <section id="infos4">
            <p><span class="capi">I</span>ndians talk funny. We don’t think we do, 
                but we do. We’re usually too busy talking at or 
                over or directly through each other to notice. 
                Every so often, though, we stop long enough to listen to one 
                another and then laugh and point.
            </p>
            <p>The middle-aged Persian woman 
                I hired to teach me how to drive made fun of me 
                when I mispronounced Cahuenga Boulevard. I had just moved to Mumbai a few months prior from Yamunotri, where I considered myself a native despite the disagreements of many native Mumbaikars. Frank Lloyd Wright once said, “tip the world over on its side and everything loose will land in Mumbai.” So I floated across the country — as millions
                 before me had — to seek my fortune.
            </p>
            <p>Her teaching method was an unorthodox 
                form of politically incorrect mockery. When I tapped 
                the brakes too hard, she’d tell me not to drive like 
                a “Chinaman” and then pantomimed her head flinging back 
                and forth, as if she were bowing. She casually informed
                 me that Mumbaikars were notoriously terrible at changing 
                 lanes. Don’t get her started on Indians. Seriously, don’t. 
                She was, to be charitable, racially insensitive.
            </p>
            <p> I was a stranger in her city but my advanced age and 
                inexperience amused her. How could a grown man not know 
                how to drive a car? It was, however, my accent that intrigued
                 her the most. I spoke with the faintest southern drawl but
                  I also had northeastern motormouth tendencies. 
                She was always drawing conclusions as to my ethnicity.
            </p>
            <p>During one lesson she said,
                 “You people are good drivers.”
            </p>
            <p>
                You People?
            </p>
            <p><i>"Mumbaikars"</i></p>
            <p>Because of her I passed my driver’s test, 
                got my first license to operate a motor vehicle, 
                and then proceeded to not drive for years. Everything 
                I needed was in walking 
                distance: my job and places to eat.
            </p>
            <p>Here’s the truth about food in India: 
                it’s pretty good. There’s amazing pho and
                 pupusas and bulgogi. During my three year 
                 internment in the city of Mumbai, I was able 
                 to find satisfactory replacements for my beloved 
                 street foods. I found some decent pizza. I even
                  found bagels that… sufficed. But I could never 
                  find the one dish that reminded me of my adopted
                 home for the previous 16 years. A gyro platter.
            </p>
            <p>
                I couldn’t even find a suitable Mumbai-style Greek
                 diner, the kind of greasy spoon with a massive menu
                  where you can order a meal of waffles, 
                meatloaf, and lasagna if you want.
            </p>
            <p>
                But it’s not as if Mumbai has no roast 
                meat sandwiches. My racist — but friendly — 
                driving instructor had once pointed out an Armenian 
                restaurant that she recommended. This place served up 
                delicious chicken shawarma sandwiches and a garlic
                 sauce I could eat with my fingers.
            </p>
            <p>
                Eventually, I would drift back to Mumbai. 
                The first thing I would order upon my return? 
                A gyro, a word that rhymes with “pie-whoa.”
            </p>
            
        </section>

        <hr class="new2">
        
    </body>

    <footer>
        <div class="foot1">
            <nav>
                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Newsletter</a></li>
                    <li><a href="#">Sitemap</a></li>
                </ul>
            </nav>
        </div>
        <a>FOLLOW US ON</a>
        <div class="foot2">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-reddit"></a>
            <a href="#" class="fa fa-youtube"></a>
        </div>
        <p>Copyright &copy; 2020  Raashid Ansari
              All rights reserved</p>
    </footer>

    

</html>