var connection = new WebSocket("localhost");

connection.onopen = function(){
console.log("connected");
}