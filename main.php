
<!DOCTYPE html>
<html>
    <head>
        <title>login form</title>
     
    </head>
    <body>

           
    <form action="" method="post">
        <h1>log in</h1>
        <div class="input"><input type="text" placeholder="username" name="username"  required></div>
        <div class="input"><input type="password" placeholder="password" name="password"required></div>
        <div class="rember">
           <label for=""> <input type="checkbox" name="checkbox">Remember me </label> 
           <a href="33">Forget password</a><div>
            <button class="btn" type="submit">Login</button>
            <div class="rig"><p>Dont have an account <a href="Regster"></a></p></div>
    </form>
    <?php
    
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
       echo $te=$_POST['username'];
        echo $pas=$_POST['password'];
        
        
    }
    $name="azad";
    $age=23;
    echo "his name".$name."amd ahe".$age;
    $a=array(2,8.9,"ee");
    foreach ($a as $index) {
        # code...
        echo $index."<br/>";
    }

     ?>
    
    </body>
</html>
