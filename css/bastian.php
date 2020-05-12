<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "br";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT username,review FROM reviewss where rid='r4' ";
  $result = $conn->query($sql);
  $res = [];
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          array_push($res,$row["username"]);
     
          array_push($res,$row["review"]);
      }
  }
  $conn->close();
?>


<html>
    <head>
        <title>Bastian</title>
        
        <link rel="shortcut icon" href="favcon.ico">
        <link rel="stylesheet" href="h11.css">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
  var res = <?php echo(json_encode($res)); ?>;
  var table = document.getElementById("reve");
  var i = 0;


  document.addEventListener("DOMContentLoaded", function(event) {
      document.getElementById("reve").innerHTML = '<tr><td>'+res[0]+'</td><td>'+res[1]+'<br>'+'</td></tr>'+'<tr><td>'+res[2]+'</td><td>'+res[3]+'</td></tr>'+'<tr><td>'+res[4]+'</td><td>'+res[5]+'<br>'+'</td></tr>'+'<tr><td>'+res[6]+'</td><td>'+res[7]+'<br>'+'</td></tr>'+'<tr><td>'+res[8]+'</td><td>'+res[9]+'<br>'+'</td></tr>'+'<tr><td>'+res[10]+'</td><td>'+res[11]+'<br>'+'</td></tr>';
  });


