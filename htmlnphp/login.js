(function(){
    
    // Initialize the FirebaseUI Widget using Firebase.
    var ui = new firebaseui.auth.AuthUI(firebase.auth());
    var uiConfig = {
        callbacks: {
          signInSuccessWithAuthResult: function(authResult, redirectUrl) {
            // User successfully signed in.
            // Return type determines whether we continue the redirect automatically
            // or whether we leave that to developer to handle.
            return true;
          },
          uiShown: function() {
            // The widget is rendered.
            // Hide the loader.
            document.getElementById('loader').style.display = 'none';
          }
        },
        // Will use popup for IDP Providers sign-in flow instead of the default, redirect.
        signInFlow: 'popup',
        signInSuccessUrl: 'index.php',
        signInOptions: [
          // Leave the lines as is for the providers you want to offer your users.
          firebase.auth.GoogleAuthProvider.PROVIDER_ID,
          firebase.auth.FacebookAuthProvider.PROVIDER_ID,
         // firebase.auth.TwitterAuthProvider.PROVIDER_ID,
         // firebase.auth.GithubAuthProvider.PROVIDER_ID,
          firebase.auth.EmailAuthProvider.PROVIDER_ID
          //firebase.auth.PhoneAuthProvider.PROVIDER_ID
        ],

        
        
        
        // Terms of service url.
        tosUrl: 'index.php',
        // Privacy policy url.
         privacyPolicyUrl: 'index.php'
         


        
      };

      

      // The start method will wait until the DOM is loaded.
        ui.start('#firebaseui-auth-container', uiConfig);
        
})()

/*exports.userJoined = functions.auth.user().onCreate((user) => {
    // ...
        var usr = 1;
        $.ajax({url:"blogging2.php",data:'usr'+usr,success:function(result){
            $("#usr1").html(result);
        }})
        usr = 0;
  });*/

