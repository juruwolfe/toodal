<!doctype html>
<html>
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
            <ul class="task_list" id="sortable">
                <li class="item">
                    <p class="number">2</p>
                    <p class="task">This is a test task I heard</p>
                    <p class="date">Feb. 3, 2016</p>
                </li>
                <li class="item">
                    <p class="number">4</p>
                    <p class="task">This is a test task I heard</p>
                    <p class="date">Feb. 3, 2016</p>
                </li>
                <li class="item">
                    <p class="number">1</p>
                    <p class="task">This is a test task I heard</p>
                    <p class="date">Feb. 3, 2016</p>
                </li>
            </ul>
        </section>

        <section class="list completed">
            <h2 class="section_title"></h2>
        </section>

        <script src="js/jquery.min.js"></script>
        <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="js/main.js"></script>
    </body>
    
</html>