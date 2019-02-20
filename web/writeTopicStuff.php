<?php
require "getDB.php";
$db = get_db();
$book = $_REQUEST["book"];
$chapter = $_REQUEST["chapter"];
$verse = $_REQUEST["verse"];
$content = $_REQUEST["content"];
$topic1 = $_REQUEST["topic1"];
$topic2 = $_REQUEST["topic2"];
$topic3 = $_REQUEST["topic3"];



$statement = $db->prepare("INSERT INTO scriptures (book, chapter, verse, content)
                           VALUES ('$book', $chapter, $verse, '$content') RETURNING id");
$statement->execute();
$newId = $db->lastInsertId("scripture_id_seq");
// $newId = $statement->fetchAll(PDO::FETCH_ASSOC);
// // $statement = $db->prepare("SELECT lastval()");
// // $statement->execute();
// // $newId = $statement->fetchAll(PDO::FETCH_ASSOC);
echo "newid: " . $newId;
if ((bool)$topic1) {
  $topicTable = $db->prepare("INSERT INTO topic_to_scripture_lookup (topic_id, scripture_id)
                              VALUES (1, (int)$newId)");

  $topicTable->execute();
}
if ((bool)$topic2) {
  $topicTable = $db->prepare("INSERT INTO topic_to_scripture_lookup (topic_id, scripture_id)
                              VALUES (2, (int)$newId)");

  $topicTable->execute();
}
if ((bool)$topic3) {
  $topicTable = $db->prepare("INSERT INTO topic_to_scripture_lookup (topic_id, scripture_id)
                              VALUES (3, (int)$newId)");

  $topicTable->execute();
}
?>
