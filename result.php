<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            border: 1px dashed red ;
            width: 700px;
            padding: 10px;
            margin: auto;
            text-align: center;
        }
        .thxyou{
            font-size: 40px;
            font-weight: bold;
            text-align: center;
        }
        .club_skills{
            text-align: center;
            font-size: 20px;
        }
        img{
            width: 50%;
            height: 50%;
        }

    </style>
</head>
<body>
    <div class="container">
       
    <img src="https://cdn.pixabay.com/photo/2017/07/31/16/13/award-2558670_640.jpg" alt="error" >

        <div class="thxyou">
        Thx you <?php if(isset($_POST["name"])) {echo $_POST["name"]; }?> !!<br>
        </div>

        <div class="club_skills">
        We received your application for the 
        <?php if(isset($_POST["clubs"])) {echo $_POST["clubs"]; }?>
        </div>

        <div class="club_skills">
        You are 
        <?php if(isset($_POST["bestcoder"])) {echo $_POST["bestcoder"]; }?> 
        <?php if(isset($_POST["goodarts"])) {echo $_POST["goodarts"]; }?> 
        <?php if(isset($_POST["superstar"])) {echo $_POST["superstar"]; }?> 
        <?php if(isset($_POST["crazydancer"])) {echo $_POST["crazydancer"]; }?> 
        <?php if(isset($_POST["singer"])) {echo $_POST["singer"]; }?> 
        <?php if(isset($_POST["gooddesign"])) {echo $_POST["gooddesign"]; }?> 
        <?php if(isset($_POST["besteater"])) {echo $_POST["besteater"]; }?> 
        <?php if(isset($_POST["goodspeeches"])) {echo $_POST["goodspeeches"]; }?> 
        </div>

        <div class="club_skills">
        You will be avaible on
        <?php if(isset($_POST["time"])) {echo $_POST["time"]; }?>
        </div>

    </div>
</body>
</html>