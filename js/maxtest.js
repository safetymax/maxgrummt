var connection = new WebSocket("ws://maxgrummt.tech/maxtest.php/to/ws");

connection.onopen = function(){
console.log("connected");
}