var connection = new WebSocket("ws://localhost");

connection.onopen = function(){
console.log("connected");
}