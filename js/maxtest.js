var connection = new WebSocket("http://maxgrummt.tech/maxtest.php");

connection.onopen = function(){
console.log("connected");
}