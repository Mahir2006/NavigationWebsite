<!DOCTYPE html>

<html lang="en">
<title>Home</title>
<meta charset="UTF-8">


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
      // Create a Recaptcha verifier instance globally
      // Calls submitPhoneNumberAuth() when the captcha is verified
     

      // This function runs when the 'sign-in-button' is clicked
      // Takes the value from the 'phoneNumber' input and sends SMS to that phone number
     
       

      // This function runs when the 'confirm-code' button is clicked
      // Takes the value from the 'code' input and submits the code to verify the phone number
      // Return a user object if the authentication was successful, and auth is complete
   

      //This function runs everytime the auth state changes. Use to verify if the user is logged in
      firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
          console.log("USER LOGGED IN");
          
        } else {
             
          console.log("USER NOT LOGGED IN");
           window.location="https://mtalk.000webhostapp.com/app/";
        
        }
      });
    
     </script>
     <meta charset="utf-8" />
<title>Display driving directions</title>
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
<script src="https://api.mapbox.com/mapbox-gl-js/v1.7.0/mapbox-gl.js"></script>
<link href="https://api.mapbox.com/mapbox-gl-js/v1.7.0/mapbox-gl.css" rel="stylesheet" />
<style>
	body { margin: 0; padding: 0; }
	#map { position: absolute; top: 0; bottom: 0; width: 100%; }
</style>
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.0.2/mapbox-gl-directions.js"></script>
<link
rel="stylesheet"
href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.0.2/mapbox-gl-directions.css"
type="text/css"
/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
.w3-sidebar {
  z-index: 3;
  width: 250px;
  top: 43px;
  bottom: 0;
  height: inherit;
}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
   
    <a href="#" class="w3-bar-item w3-button w3-theme-l1">Mroute</a>
  
  </div>
</div>



<!-- Overlay effect when opening sidebar on small screens -->






<div id="map"></div>
 
<script>
	mapboxgl.accessToken = '';
	
var map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v11',
center: [-79.4512, 43.6568],
zoom: 13
});
 
map.addControl(
new MapboxDirections({
accessToken: mapboxgl.accessToken
}),
'top-left'
);
</script>
 


  <!-- Pagination -->
  

  <footer id="myFooter">
   

    <div class="w3-container w3-theme-l1">
      <p>Powered by <a href="" target="_blank">Mavls</a></p>
    </div>
  </footer>

<!-- END MAIN -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>
<script>
    
</script>





</body>
</html>

     
