//document.onload = main();
function main(){
    //document.getElementById("topicselect").addEventListener("change", dbLookup);
    dbLookup(); //hardcoded
    document.getElementById("btn_i").addEventListener("click", dbWrite);
}
function dbLookup(){
    //alert(document.getElementById("topicselect").value);
    //var topic = document.getElementById("topicselect").value;
    var topic = 'all';
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            //alert(this.responseText);
            document.getElementById("output").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "getTopicStuff.php?q=" + topic, true); // '?' is the start and '&' is next var
    xmlhttp.send();
}
function dbWrite(){
    var book = document.getElementById("book_i").value;
    var chapter = document.getElementById("chapter_i").value;
    var verse = document.getElementById("verse_i").value;
    var content = document.getElementById("content_i").value;
    var topic1 = document.getElementById("faith").checked;
    var topic2 = document.getElementById("hope").checked;
    var topic3 = document.getElementById("charity").checked;


    //alert("book=" + book + " chapter=" + chapter + " verse=" + verse + " content=" + content + " topic=" + topic);

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            //document.getElementById("output").innerHTML = this.responseText;
        } else {
          console.log(this.responseText)
        }
    };
    xmlhttp.open("GET", "writeTopicStuff.php?book=" + book + "&chapter=" + chapter + "&verse=" + verse + "&content=" + content + "&topic1=" + topic1 + "&topic2=" + topic3 + "&topic3=" + topic3, true); // '?' is the start and '&' is next var
    xmlhttp.send();
    enter();
}
function enter(){
    // document.getElementById("book_i").value = '';
    // document.getElementById("chapter_i").value = '';
    // document.getElementById("verse_i").value = '';
    // document.getElementById("content_i").value = '';
    // //document.getElementById("topic_i").value = '';
    dbLookup();
}
