<?php
    /*require 'dbConnect.php';
        $db = get_db();
        */
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <?php include 'modules/head.php'; ?>
        <title>CS 313 | 05 Teach: RAW Scripture Querying</title>
    </head>

    <body>
        <header>
            <div id="title">
                <title>CS 313 | 05 Prove: Scripture DB & Form</title>
                <h3>Kimberly Llanos</h3>
                <h1>CS 313:02 W05 Teach</h1>
                <?php echo date('l, F j, Y') ?>
            </div>

            <nav>
                <?php include 'modules/nav.php'; ?>
            </nav>
        </header>

        <div class="container">
            <form action="" method="post">

                Book: <input type="text" name="book">
                <input type="submit" name="submit" value="Submit">
            </form>


            <?php
if($_POST['book'] != "")
{
    foreach ($db->query('SELECT * FROM scriptures WHERE scriptures_book =\'' . $_POST['book'] . '\'') as $row)
    {
    echo "<strong>" . $row['scriptures_book'] . " " . $row['scriptures_chapter'] . ":" . $row['scriptures_verse'] . " - </strong>";
    echo "<a href='scriptureDetails.php?id=". $row['scriptures_id'] . "'> 'Scripture Details' </a>";
    echo '<br/>';
    }
}

?>
        </div>

        <?php include 'modules/footer.php';?>

    </body>

    </html>
