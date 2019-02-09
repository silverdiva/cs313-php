<?php
    $majors = array("CS"=>"Computer Science", "WDD"=>"Web Design and Development",
                    "CIT"=>"Computer Information Technology", "CE"=>"Computer Engineering");
    /*echo "PHP File";*/
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <?php include 'modules/head.php';?>
    </head>

    <body>
        <header>
            <div id="title">
                <title>CS 313 | 05 Teach: Scripture DB & Form </title>
                <h3>Kimberly Llanos</h3>
                <h1>CS 313:02 Week 5 Teach</h1>
            </div>
            <nav>
                <?php include 'modules/nav.php';?>
            </nav>
        </header>
        <main>
            <div id="container">
                <div clas="container-text">
                    <h2>Scripture DB & Form</h2>
                    <h2>Core Requirements</h2>
                    <p>
                        *Create a new database table called "Scriptures." 
                        <br>*Insert scriptures (along with the text of the verse as content) into your database.
                        <br>*Create a PHP page to query db. <br>*Add the following: "Scripture Resources" page heading. Bold ea. scripture verse and chapter separated by a hyphen, then list content of the scripture in quotes.<br>***For more core requirements details, <a href="docs\05-CS313-Teach-INSTRUCTIONS.pdf">click here</a>.
                        <br><br>
                    </p>
                    <h2>Stretch Challenge</h2>
                    <p>
                        *Create a PHP form to search for a book and display all the scriptures in your database that match that book.
                        <br>*Change your results page so that it only lists the book, chapter, and verse of the scripture (not the content), but make that text a link. Have the link lead to a "Scripture Details" page where the user can see the content for the selected scripture.
                        <br>*Build out the Scripture Details page. It should display the reference and the content for the scripture that was clicked.
                        <br>***For more stretch challenges details, <a href="docs\05-CS313-Teach-INSTRUCTIONS.pdf">click here</a>.
                    </p>
                    
                </div>
                
                <div container="05-form">
                    <form action="displayScriptureUser.php" method="post">
                       <h2>Scripture Form</h2>
                        <input type="text" name="Book" placeholder="Book"> <br>
                        <input type="text" name="Chapter" placeholder="Chapter"> <br>
                        <label>Verse</label> <br>
                        
                        <!--add db connect code here//
                        <?php
                        //foreach ($majors as $key=>$value) {
                        //?>
                            <input type="radio" name="Verse" value="<?php 
                            //echo $key ?>">
                            <?php 
                            //echo $value ?> <br>
                            <?php //
                            //}
                            ?>
                                <!--
                                <label>Continents Visited</label> <br>
                                <input type="checkbox" name="Continents[]" value="NA"> North America <br>
                                <input type="checkbox" name="Continents[]" value="SA"> South America <br>
                                <input type="checkbox" name="Continents[]" value="EU"> Europe <br>
                                <input type="checkbox" name="Continents[]" value="AS"> Asia <br>
                                <input type="checkbox" name="Continents[]" value="AF"> Africa <br>
                                <input type="checkbox" name="Continents[]" value="AU"> Australia <br>
                                <input type="checkbox" name="Continents[]" value="AN"> Antarctica <br>
                                -->
                                <textarea rows="4" cols="50" name="Notes">Notes</textarea> <br>
                                <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </main>

        <footer>
            <?php include 'modules/footer.php';?>
        </footer>
        <!-- JavaScript using jQuery library -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </body>

    </html>
