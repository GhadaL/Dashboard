<html lang="en"><head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
   
    <!-- importamos la libreria de firebase cliente para javascript -->
    <script src="https://cdn.firebase.com/js/client/2.2.1/firebase.js"></script>

    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet" type="text/css">

</head>
<body>
<audio class="audioDemo" loop>
  <source src="song.mp3" >
</audio>
  
  <h1 style="
    color: aliceblue;
    color: #e1b42b;
">My House Dashboard</h1>
  <table style="
    width: 100%;
    padding: 15px;
"><tbody><tr>
    <td style="
    width: 50%;
    border-right-style: double;
    border-right-width: thick;
    border-right-color: rgba(225, 180, 43, 0.36);
">
       
<div class="promo">
  <div class="deal">
    <span>currnet Gaz Value</span>
  
  </div>
  <span class="price">
    
    <div id="valueHere">...</div> 
  
  </span>
  <ul class="features">
    <span >time : <span>
    <span id="timeHere">13:10:10</span><br/>
    <span>Date : </span>
    <span id="dateHere">12/10/2017</span>
  
  
  </ul>
   

  
</div>

  </td>

  <td><div align="center">

    <h2>Kitchen</h2>
    <label class="switch">
      <input class="switch-input" type="checkbox" id="switch1" checked="checked">
      <span class="switch-label" data-on="On" data-off="Off"></span> 
      <span class="switch-handle"></span> 
    </label>
    <h2>Room1</h2>
    <label class="switch">
      <input class="switch-input" type="checkbox" id="switch2">
      <span class="switch-label" data-on="On" data-off="Off"></span> 
      <span class="switch-handle"></span> 
    </label>
   </div></td>
  </tr>
  

  
 
<script src="https://www.gstatic.com/firebasejs/3.9.0/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyANuqfYiSrSaFhO__nuun5iP0os5EtpPIk",
    authDomain: "raspberry-data.firebaseapp.com",
    databaseURL: "https://raspberry-data.firebaseio.com",
    projectId: "raspberry-data",
    storageBucket: "raspberry-data.appspot.com",
    messagingSenderId: "233212185621"
  };
  firebase.initializeApp(config);
</script>
 <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
 <!-- Jquery file to communicate with firbase  -->
    <script src="js/script.js"></script>
   



</tbody></table></body></html>
