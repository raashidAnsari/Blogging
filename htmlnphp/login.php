<?php


    if(isset($_GET['likee'])){
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

        echo "helo";
    }   
    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login Page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/7.13.2/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.13.2/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.13.2/firebase-firestore.js"></script>
    <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
     <script src="https://www.gstatic.com/firebasejs/7.13.2/firebase-analytics.js"></script>
    <script src="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.css" />
    <link rel = "stylesheet" type="text/css" href = "web3style.css
    ">
</head>
<body>
    <h1><a class="pg" href="index.php">Home</a></h1>
    <div id="gs">
        <h1>Join Blogging
        </h1>
        <h4>Create an account to personalize your
            homepage, follow your favorite authors and
            publications, applaud stories you love, and
            more.</h4>
            <button id="gsin" onclick = "googleSignin()"><img id="igsin" src="./img/gsign.png"><span class="new3"></span><a>Sign up with Google</a></button>
            <br>
            <button id="fsin" onclick = "facebookSignin()"><img id="ifsin" src="./img/icon_facebook.png"><span class="new3"></span><a>Sign up with Facebook</a></button>
    </div>
    
    
    <script src='firebase.js'></script>
    <script type="text/javascript">
        window.fbAsyncInit = function() {
            FB.init ({
                appId      : 'BLOGG',
                xfbml      : true,
                version    : 'v2.6'
            });
            };

            (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
            } (document, 'script', 'facebook-jssdk'));

            var provider = new firebase.auth.GoogleAuthProvider();

            function googleSignin() {
                var lik = $("#gsin").val();
                $.ajax({url:"login.php",data:'likee'+lik,success:function(result){
                    //$("#like1").html(result);
                   // document.getElementById('sinn').style.display = 'none';
                    document.getElementById('firebaseui-auth-container').style.display = 'block';
                }})
            firebase.auth()
            
            .signInWithPopup(provider).then(function(result) {
                var token = result.credential.accessToken;
                var user = result.user;
                
                    
                console.log(token)
                console.log(user)
                //alert('sign in');
                window.location.replace('index.php')
            }).catch(function(error) {
                var errorCode = error.code;
                var errorMessage = error.message;
                    
                console.log(error.code)
                console.log(error.message)
            });

            }

            var providerf = new firebase.auth.FacebookAuthProvider();

            function facebookSignin() {
                var lik = $("#fsin").val();
                $.ajax({url:"login.php",data:'likee'+lik,success:function(result){
                    //$("#like1").html(result);
                   // document.getElementById('sinn').style.display = 'none';
                    document.getElementById('firebaseui-auth-container').style.display = 'block';
                }})
                
            firebase.auth().signInWithPopup(providerf)

            .then(function(result) {
                var token = result.credential.accessToken;
                var user = result.user;
                    
                console.log(token)
                console.log(user)
                alert('sign in');
                window.location.replace('index.php')
            }).catch(function(error) {
                console.log(error.code);
                console.log(error.message);
            });
            }


    </script>

    
    
    
</body>
</html>