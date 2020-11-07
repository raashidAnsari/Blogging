var mainApp = {};

(function(){
    var firebase= app_fireBase;
    var uid = null;
    firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
          // User is signed in.
            uid = user.uid;
            alert("sign in successful");
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
    

    mainApp.logOut = logOut;
    //document.getElementById('out').style.display = 'none';
})()



