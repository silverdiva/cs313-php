<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'modules/head.php'; ?>
    <title>CS 313 | 02 Prove: Assignments Page</title>
</head>


<body>
    <header>
        <div id="title">

            <h3>Kimberly Llanos</h3>
            <h1>CS 313:02 W02 Prove (Assignments Page)</h1>
                <?php echo date('l, F j, Y') ?> 
        </div>

        <nav>
            <?php include 'modules/nav.php'; ?>
        </nav>
    </header>

    <main>
        <div id="assignment-landing">
            <h1>Software Engineering II Assignments</h1>
            <ul>
                <li><a href="01-prove.html">Week 1  Prove: Assignment: HELLO WORLD</a></li>
                <li><a href="02-teach.php">Week 2 TEACH Assignment: 3 Custom Divs</a></li>
                <li><a href="index.php">Week 2 Prove Assignment: HOME PAGE & ASSIGNMENTS PAGE</a></li>
                <li><a href="03-teach.php">Week 3 TEACH Assignment: HTML Form & PHP Script & Array</a></li>
                <li><a href="03-prove.php">Week 3 Prove Assignment: Shopping Cart Module</a></li>
                <li><a href="">Week 4 TEACH Assignment: Conference Talk Tables on Heroku Postgres</a></li>
                <li><a href="">Week 4 Prove Assignment: Postgres DB Tables_SQL</a></li>
                <li><a href="scriptures.php">Week 5 TEACH Assignment: Scripture DB & Form (NO CSS)</a></li>
                 <li><a href="05-prove-patientSearch.php">Week 5 TEACH Assignment: Ciropractic Patient DB</a></li>
                  <li><a href="">Week 6 TEACH Assignment</a></li>
                <li><a href="">Week 6 Prove Assignment</a></li>
                <li><a href="">Stay Tuned!!</a></li>
            </ul>
        </div>
    </main>

    <footer>
        <?php include 'modules/footer.php'; ?>
    </footer>
    <!-- JavaScript using jQuery library -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="scripts/scripts.js"></script>
</body>

</html>
