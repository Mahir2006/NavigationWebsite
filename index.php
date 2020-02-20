<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
     
    <style>
      body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=tel], input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

    </style>
     
  </head>
  <body id='god' style=''>
      <img src='unnamed.png' style="width:100%;height:100%;position:absolute;top:0;right:0;left:0;bottom:0;display:none;" id='h'>
      <div id='bod' style='display:none;'>
       <div class="imgcontainer">
    <img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar" class="avatar">
  </div>
    <!-- Add two inputs for "phoneNumber" and "code" --><div id="log"> <label for="uname"><b>Enter Phone Number</b></label>
    <input type="tel" id="phoneNumber" />
    
    <button id="sign-in-button" onclick="submitPhoneNumberAuth()">
      SIGN IN WITH PHONE
    </button></div>
    <div id='cor' style='display:none;'><label for="uname"><b>Enter code</b></label>
    <input type="text" id="code" />

    <!-- Add two buttons to submit the inputs -->
    
    <button id="confirm-code" onclick="submitPhoneNumberAuthCode()">
      ENTER CODE
    </button></div>
     
  

    <!-- Add a container for reCaptcha -->
    <div id="recaptcha-container"></div>
</div>
    <!-- Add the latest firebase dependecies from CDN -->
 
  <script src="https://www.gstatic.com/firebasejs/6.3.3/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/6.3.3/firebase-auth.js"></script>
   <script>
      // Paste the config your copied earlier
      var firebaseConfig = {
    apiKey: "AIzaSyDtCMvavM09_Cr3RllftrIZ8SN-BtfsmQ0",
    authDomain: "mavls-cloud.firebaseapp.com",
    databaseURL: "https://mavls-cloud.firebaseio.com",
    projectId: "mavls-cloud",
    storageBucket: "mavls-cloud.appspot.com",
    messagingSenderId: "796920727055",
    appId: "1:796920727055:web:6142c7c57c36da5381857a",
    measurementId: "G-B9PLLBPWY4"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  // Initialize Firebase
 

      // Create a Recaptcha verifier instance globally
      // Calls submitPhoneNumberAuth() when the captcha is verified
      window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier(
        "recaptcha-container",
        {
          size: "normal",
          callback: function(response) {
            submitPhoneNumberAuth();
          }
        }
      );

      // This function runs when the 'sign-in-button' is clicked
      // Takes the value from the 'phoneNumber' input and sends SMS to that phone number
      function submitPhoneNumberAuth() {
        var phoneNumber = document.getElementById("phoneNumber").value;
         
          document.getElementById("log").style.display='none';
        var appVerifier = window.recaptchaVerifier;
        firebase
          .auth()
          .signInWithPhoneNumber(phoneNumber, appVerifier)
          .then(function(confirmationResult) {
            window.confirmationResult = confirmationResult;
             document.getElementById("recaptcha-container").style.display='none';
             document.getElementById("cor").style.display='block';
          })
          .catch(function(error) {
            console.log(error);
            document.getElementById("recaptcha-container").style.display='none';
            document.getElementById("cor").style.display='block';
          });
      }

      // This function runs when the 'confirm-code' button is clicked
      // Takes the value from the 'code' input and submits the code to verify the phone number
      // Return a user object if the authentication was successful, and auth is complete
      function submitPhoneNumberAuthCode() {
        var code = document.getElementById("code").value;
        confirmationResult
          .confirm(code)
          .then(function(result) {
            var user = result.user;
            console.log(user);
          })
          .catch(function(error) {
            console.log(error);
          });
      }

      //This function runs everytime the auth state changes. Use to verify if the user is logged in
      firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
         
      if (user != null) {
  user.providerData.forEach(function (profile) {
    console.log("Sign-in provider: " + profile.providerId);
    console.log("  Provider-specific UID: " + profile.uid);
    console.log("  Name: " + profile.displayName);
    console.log("  Email: " + profile.email);
    console.log("  Photo URL: " + profile.photoURL);
    var h='https://mtalk.000webhostapp.com/app/new.php?profile='
    var z=profile.uid;
    var k=h+z;
    window.location=k;
  });
  
}

document.getElementById("h").style.display='block';
 document.getElementById("bod").style.display='none'; 

          
        } else {
          // No user is signed in.
          console.log("USER NOT LOGGED IN");
           document.getElementById("bod").style.display='block';
           
        }
      });
 


       </script>
       </body>
       </html>