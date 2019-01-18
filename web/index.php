<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="CS 313 Landing Page" />
    <meta name="author" content="Kim Llanos">
    <title>CS 313 | Home </title>
    <link href="css/main.css" type="text/css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>


<body>
   
    <header>
        <div id="title">
            <h3>Kimberly Llanos</h3>
            <h1>CS 313:02 Website</h1>
        </div>
        
        <nav>
            <?php include 'modules/nav.php';?>
        </nav>
        
    </header>

    <main>
        <div id="container">
            <div class="container-img">
                <img src="images/pismo-mom-girls.jpg" alt="Family" title="girls">
            </div>

            <div clas="container-text">
                <h1>About Me</h1>
                <p>
                    I enjoy learning new things and always endeavor to add to my skill set - I believe that one should never stop learning.
                    <br><br> I enjoy training, mentoring and collaborating within a team environment. I believe that work/life balance is important, but also subscribe to giving 100% of myself to my endeavors.
                    <br><br> Communication is key and success is driven by enthusiasm and commitment!
                </p>
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
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="scripts/scripts.js"></script>
</body>
</html>
