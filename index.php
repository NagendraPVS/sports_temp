<!doctype html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="boot/css/bootstrap.min.css" rel="stylesheet">
    <script src="jQuery.js"></script>
    <script src="boot/js/bootstrap.js"></script>
    <link href="/project/pages/a.css" rel="stylesheet">
    <title>
    JAHNAGI
</title>
<style type="text/css">
   header{
        display: flex;
        justify-content: space-around;
        flex-flow:row wrap; 
   }
   header>div{
    
   }
   
  

  /*nav*/
  nav li{
    border:2px solid white;
    border-radius:5px;
  }
  ul{
    padding:10px;
    
  }
nav>ul{
    display: flex;
    flex-flow: row wrap;
    justify-content: space-around;
    
  }
  nav{
    background-color: black;
    margin-top:15px;
  }
  nav li{
    list-style-type: none;
    padding:2px;
    
  

  }
  nav a{
    color:white;
    font-weight: bold;

  }
  nav img{
    fill:black;
    filter:invert(1);
    transform: scale(1.5,1.5);
    margin-right:5px;
  }

  /*main*/
  main section{
    
  }
  main{
    min-height:200px;
    height:700px;
    overflow:scroll;
  }
  main h1:after{
    content:"      ";
    margin-left:5px;
    border:2px solid darkcyan;
 height:30px;
 display:inline-block;
  }
  main h1{
    box-shadow:3px 3px 2px 2px gray;
  }
  /*footer*/
table{
width:100%;
overflow:hidden;
}
main section{
  overflow:auto;
}
header img{
  width:100px;
  height:100px;
}
main>section{
  box-shadow:3px 3px 2px gray;
}


 
  
</style>
<body class="container-fluid">
   <header>
        <div width="10%"><img class="img-rounded-circle" src="images/a1.png" alt="icon"></div>
        <div width="80%" style="position:relative;"><h1>SPORTS COMPLEX</h1></div>
        <div width="10%"><img src="images/a2.jpg" alt="symbol"></div>
   </header>
   <nav>
    <ul>
        <li class="nav-item"><a class="nav-link"href="#"><img src="images/house.svg" alt="">HOME</a></li>
        <li class="nav-item"><a class="nav-link"href="pages/login.php"><img src="images/lock.svg" alt="">LOGIN</a></li>
        <li class="nav-item"><a class="nav-link"href="pages/register.php"><img src="images/unlock.svg" alt="">REGISTER</a></li>
        <li class="nav-item"><a class="nav-link"href="#"><img src="images/shop-window.svg" alt="">SHOP</a></li>

        <li class="nav-item"><a class="nav-link"href="#" data-toggle="modal" data-target="#myModal2"><img src="images/phone.svg" alt="" >CONTACTS</a></li>
        <li class="nav-item"><a class="nav-link"href="#" data-toggle="modal" data-target="#myModal"><img src="images/question.svg" alt="" >ABOUT</a></li>


    </ul>

   </nav>
   <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">ABOUT SPORTS COMPLEX</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <p>This is an iniative to imporve sports in the local regions and helps all to take particpation in sports and improve their skills and end corruption.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

   </div>
   <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">COMMUNICATION</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <p><b>PHONE :</b>63333333333</p>
          <p><b>MAIL :</b>NAG3@GMAIL.COM</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

   </div>
   <main class="row">
        <section id="event" class="col col-md-3 col-sm-12">
            <h1 class="text-center">RECENT EVENTS </h1>
            <table class="container-fluidtable-stripped text-uppercase">
              <tr class="text-primary">
                <th>DATE</th>
                <th>game</th>
                <th>venue</th>
                
                <?php 
                    $a=new mysqli("localhost","jahnavi","jahnagi","project");
                    if ($a->connect_error){
                        die("connection failure");
                    }
                    else{
                      $q="select * from events";
                      if ($x=$a->query($q)){
                            if ($x->num_rows>0){
                              while($r=$x->fetch_array()){
                              echo("<tr>
                                <td>".$r['date']."</td>
                                <td>".$r['game']."</td>
                                <td>".$r['venue']."</td>
                               </tr>");
                              }
                            }
                              else{

                                echo("<tr><th colspan='3'>nothing found</th></tr>");
                              }

                            }

                      }
                    

                ?>

              </tr>


            </table>

        </section>
        <section id="notify" class=" col col-md-6 col-sm-12">
            <h1 class="text-center">NOTIFICATIONS</h1>
            <table class="container-fluidtable-stripped text-uppercase">
              <tr class="text-primary">
                <th>DATE</th>
                <th>game</th>
                <th>venue</th>
                <th>association</th>
                <?php 
                    if ($a->connect_error){
                        die("connection failure");
                    }
                    else{
                      $q="select * from events";
                      if ($x=$a->query($q)){
                            if ($x->num_rows>0){
                              while($r=$x->fetch_array()){
                              echo("<tr>
                                <td>".$r['date']."</td>
                                <td>".$r['game']."</td>
                                <td>".$r['venue']."</td>
                                <td>".$r['assoc']."</td>
                               </tr>");
                              }
                            }
                              else{

                                echo("<tr><th colspan='3'>nothing found</th></tr>");
                              }

                            }

                      }
                    

                ?>

              </tr>


            </table>
        </section>
        <section id="links" class=" col col-md-3 col-sm-12">
            <h1 class="text-center">POPULAR EVENTS</h1>
            <table class="container-fluidtable-stripped text-uppercase">
              <tr class="text-primary">
                <th>DATE</th>
                <th>game</th>
                <th>venue</th>
                <?php 
                    if ($a->connect_error){
                        die("connection failure");
                    }
                    else{
                      $q="select * from events";
                      if ($x=$a->query($q)){
                            if ($x->num_rows>0){
                              while($r=$x->fetch_array()){
                              echo("<tr>
                                <td>".$r['date']."</td>
                                <td>".$r['game']."</td>
                                <td>".$r['venue']."</td>
                                
                               </tr>");
                              }
                            }
                              else{

                                echo("<tr><th colspan='3'>nothing found</th></tr>");
                              }

                            }

                      }
                    

                ?>

              </tr>


            </table>
        </section>

   </main>
   <footer>
   <?php 
      $fi=include "pages/footer.html";
      echo($fi);
     ?>
     </footer>
</body>
    <!-- <script>
        $('document').ready(function(){
          function slide(){
                var a=document.getElementsByTagName("footer")[0];
                var b=a.firstElementChild;
                a.appendChild(b);
                a.removeChild(b);

          }
          setInterval(slide,1000);
            
         
        })

    </script> -->

</html>