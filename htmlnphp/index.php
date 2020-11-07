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
        <title>Blogging</title>
        <meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Raashid">
        <!-- The core Firebase JS SDK is always required and must be listed first -->
        <script src="https://www.gstatic.com/firebasejs/7.13.2/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.13.2/firebase-auth.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.13.2/firebase-firestore.js"></script>
        <!-- TODO: Add SDKs for Firebase products that you want to use
        https://firebase.google.com/docs/web/setup#available-libraries -->
        <script src="https://www.gstatic.com/firebasejs/7.13.2/firebase-analytics.js"></script>
        <script src="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.js"></script>
        <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.css" />

        <link rel = "stylesheet" type="text/css" href = "web3style.css">
        <link rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body>
        <header>
            <section id="title">
                <span class="bigfont">BLOGGING</span>
            
                <div class="upp0">
                    <div class="upp">
                        <button id="sin" onclick="logOut()"><b>Get Started</b></button>
                        <input type="text" placeholder="Google Search " >
                    </div>

                    <br><br>
                
            
                <div class="upp1">
                    <label>Total Views:<b class="counting"><?php foreach($posts as $post) : ?>                    
                        <?php echo $post['viewcount']; ?>                    
                    <?php endforeach; ?></b>
                    </label>
                    <label>User Count:<b id="usr1"><?php foreach($posts as $post) : ?>                    
                        <?php echo $post['user_count']; ?>                    
                    <?php endforeach; ?></b></label>
                </div>
            </div>
            </section> 

            <br>

            <nav>
                <u1 class="lolipop">
                    <li><a href="#" style="color: white;">Home</a></li>
                    <li><a href="#" style="color: white;">Nation</a></li>
                    <li><a href="#" style="color: white;">Sports</a></li>
                    <li><a href="#" style="color: white;">Politics</a></li>
                    <li><a href="#" style="color: white;">Entertainment</a></li>
                    <li><a href="#" style="color: white;">Search</a></li>
                    <li><a href="#" style="color: white;">Contact Us</a></li>
                </u1>
            </nav>
            
        </header>

        <hr class="new1">
        
        <section id="infos1">
            <div class="container1" id="infos2">
                <img src="./img/tweet2.png">
                <h1>Should Twitter Get Rid of Follower Counts?</h1>

                <h2>    The possibility feels closer than ever
                    Cool Neha in All Things Creative</h2>
                <h4> Cool Neha in All Things Creative </h4>
                <h3>    Jan 9 · 5 min read</h3>

            </div>

            <div class="container1">
                <div class="container2">
                    <img src="./img/html5.png" class="container4">
                    <p class="container4">Html, a standardized system for 
                        tagging text files to achieve font, 
                        colour, graphic, and hyperlink effects
                        on WWW pages.</p>
                </div>
                <div class="container2">
                    <img src="./img/css.png" class="container4">
                    <p class="container4">CSS describes how HTML elements are to 
                        be displayed on screen,
                        paper, or in other media & 
                        control the layout of multiple web pages.</p>
                </div>
                <div class="container2">
                    <img src="./img/codecamp.png" class="container4">
                    <p class="container4">Teach yourself the foundations 
                        of designing using these 
                        links made for learning.--
                        freecodecamp & theodinproject.</p>
                </div>
            </div>

            <div class="container1" id="infos 2">
                <img src="./img/waffle.png">
                <h1>No, Thats Not How You Say It</h1>

                <h2>    A short personal history of my fav food</h2>
                <a href="blogging2.php">(Read more..)</a>
                <h4> VIP Singh </h4>
                <h3>    Jan 9 · 5 min read</h3>

            </div>
        </section>

        <hr class="new1">

        <div class="container3">
            <img src="./img/bloginggimg2.png">
        </div>

        <hr class="new1">

        <section id="infos1">
            <div class="container1" id="infos2">
                <img src="./img/code.png">
                <h1>A few good reasons why you should learn to code</h1>

                <h2>    You might be wondering if learning 
                    to code is something you should...</h2>
                    <h4> Rocky Jagtiani </h4>
                <h3>    Jan 9 · 5 min read</h3>

            </div>

            <div class="container1">
                <div class="container2">
                    <img src="./img/invest.png" class="container4">
                    <p class="container4">Only buy something 
                        that you’d be perfectly happy to hold if the 
                        market shut down for 10 years.</p>
                </div>
                <div class="container2">
                    <img src="./img/summer.png" class="container4">
                    <p class="container4">When I figured out 
                        how to work my grill, it was quite a moment.
                         I discovered that summer is a completely different 
                        experience.</p>
                </div>
                <div class="container2">
                    <img src="./img/winter.png" class="container4">
                    <p class="container4">Chains of habit are too 
                        light to be felt until 
                        they are too heavy to be broken.</p>
                </div>
            </div>

            <div class="container1" id="infos 2">
                <img src="./img/beach.png">
                <h1>Deep space radio waves baffle astronomers; 
                    aliens not ruled out</h1>

                <h2>   Every time we see something we’ve
                     never seen before that is an opportu..</h2>
                <h4>Enzyme Snehar </h4>
                <h3>    Feb 7 · 11 min read</h3>

            </div>
        </section>

        <hr class="new1">
        <script src='firebase.js'></script>
        <script type="text/javascript">

        var firebase= app_fireBase;
            var uid = null;
            var name = null;
            firebase.auth().onAuthStateChanged(function(user) {
                if (user) {
                // User is signed in.
                    uid = user.uid;
                    name = user.displayName;
                    
                    alert("sign in successful for " + name);
                    document.getElementById('sin').innerHTML = '<b>Log Out</b>';
                    
                
                    
                    
                    
                    //document.getElementById('out').style.display = 'block';          
                    
                }else{
                    //redirect
                    uid = null;
                    //window.location.replace("login.html");
                    //document.getElementById('sin').style.display = 'block';
                
                
                }
            });


        function logOut(){
                var lout = document.getElementById('sin');
                if(lout.innerHTML == '<b>Log Out</b>'){
                firebase.auth().signOut();
                alert("sign out successful");
                
                lout.innerHTML = '<b>Get Started</b>';
                }
                else{
                window.location.replace("login.php");
                }           


            }
        </script>

        


    
        
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