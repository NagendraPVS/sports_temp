<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="../boot/css/bootstrap.min.css" rel="stylesheet">
    <script src="../jQuery.js"></script>
    <script src="../boot/js/bootstrap.js"></script>
<title>
 REGISTER
</title>
<style type="text/css">
   form{
    
   width:80%;

   padding:15px;
   margin:auto;
   position: absolute;
   top:50%;
   left:50%;
   transform: translate(-50%,-50%);
    margin-top:25px
   }
  @media screen and (min-width:768px) {
    form{
        width:50%;
    }
    
  }
  

</style>
<body>
    <form action="" method="post"class="">
        <fieldset><legend class="text-center">CLIENT REGISTERATION</legend>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label class="form-label" for="">NAME</label>
                <input required  class="form-control" name="name"type="text">
            </div>
            <div class="form-group col-md-6">
                <label class="form-label" for="">ID</label>
                <input required  class="form-control" name="id"type="text">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label class="form-label" for="">PIN</label>
                <input required  class="form-control" name="pin"type="number" min="6">
            </div>
            <div class="form-group col-md-6">
                <label class="form-label" for="">VILLAGE</label>
                <input required  class="form-control" name="village"type="text">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label class="form-label" for="">COLLEGE</label>
                <input required  class="form-control" name="college"type="text">
            </div>
            <div class="form-group col-md-6">
                <label class="form-label" for="">MALE</label>
               <select class="form-control" name="gender" id="">
                    <option value="none">NONE</option>
                    <option value="male">MALE</option>
                    <option value="female">FEMALE</option>

               </select>
                    
                        
            
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label class="form-label" for="">PASSWORD</label>
                <input required  class="form-control" name="password"type="text">
            </div>
            <div class="form-group col-md-6">
                <label class="form-label" for="">RE-ENTER PASSWORD</label>
                <input required  class="form-control" name="pass2"type="text">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input required  class="form-control btn-danger" type="RESET">
            </div>
            <div class="form-group col-md-6">
                <input required  class="form-control btn-success" type="submit" value="REGISTER">
            </div>
        </div>
    </fieldset>
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD']=='POST'){
              $a=new mysqli("localhost","jahnavi","jahnagi","project");
              if ($a->connect_error){
                  die("connection failure");
              }
              else{
                $name=$_POST['name'];
                $id=$_POST['id'];
                $password=$_POST['password'];
                $pin=$_POST['pin'];
                $village=$_POST['village'];
                $college=$_POST['college'];
                $gender=$_POST['gender'];
                $q="insert into client
                values('$name','$id','$password',$pin,'$village','$college','$gender')";
                if ($x=$a->query($q)){
                    echo("registered-sucessfully");
                    $a->close();
                    header("location:login.php");
            }   
                else{
                    echo("unsucessfully");
                }
        }}
        else{
           echo("helloword");
        }
    ?>
</body>
</html>