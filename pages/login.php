<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="../boot/css/bootstrap.min.css" rel="stylesheet">
    <script src="../jQuery.js"></script>
    <script src="../boot/js/bootstrap.js"></script>
<title>
    LOGIN
</title>
<style type="text/css">
    form>fieldset>*{
        margin-top:15px;


    }
    form *{
        text-transform: capitalize;
    }
    form{
        width:40%;
        max-width:400px;
        min-width:350px;
        position: absolute;
        top:50%;
        left:50%;
        transform: translate(-50%,-50%);
        /* border:2px solid red; */
        padding:15px;
        
    }
    legend{
        text-align: center;
    }
    input[type="submit"]{
        float:right;

    }

</style>
<body class="">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
        <fieldset>
            <?php if (isset($_POST['id'])){echo("<legend class='text-danger'>invalid credentials</legend>");}else{echo("<legend>enter your credentials</legend>");}?>
        
       <div class="input-group">
                <img src="../images/lock.svg" class="input-group-text"alt="">
                 <label class="input-group-text" for="id">id</label>
                 <input id="id"name="id"type="text" class="form-control">
       </div>

       <div class="input-group">
        <img src="../images/lock.svg" class="input-group-text"alt="">
         <label class="input-group-text" for="password">password</label>
         <input id="password"name="password"type="text" class="form-control">
</div>


      <select class="form-control" style="width=100%"class="form-select" name="cred" id="">
            <option value="none">none</option>
            <option value="user">user</option>
            <option value="assoc">association</option>
            <option value="admin">admin</option>
      </select><br>
      <div class="input-group">
        <h4 class="text-inline">new user?<a href="register.php">Register Here</a></h4>
      <input type="submit" style="color:white;float:right;font-weight:bold;" class="btn btn-success btn-outline-primary"value="LOGIN">
      </div>
        <!-- <button class="dropdown-toggle">choose</button>
        <ul class="dropdown">
            <li>hello</li>
        </ul> -->
       
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
            $id=$_POST['id'];
            if ($_POST["cred"]=='user'){
                
                $q="select name,password from client where id='$id'";
                if ($x=$a->query($q)){
                    $y=$x->fetch_array();
                    if($_POST['password']==$y['password']){
                    session_destroy();
                    session_start();
                    $_SESSION['clientid']=$y['name'];
                    header("location:dashboard.php");
                    }
                }
                
            }
            else if($_POST['cred']=='assoc'){
                $q="select name,password from assoc where id='$id'";
                if ($x=$a->query($q)){
                    $y=$x->fetch_array();
                    if($_POST['password']==$y['password']){
                   
                    session_destroy();
                    session_start();
                    $_SESSION['associd']=$y['name'];
                    header("location:dashboard.php");

                    }
                }

            }
            else if($_POST['cred']=='admin'){
                $q="select name,password from admin where id='$id'";
                if ($x=$a->query($q)){
                    $y=$x->fetch_assoc();
                    if($_POST['password']==$y['password']){
                    session_destroy();
                    session_start();
                    $_SESSION['adminid']=$y['name'];
                    header("location:dashboard.php");

                    }
                    else{

                    }
                }
            }
           


        }
        
    }
    
    ?>
</body>
</html>