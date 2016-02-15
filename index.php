<!doctype html>
<html>
<?php
    $servername = "localhost";
    $username = "juruwolf_jwolfe";
    $password = "Geffrey1!";
    $dbname = "juruwolf_toodal";


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "SELECT * FROM list";
    $result = $conn->query($sql);
?> 

    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Toodal</title>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,300,600,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css">

        <link rel="author" href="humans.txt">
    </head>
    <body>
        <header>
            <button class='new btn'>+ New task</button>
            <h1><span>T</span><span>o</span><span>o</span><span>d</span><span>a</span><span>l</span></h1>
        </header>
        <div class="form_wrap">
            <section class="form new_task">
                <div class="exit">&#x2717;</div>
                <h2 class="section_title">New Task</h2>
                <input type="text" class="text_input">
                <ul class="options_wrap">
                    <li class="option">Personal</li>
                    <li class="option">Work</li>
                    <li class="option">Paperwork</li>
                    <li class="option">Hobbies</li>
                </ul>
                <div class="submit">Submit</div>
            </section>
        </div>
        <div class="screen"></div>
        <section class="progress_wrap">
            <div class="progress_bar daily">
                <h3 class="bar_title">daily goals: <span></span></h3>
                <div class="bar">
                    <div class="bar_inner"></div>
                </div>
            </div>
            <div class="progress_bar weekend">
                <h3 class="bar_title">weekend goals: <span></span></h3>
                <div class="bar">
                    <div class="bar_inner"></div>
                </div>
            </div>
        </section>
        <section class="list ongoing">
            <h2 class="section_title">Ongoing tasks</h2>
            <ul class="task_list">
                <?php 
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo 
                            "<li class='item'>" .
                                "<p class='number " . $row[""] . "'>" . $row["points"] . "</p>" . 
                                "<p class='task'>" . $row["task"] . "</p>" .
                                "<p class='date'>" . $row["timestamp"] . "</p>" .
                            "</li>";
                        }
                    } else {
                        echo "<p class='none'>No tasks!</p>";
                    }
                ?>
            </ul>
        </section>

        <section class="list completed">
            <h2 class="section_title"></h2>
            <div class="item">
                <p class="number"></p>
                <p class="task"></p>
                <p class="date"></p>
            </div>
        </section>

        <script src="js/jquery.min.js"></script>
        <script src="js/main.js"></script>
    </body>

    <?php $conn->close(); ?> 
    
</html>