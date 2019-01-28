<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="CS 313 Landing Page" />
    <meta name="author" content="Kim Llanos">
    <title>CS 313 | 02 Teach: 3 Divs </title>
    <link href="css/main.css" type="text/css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="scripts/scripts.js"></script>
</head>


<body>
    <header>
        <div id="title">
            <h3>Kimberly Llanos</h3>
            <h1>CS 313:02 Week 2 Teach</h1>
        </div>
        <nav>
            <label for="toggle">Show Menu</label>
            <input id="toggle" type="checkbox">
            <ul id="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="assignments.php">Assignments</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div id="container">
            <div clas="container-text">
                <h1>Assignment Notes</h1>
                <p>
                    *create 3 divs with classes or id's
                    <br> *add a button labeled "Click Me" and an onClick function that alerts user with text message "Clicked!"
                    <br> *CSS: hovering over any of the 3 divs causes the text to temporarily become bold
                    <br> *create custom color function: add user-input textbox labeled "Change color" that sets the color of the first div
                    <br> *add button to toggle the visibility of the third div. using jQuery to make it slowly fade in and fade out
                </p>
            </div>
            <div container="02teach-divs">
                <div id="div1" class="div-first hover-bold">This is the first div.</div>
                <div id="div2" class="div-later hover-bold">This is the second div.</div>
                <div id="div3" class="div-later hover-bold">This is the third div.</div>

                <button onclick="clickMe();">Click me!</button><br/>

                <label for="txtColor">Color:</label> <input type="text" id="txtColor" placeholder="#cccccc"><br />

                <button onclick="changeColor();">Change color</button>
            </div>
        </div>
    </main>

    <footer>
        <div id="footer">
            <ul class="footer">
                <p>
                    <a href="https://content.byui.edu/integ/gen/b2c03083-d8f7-4e7a-bb41-a5500ff41a44/0/cs313syllabus.html">CS 313:02 </a>
                </p>
                <p>
                    Winter 2019
                </p>
                <p>
                    Bro. Wilde
                </p>
            </ul>
            <p id="copy">Content &copy; 2019</p>
            <p id="kim">Kimberly Llanos</p>
            <p id="byui"><a href="https://www.byui.edu">BYU-Idaho</a></p>
        </div>
    </footer>


    <!-- JavaScript using jQuery library -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </body>

</html>
