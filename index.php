<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        *{
            padding: 5px;
        }
        .container{
            border: 1px dashed red;
            padding: 10px;
            width: 600px;
        }
        .submit-button{
            background-color: orange;
            width: 500px;
        }
    </style>
</head>
<body>
        <div class="container">
            <form action="result.php" method="post">
            <div class="fname">
                <label for="fullname">Name</label>
                <input type="text" name ="name" class="input-name" id="fullname">
            </div>
            <div class="club">
                <label for="clubapply">Club you want to apply</label>
                <select name="clubs" id="clubapply">
                    <option value="Robotic Club">Robotic Club</option>
                    <option value="Dance Club">Dance Club</option>
                    <option value="website design club">Website design club</option>
                    <option value="singing club">Singing club</option>
                </select>
            </div>

            <div class="time">
            Betime for you
            <input type="radio" name="time" value="Saturday mornings"> Saturday mornings
            <input type="radio" name="time" value="Saturday affernoons"> Saturday affernoons<br>
            <input type="radio" name="time" value="Sunday afternoons"> Sunday afternoons<br>
            </div>

            
            <div class="skills">
                <div class="row"> 
                    Yours skill
                    <div class="col-4">
                        <input type="checkbox" name="bestcoder" value="the best coder"> the best coder<br>
                        <input type="checkbox" name="goodarts" value="good in arts"> good in arts<br>
                        <input type="checkbox" name="superstar" value="a super star"> a super star<br>
                        <input type="checkbox" name="crazydancer" value="a crazy dancer">a crazy dancer
                    </div>
                    <div class="col-4">
                        <input type="checkbox" name="singer" value="singer">singer<br>
                        <input type="checkbox" name="gooddesign" value="good in design">good in design<br>
                        <input type="checkbox" name="besteater" value="the best eater">the best eater<br>
                        <input type="checkbox" name="goodspeeches" value="good in speeches">good in speeches
                    </div>
                </div>
            </div>

            <button type="submit" class="submit-button">SUBMIT !</button>
        </form>
        </div>
    </body>
</html>