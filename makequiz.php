<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="nav">
        <a href="index.html" class="logout">
            <button id="logout">Log Out</button>
        </a>
        <div class="location">
            <form action="" >
                <select name="locations" id="locations">
                    <option value="h20">H20, Purmerend</option>
                    <option value="horizon">Horizon, Alkmaar</option>
                    <option value="bit">bit, Amsterdam</option>
                </select>
                <input type="submit" value="✓" id="l-submit">
            </form>
        </div>
    </div> 
    <br> <br> <br>
    <div class="form">
    <form action="queryhandler.php" method="post">
    <label for="NamePOI">Name of the Quiz: </label> <br>
    <input type="text" id="Namequiz" name="NamePOI" placeholder="Name of the quizz"> <br> <br>
    <label for="L-Description">Little description:</label> <br> 
    <input type="text" id="L-description" name="L-description" placeholder="Description:"> <br> <br>
    <label for="questions">questions:</label> <br> 
    <textarea id="questions" name="questions" rows="10" cols="40"></textarea>
   <a href="quizhandler.php"><input type="submit" value="Add"></a> 
    </div>
</form>
</body>
</html>