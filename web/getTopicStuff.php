<?php
require "getDB.php";
$db = get_db();
//$q = $_REQUEST["q"];
$q = 'all'; // this is hardcoded in
if ($q != "all"){
$statement = $db->prepare("SELECT scripture_id, book, chapter, verse, content FROM scriptures WHERE topic='$q'");
$statement->execute();
}
else{
    $statement = $db->prepare("SELECT scripture_id, book, chapter, verse, content FROM scriptures");
    $statement->execute();    
}
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
    $s_id = $row['scripture_id'];
    $book = $row['book'];
    $chapter = $row['chapter'];
    $verse = $row['verse'];
    $content = $row['content'];
 
    $topics = $db->prepare("SELECT name
                            FROM topic
                            INNER JOIN topic_to_scripture_lookup
                            ON topic_to_scripture_lookup.topic_id = topic.topic_id
                            WHERE topic_to_scripture_lookup.scripture_id = $s_id");
        $topics->execute();
        $topicslist = '';
		while ($row2 = $topics->fetch(PDO::FETCH_ASSOC))
		{
            $topicslist .= $row2['name'] . ' ';
            //$topicslist .= 'steve ';
        }
        
    echo "<div class='postbox'><div class='postboxhead'><span class='usertext'>$book $chapter:$verse - $topicslist</span></div><span class='posttext'>$content</span></div>";
}
?>