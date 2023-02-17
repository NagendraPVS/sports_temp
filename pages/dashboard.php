<?php session_start()?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="../boot/css/bootstrap.min.css" rel="stylesheet">
    <script src="../jQuery.js"></script>
    <script src="../boot/js/bootstrap.js"></script>
    <link href="/project/pages/a.css" rel="stylesheet">

    <title>
    DASHBOARD
</title>
<style type="text/css">
    header{
        display:flex!important;
        flex-flow:row wrap;
        justify-content:space-around;
    }
    header span:after{
        content:"      ";
    margin-left:5px;
    border:2px solid darkcyan;
 height:30px;
 display:inline-block;
    }
    main{
        min-height:700px;
    }
    header{
        box-shadow:2px 2px 2px gray;
    }
    /* main{
        background-image:url("../images/b.jpg");
        background-repeat:no-repeat;
        background-size:cover;
    } */
    
  footer{
    position: relative;
    bottom:0;
        display: flex;
        flex-flow: row no-wrap;
        justify-content: space-around;
        width:100%;
        overflow: hidden;
    }
    
    footer img{
        border-radius:5px;
        width:200px;
        height: 200px;
        border:2px solid red;
    }
    footer div.subs{
        margin-left:200px;

    }
    footer{
overflow:hidden;
    }
</style>
<body>
  <header>
    <h1>HI 
        <span><?php 
        if (isset($_SESSION['clientid']))
        {
            echo($_SESSION['clientid']);
        }
        else if (isset($_SESSION['associd']))
        {
            echo($_SESSION['associd']);
        }
        else if (isset($_SESSION['adminid']))
        {
            echo($_SESSION['adminid']);
        }

             ?></span>


    </h1>
    <div>
        <img class="img-rounded"src="../images/" width="150px"alt="profile">
    </div> 
    <div>
        <a class="link" href="logout.php">LOGOUT</a>
</div> 
    

</header>
<main><?php
if (isset($_SESSION['clientid']))
        {
            echo(include "client.php");
        }
        else if (isset($_SESSION['associd']))
        {
            echo(include "assoc.php");
        }
        else if (isset($_SESSION['adminid']))
        {
            echo(include "admin.php");
        }
        else{
            echo("something wrong happened \n sry for inconvenience");
        }
?>
</main>

<footer>
    <?php $a=include "footer.html";echo($a);?>

</footer>
<?php 
    if (isset($_SESSION['clientid']) or isset($_SESSION['associd']) or isset($_SESSION['adminid'])){
        echo("hello");
 
    
}
    else{
        
        header("location:login.php");
    }
    ?>
</body>
</html>