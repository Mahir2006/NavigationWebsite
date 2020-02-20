
<script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-firestore.js"></script>
<script>
var d = new Date();

firebase.initializeApp({
   apiKey: "AIzaSyB-SoSUt94oklxth-es8BT0pNa4jbTH2Tw",
  authDomain: "mvideo-f1569.firebaseapp.com",
  projectId: "mvideo-f1569"
});

var db = firebase.firestore();
<?php


session_start();
// Store Session Data
$_SESSION['login_user']= $username;  // Initializing Session with value of PHP Variable
$d=$_GET['profile'];
$h=md5($_GET['profile']);
echo"db.collection('users').doc('$h').set({

    phone: '$d',
      time: d,
     no:0,
     

})
.then(function() {
    console.log('Document successfully written!');
   window.location='https://mtalk.000webhostapp.com/app/logged.php';
})
.catch(function(error) {
    console.error('Error writing document: ', error);
});
";?>

</script>