</script>
        
        <script>
            
                // Get the element with id="defaultOpen" and click on it
                 window.onload = function () {
                   document.getElementById("defaultOpen").click();
                 }
               
                 function openCity(evt,Name) {
                  // Declare all variables
                 
                 var i, tabcontent, tablinks;
               
                // Get all elements with class="tabcontent" and hide them
                 tabcontent = document.getElementsByClassName("tabcontent");
                 for (i = 0; i < tabcontent.length; i++) {
                   tabcontent[i].style.display = "none";
                 }
               
                 // Get all elements with class="tablinks" and remove the class "active"
                 tablinks = document.getElementsByClassName("tablinks");
                 for (i = 0; i < tablinks.length; i++) {
                   tablinks[i].className = tablinks[i].className.replace(" active", "");
                 }
               
                 // Show the current tab, and add an "active" class to the button that opened the tab
                 document.getElementById(Name).style.display = "block";
                 evt.currentTarget.className += " active";
               }
               </script>
               
               <script>
               // Initialize and add the map
               function initMap() {
                 // The location of Uluru
                 var uluru = {lat: 19.063643, lng: 72.8327683};
                 // The map, centered at Uluru
                 var map = new google.maps.Map(
                     document.getElementById('map'), {zoom: 20, center: uluru});
                 // The marker, positioned at Uluru
                 var marker = new google.maps.Marker({position: uluru, map: map});
               }
                   </script>
               <script async defer
                   src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjWlOH-pGo9b6ArwFGK4ZkBk5CuSEDHpI&callback=initMap">
               </script>
               <script>
                   $(document).ready(function(){
        $("#po").click(function(){
            var comment = $.trim($("#te").val());
            if(comment != ""){
                // Show alert dialog if value is not blank
               
                $("#rev").append("<hr>"+comment);
                localStorage.setItem('review',comment);
            }
        });
        
    });
               </script>
               <script>
                   function savedata(){
                       
                   }
               </script>
               
               
    </head>
    <body>
        <div class="topside">
            <img src="logo.jpeg" alt="image" class="first">
            <div class="navbar" id="myTopnav">
                <a href="home.html" class="active">Home</a>
                <a href="contact.html">Contact Us</a>
                <a onclick="on()">About Us</a>
                <a href="registor.html" class="rightt">Login/Create Account</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </div>
        <div id="overlay" onclick="off()">
            <div id="text2">
              <img src="about.png" class="about">
            </div>
        </div>
        <div class="row">
            
            <div class="column1" id="roo">
                <h1>Bastian</h1>
                <h4 style="margin-left: 40px;">Western</h4>
                <br>
                <img src="bas12.jpg" class="kala center" alt="kala">
                <br>
                <br>
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'About')" id="defaultOpen">About</button>
                    <button class="tablinks" onclick="openCity(event, 'Photos')">Photos</button>
                    <button class="tablinks" onclick="openCity(event, 'Menu')">Menu</button>
                    <button class="tablinks" onclick="openCity(event, 'Reviews')">Reviews</button>
                </div>
                <div id="About" class="tabcontent">
                    <br>
                    <br>
                    <br>
                    <h3 class="talign" >Locate the Restaurant</h3>
                    <br>
                    <!--The div element for the map -->
                    <div id="map"></div>
                    <br>
                    <br>
                    
                    <div class="abt">
                        <div class="roww">
                            <div class="columnn" >
                                <h3>Average Cost</h3>
                                <p>- Rs. 4200 for two people (approx) without alcohol</p>
                                <p>- Rs. 250 (approx) for a pint of beer</p>
                                <br>
                                <h3>Top Dishes</h3>
                                <p>- Sea Food, Cheescake, Cocktails, Lobster Roll Fish, Fish, Salmon</p>
                            </div>
                            <div class="columnn" >
                                <h3>Other Information</h3>
                                <ul>
                                    <li>Live Sport Screening<span class="fa fa-check green"></li>
                                    <li>Full Bar<span class="fa fa-check green"></span></li>
                                    <li>Seatings<span class="fa fa-check green"></span></li>
                                    <li>Vegetarian<span class="fa fa-check green"></li>
                                    <li>Non-vegetarian<span class="fa fa-check green"></li>
                                    <li>Alcohol<span class="fa fa-check green"></li>
                                    <li>Dance floor<span class="fa fa-check green"></li>
                                    <li>Free Parking<span class="fa fa-check green"></li>
                                    <li>Smoking area<span class="fa fa-check green"></span></li>
                                    <li>Wifi<span class="fa fa-check green"></span></li>	
                                    <li>Brunch<span class="fa fa-check green"></span></li>
                                    <li>Vegan Options<span class="fa fa-check green"></span></li>
                                </ul>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                <div id="Photos" class="tabcontent">
                    <br>
                    <br>
                    <br>
                    <h3 class="talign">A Photographic Stroy</h3>
                    <br>
                    <div class="top">
                        <ul>
                            <li><a href="#img_1"><img src="bas1.jpg"></a></li>
                            <li><a href="#img_2"><img src="bas2.jpg"></a></li>
                            <li><a href="#img_3"><img src="bas3.jpg"></a></li>
                            <li><a href="#img_4"><img src="bas4.jpg"></a></li>
                            <li><a href="#img_5"><img src="bas5.jpg"></a></li>
                            <li><a href="#img_6"><img src="bas6.jpg"></a></li>
                            <li><a href="#img_7"><img src="bas7.jpg"></a></li>
                            <li><a href="#img_8"><img src="bas8.jpg"></a></li>
                            <li><a href="#img_9"><img src="bas9.jpg"></a></li>
                            <li><a href="#img_10"><img src="bas10.jpg"></a></li>
                            <li><a href="#img_11"><img src="bas11.jpg"></a></li>
                            <li><a href="#img_12"><img src="bas12.jpg"></a></li>
                            
                            
                        </ul>
                            <a href="#_1" class="lightbox trans" id="img_1"><img src="bas1.jpg"></a>
                            <a href="#_2" class="lightbox trans" id="img_2"><img src="bas2.jpg"></a>
                            <a href="#_3" class="lightbox trans" id="img_3"><img src="bas3.jpg"></a>
                            <a href="#_4" class="lightbox trans" id="img_4"><img src="bas4.jpg"></a>
                            <a href="#_5" class="lightbox trans" id="img_5"><img src="bas5.jpg"></a>
                            <a href="#_6" class="lightbox trans" id="img_6"><img src="bas6.jpg"></a>
                            <a href="#_7" class="lightbox trans" id="img_7"><img src="bas7.jpg"></a>
                            <a href="#_8" class="lightbox trans" id="img_8"><img src="bas8.jpg"></a>
                            <a href="#_9" class="lightbox trans" id="img_9"><img src="bas9.jpg"></a>
                            <a href="#_10" class="lightbox trans" id="img_10"><img src="bas10.jpg"></a>
                            <a href="#_11" class="lightbox trans" id="img_11"><img src="bas11.jpg"></a>
                            <a href="#_12" class="lightbox trans" id="img_12"><img src="bas12.jpg"></a>
                            
                    </div>
                </div>
                <div id="Menu" class="tabcontent">
                    <br>
                    <br>
                    <br>
                    <h3 class="talign">Chase The Flavours</h3>
                    <br>
                    <div class="top">
                        <ul>
                            <li><a href="#img_111"><img src="basm1.jpg"></a></li>
                            <li><a href="#img_22"><img src="basm2.jpeg"></a></li>
                            <li><a href="#img_33"><img src="basm3.jpg"></a></li>
                            <li><a href="#img_44"><img src="basm4.jpg"></a></li>
                            <li><a href="#img_55"><img src="basm5.jpg"></a></li>
                            <li><a href="#img_66"><img src="basm6.jpg"></a></li>
                            <li><a href="#img_77"><img src="basm7.jpg"></a></li>
                            <li><a href="#img_77"><img src="basm8.jpg"></a></li>
                           
                        </ul>
                          <a href="#_111" class="lightbox trans" id="img_111"><img src="basm1.jpg"></a>
                          <a href="#_22" class="lightbox trans" id="img_22"><img src="basm2.jpeg"></a>
                          <a href="#_33" class="lightbox trans" id="img_33"><img src="basm3.jpg"></a>
                          <a href="#_44" class="lightbox trans" id="img_44"><img src="basm4.jpg"></a>
                          <a href="#_55" class="lightbox trans" id="img_55"><img src="basm5.jpg"></a>
                          <a href="#_66" class="lightbox trans" id="img_66"><img src="basm6.jpg"></a>
                          <a href="#_77" class="lightbox trans" id="img_77"><img src="basm7.jpg"></a>
                          <a href="#_77" class="lightbox trans" id="img_77"><img src="basm8.jpg"></a>
                         
                    </div>
            
                </div>
                <div id="Reviews" class="tabcontent"> 
                    <br>
                    <br>
                    <br>
                    <h3 class="talign">Review The Restaurant</h3>
                    <br>
                    <form action="daalo.php" method="post">
                           
                        <br>
                        <input type="text" placeholder="Username..." id="user" name="user">
                        <br>
                        <textarea id="te" rows="3" cols="100" placeholder="Write a review..." name="review"></textarea>
                        <input type="hidden" value="r4" name="rid"/>
                    <br>
                    
                    <input class="btn default" id="po" onClick="savedata()" type="submit" value="Submit"/>
                </form>

                    <br>
                    <br>
                    <h3 class="talign" >Recent Reviews</h3>
                    <br>
                <table class="tabl" id="reve" style="width:100%" >
                    <tr>
                        <th>Review</th>
                        <th>Username</th>
                </tr>
                </table>

                    
                </div>
            
            </div>
            <div class="column2" id="roo">
                <h4 class="talign">Popular Searches</h4>
            
            
                <div class="card ">
                    <a href="1441pizzeria.php"><img src="1441.jpg" alt="r1" class="r1 zoom"></a>
                    <p class="talign">1441 Pizzeria | Fort</p>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <a href="1441pizzeria.php"><p class="talign"> Write a review &#9998;</p></a>
                </div>
            
           
                <div class="card ">
                    <a href="angrezidhaba.php"><img src="angrezi.jpg" alt="r1" class="r1 zoom"></a>
                    <p class="talign">Angrezi Dhaba | Dadar West</p>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <a href="angrezidhaba.php"><p class="talign"> Write a review &#9998;</p></a>
                </div>
            
                <div class="card ">
                    <a href="kalachashma.php"><img src="kala.jpg" alt="r1" class="r1 zoom"></a>
                    <p class="talign">Kala Chashma | Thane West</p>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <a href="kalachashma.php"><p class="talign"> Write a review &#9998;</p></a>
                </div>
            </div>
                
        
    
           
        </div>
        
        <div class="foot" >
            <img src="logo.jpeg" class="footer" alt="okay">
            <h3 style="color: white;">2019 | Bhukkad Raja &#9400;</h3>
            <hr>
            <div class="ro">
                <div class="colum">
                    <a href="contact.html"><p style="color:white;font-size:18px">Contact Us</p></a>
                </div>
                <div class="colum">
                    <a onclick="on()"><p style="color:white;font-size: 18px">About Us</p></a>
                </div>
                <div class="colum">
                    <a href="registor.html"><p style="color:white;font-size: 18px">Account</p></a>
                </div>
                <div class="colum" >
                    <a href="https://www.linkedin.com/in/shefin-shajit-46b259168/"><p style="color:white;font-size: 18px;">Social Media</p></a>
              
                    
                </div>
            </div>
        </div>
        
        
        
        <script>
                function on() {
                     document.getElementById("overlay").style.display = "block";
                 }

                 function off() {
                     document.getElementById("overlay").style.display = "none";
                 }
                 function myFunction() {
                     var x = document.getElementById("myTopnav");
                     if (x.className === "navbar") {
                         x.className += " responsive";
                     } else {
                         x.className = "navbar";
                     }
                 }
        </script>  
    </body>
    
</html>