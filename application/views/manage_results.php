<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/home.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="./css/form.css">
    <title>Dashboard</title>
    <style>
        input,select,option{
    width: 100%;
    padding: 12px 20px;
    margin: 10px 0;
    box-sizing: border-box;
    display: block;
}

input[type=text],input[type=password],select{
    background-color: #474b4f;
    color: white;
    border: none;
    font-size: 100%;
    letter-spacing: 0.2em;
}

input[type=submit]{
    background-color: #474b4f;
    color: white;
    border: none;
    transition-duration: 0.4s;
    cursor: pointer;
    font-size: 16px;

}

input[type=submit]:hover{
    background-color: #86c232;
    color: white
}

fieldset{
    font-size: 20px;
    border-radius: 10px;
    border-width: 5px;
    border-style: solid;
    padding: 20px;
    margin: 0 15%;
}

.error {
    color: red;
    margin: 30px 0 0 30vh;
}
body{
    margin: 0;
    font-family: 'Roboto', sans-serif;
    background-color: #222629;
    color: white;
}

.title{
    display: grid;
    grid-template-rows: 50px;
    grid-template-columns: 150px 1fr 150px;
    align-items: center;
    padding: 20px 0;
    text-align: center;
}
/* title grid */
.logo{
    width: 150px;
    height: auto;
}
.heading{
    font-size: 60px;
}


/*  */
.main{
    display: grid;
    align-items: center;
    font-size: 20px;
    padding-top: 80px;
}

.main p{
    margin: 0;
    font-size: 25px;
    font-family: monospace;
    letter-spacing: 3px;
    line-height: 3;
}


/* navigation bar */
ul{
    list-style-type: none;
    margin: 20px 0 0 0;
    padding: 0;
    display: flex;
    overflow: hidden;
    justify-content: space-evenly;
}


li a,.dropbtn{
    display: inline-block;
    text-decoration: none;
    color: white;
    height: 40px;
    display: flex;
    align-items: center;
    padding: 5px 50px;
}

li a:hover, .dropdown:hover {
    background-color: #61892f
}

li.dropdown {
    display: inline-block;
}

.dropdown-content{
    display: none;
    position: absolute;
    background-color:  #474b4f;
}

.dropdown-content a {
    color: white;
    text-decoration: none;
    display: flex;
    align-items: center;

}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>
        
    <div class="title">
        <a href="dashboard.php"><img src="./images/logo1.png" alt="" class="logo"></a>
        <span class="heading">Dashboard</span>
        <a href="<?php echo base_url()."index.php/Main/logout"; ?>" style="color: white"><span class="fa fa-sign-out fa-2x">Logout</span></a>
    </div>

    <div class="nav">
        <ul>
            <li class="dropdown" onclick="toggleDisplay('1')">
                <a href="" class="dropbtn">Classes &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="1">
                    <a href="<?php echo base_url()."index.php/Main/add_class"?>">Add Class</a>
                    <a href="<?php echo base_url()."index.php/Main/manage_class"?>">Manage Class</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('2')">
                <a href="#" class="dropbtn">Students &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="2">
                    <a href="<?php echo base_url()."index.php/Main/add_stud"; ?>">Add Students</a>
                    <a href="<?php echo base_url()."index.php/Main/manage";?>">Manage Students</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('3')">
                <a href="#" class="dropbtn">Results &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="3">
                    <a href="<?php echo base_url()."index.php/Main/add_result"; ?>">Add Results</a>
                    <a href="<?php echo base_url()."index.php/Main/manage_results";?>">Manage Results</a>
                </div>
            </li>
        </ul>
    </div>

    <div class="main">
        <form action="<?php echo base_url()."index.php/Main/manage_res"; ?>" method="post">
            <fieldset>
            <legend>Enter Marks</legend>

            <select name="class" value="<?php echo set_value('class');?>">
                    <option selected disabled>select class</option>
                    <?php  
                    foreach ($h->result() as $row)  
                    {  
                        ?> 
                        <option  value=<?php echo $row->class;?>><?php echo $row->class;?></option>  
                         
                        </tr>  
                    <?php }  
                    ?>  
                </select>
                <input type="text" name="rno" value="<?php echo set_value('rno');?>" placeholder="Roll No">
                <input type="text" name="p1" id="" value="<?php echo set_value('p1');?>" placeholder="Paper 1">
                <input type="text" name="p2" id="" value="<?php echo set_value('p2');?>" placeholder="Paper 2">
                <input type="text" name="p3" id="" value="<?php echo set_value('p3');?>" placeholder="Paper 3">
                <input type="text" name="p4" id="" value="<?php echo set_value('p4');?>" placeholder="Paper 4">
                <input type="text" name="p5" id="" value="<?php echo set_value('p5');?>" placeholder="Paper 5">
                <input type="submit" value="Submit">
            </fieldset>
        </form>
    </div>

    <!-- <div class="footer">
        <span>Designed & Coded By Jibin Thomas</span>
    </div> -->
    
</body>
</html>
