<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/student.css">
    <title>Result</title>
    <style>
        body{
    margin: 0;
    font-family: 'Roboto', sans-serif;  

}
.container {
    margin: 5% 10%;
}

.title {
    font-size: 50px;
    text-align: center;

}

.details{
    font-size: 20px;
    letter-spacing: 0.1em;
}

.main{
    font-size: 18px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    padding: 20px 25%;
}

.button{
    text-align: center;
}

.main p{
    text-align: center;
}
.main p:nth-child(1) {
    font-weight: bold;
}

.result p{
    font-size: 20px;
}

.error {
    color: red;
    margin: 30px 0 0 30vh;
}

/* hide buttom */
@media print {
    .button {
        display: none;
    }
}
</style>
</head>
<body>
    <?php
    
    foreach($i as $row)
        {
            $p1 = $row->m1;
            $p2 = $row->m2;
            $p3 = $row->m3;
            $p4 = $row->m4;
            $p5 = $row->m5;
            $name = $row->username;
            $rn = $row->rn;
            $class=$row->class;
        }
       
    ?>

    <div class="container">
        <div class="details">
            <span>Name:</span> <?php echo $name ?> <br>
            <span>Class:</span> <?php echo $class ?> <br>
            <span>Roll No:</span> <?php echo $rn; ?> <br>
        </div>

        <div class="main">
            <div class="s1">
                <p>Subjects</p>
                <p>Paper 1</p>
                <p>Paper 2</p>
                <p>Paper 3</p>
                <p>Paper 4</p>
                <p>Paper 5</p>
            </div>
            <div class="s2">
                <p>Marks</p>
                <?php echo '<p>'.$p1.'</p>';?>
                <?php echo '<p>'.$p2.'</p>';?>
                <?php echo '<p>'.$p3.'</p>';?>
                <?php echo '<p>'.$p4.'</p>';?>
                <?php echo '<p>'.$p5.'</p>';?>
            </div>
        </div>


        <div class="button">
            <button onclick="window.print()">Print Result</button>
        </div>
    </div>
</body>
</html>