<?php
    $majors = array("CS"=>"Computer Science", "WDD"=>"Web Design and Development",
                    "CIT"=>"Computer Information Technology", "CE"=>"Computer Engineering");

    echo "PHP File";

?>


<!DOCTYPE html>
<html lang="en">

<head>
   <?php include 'modules/head.php';?>
</head>


<body>
    <header>
        <div id="title">
            <h3>Kimberly Llanos</h3>
            <h1>CS 313:02 Week 3 Teach</h1>
        </div>
        
        <nav>
            <?php include 'modules/nav.php';?>
        </nav>
    </header>

    <main>
        <div id="container">
            <div clas="container-text">
                <h2>Core Requirements</h2>
                <p>
                    *Create an HTML form.
                    <br> *Create a PHP script to handle this form, so that when the form is submitted, it captures the form data and produces a web page that displays form data.
                    <br> *Use the POST method for your form submission.
                    <br> *Add to your form a user-select checkbox list. Modify your PHP page to read and display this list.
                    <br> ***For more core requirements details, <a href="docs\03-CS313-Teach-INSTRUCTIONS.pdf">click here</a>.
                    <br><br>
                </p>

                <h2>Stretch Challenge</h2>
                <p>
                    *Change your HTML to PHP.
                    <br> *Replace hardcoding with a PHP array that contains the data, then loop over this array to generate radio buttons for the data.
                    <br> *Set the data value to an id or or similar code (e.g., "na" instead of "North America").
                    <br>* In your PHP form handler (i.e., the results page), create a map/dictionary that you can use to convert from the id to the text you want to display.
                    <br>*When looping through the values to display them, look them up in your map to get the display text.
                    <br> ***For more stretch challenges details, <a href="docs\03-CS313-Teach-INSTRUCTIONS.pdf">click here</a>.
                </p>
            </div>
                
           
            <div container="03-form">
                    <form action="displayuser.php" method="post">
                    <input type="text" name="Name" placeholder="Name"> <br>
                    <input type="text" name="Email" placeholder="Email"> <br>
                    <label>Major</label> <br>
                   
                     <?php
                    foreach ($majors as $key=>$value) {

                    ?>
                        <input type="radio" name="Major" value="<?php echo $key ?>">
                        <?php echo $value ?> <br>
                        <?php
                    }
                ?>
                            <label>Continents Visited</label> <br>
                            <input type="checkbox" name="Continents[]" value="NA"> North America <br>
                            <input type="checkbox" name="Continents[]" value="SA"> South America <br>
                            <input type="checkbox" name="Continents[]" value="EU"> Europe <br>
                            <input type="checkbox" name="Continents[]" value="AS"> Asia <br>
                            <input type="checkbox" name="Continents[]" value="AF"> Africa <br>
                            <input type="checkbox" name="Continents[]" value="AU"> Australia <br>
                            <input type="checkbox" name="Continents[]" value="AN"> Antarctica <br>
                            <textarea rows="4" cols="50" name="Comments">Comments</textarea> <br>
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
