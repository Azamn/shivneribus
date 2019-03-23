var app_firebase = {};


(function(){
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyCGEf_71-FPq0hSab5Tu3jnwJnN1TKTZIg",
    authDomain: "shivneribus-fefc4.firebaseapp.com",
    databaseURL: "https://shivneribus-fefc4.firebaseio.com",
    projectId: "shivneribus-fefc4",
    storageBucket: "shivneribus-fefc4.appspot.com",
    messagingSenderId: "364426663590"
  };
  firebase.initializeApp(config);

  app_firebase = firebase;

})()