
<!DOCTYPE html>
<html>
    <head>
        <title>login form</title>
        <link href="css/style.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
        <style> body{
            background-color: whitesmoke;   
          }
            #mother{
            width: 100%;
            font-size:20px;
            }
   main{
      float: right;
      border: 1px solid gray;
      padding: 5px;
   }
   input{
    padding:4px;
    border :2px solid black;
    text-align:center;
   }
   aside{
    text-align:center;
    width: 300px;
    float: left;
    border :1px solid black;
    padding: 10px;
    font-size:20px;
    background-color:silver;
    color:white;
   }
 
   lable{
     float: left;
     padding-top:9px;
   }
   #tb1{
    width: 890px;
    font-size:20px;

   }
   #tb1 td{
     background-color:silver;
      color:black;
      font-size:10px;
       padding:10px;
   }
   aside button{
    width: 190px;
    padding:8px;
    margin-top:20px;
    font-size:8px;
     font-weight:8px;
   }

        </style>
     
    </head>
    <body>

           <div id="mother">
    <form action="" method="post">
        <aside>
           <div id="div"> 
            <img src="https://www.google.com//url?sa=i&url=https%3A%2F%2Fwww.rawpixel.com%2Fsearch%2Findian%2520student&psig=AOvVaw0LVuxpbQWKaDeCROf99Tz3&ust=1759696071438000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCPjJ6oGWi5ADFQAAAAAdAAAAABAE"  alt="logo" width="100px" >
            <h3>logoo </h3>
            <lable> id</lable><br>
            <input type="text"  name="id"  id="id" required><br>
            <lable> name </lable><br>
            <input type="text"  name="name"  id="name" required><br>
             <lable>address </lable><br>
            <input type="text" name="address"  id="address" required><br><br>
            <button name="add">add student</button>
            <button name="del">delet student</button>
           </div>
             </aside>
<!--  display data-->
        <main>
<table id="tb1">
<tr>
    <td>id</td>
     <td>name</td>
      <td>address</td>
</tr>
</table>

        </main>
    </form>
</div>
    <?php
    
    
     ?>
    
    </body>
</html>
