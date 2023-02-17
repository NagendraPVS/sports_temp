

    <style type="text/css">
    .bus{
        display:flex;
        flex-flow:row wrap;
        justify-content: space-around;
        
    }
   
    .bus h1:after{
        content:"      ";
    margin-left:5px;
    
    border:2px solid darkcyan;
 height:30px;
 display:inline-block;
    }
    .bus h1{
        box-shadow:2px 2px 2px gray;
    }
    .input-group{
        margin:15px;
    }
    
    </style>
    <title>
</title>
    <section class="bus">
   <section>
        <h1>PUSH NOTIFICATION</h1>
        <form action="<?php echo($_SERVER['PHP_SELF'])?>" method="post">
            <div class="input-group">
              
                    <label for="date" class="input-group-text form-label">Date</label>
                
                <input type="text" name="date" id="date"class="form-control">
            </div>
            <div class="input-group">
              
                <label for="game" class="input-group-text form-label">game</label>
            
            <input type="text" name="game"id="game"class="form-control">
        </div>
        <div class="input-group">
              
            <label for="venue" class="input-group-text form-label">venue</label>
        
        <input type="text" name="venue"id="venue"class="form-control">
    </div>
    <div class="input-group">
              
        <label for="assoc" class="input-group-text form-label">association</label>
    
    <input type="text" name="assoc"id="assoc"class="form-control">
</div>
<div class="input-group">
              

<input type="reset" class="btn-danger form-control">
<input type="submit" value="post"class="btn-success form-control">

</div>
            

        </form>
   </section>
 
   <section>
<H1>GRANT CLIENT ACCESS</H1>
   </section>
</section>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
              $a=new mysqli("localhost","jahnavi","jahnagi","project");
              if ($a->connect_error){
                  die("connection failure");
              }
              else{
                if (isset($_POST['date'])){
              $date=$_POST['date'];
              $game=$_POST['game'];
              $venue=$_POST['venue'];
              $assoc=$_POST['assoc'];
                $q="insert into notify
                values('$date','$game','$venue','$assoc')";
                if ($x=$a->query($q)){
                    echo("registered-sucessfully");
                   
                } 
            }   
                else{
                    echo("unsucessfully");
                }
        }}
        else{
           echo("helloword");
        }
        ?>