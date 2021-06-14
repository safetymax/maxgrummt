

const http = require("http");
const websocketServer = require("websocket").server;
const httpServer = http.createServer();
httpServer.listen(9090, () => console.log("Listening on 9090"));

const clients = {};
const wsServer = new websocketServer({
    "httpServer": httpServer

});

wsServer.on("request", request => {
    //connect
    const connection = request.accept(null, request.origin);
    connection.onopen = function(data){
        console.log("Connection opened with "+connection);
    }
    connection.on("close", () => console.log("Connection closed..."));

    connection.on("message", message => {
        const result = JSON.parse(message.utf8Data);
        //received  from client
        console.log(result);

        if(result.method == "received"){
            console.log("message got received");

        }

    });

    const clientId = Math.floor(Math.random()*1000000000);
    clients[clientId] = {
        "connection": connection
    
    };

    const payload = {
        "method": "connect",
        "clientId": clientId

    }

    //send back connection verification
    connection.send(JSON.stringify(payload));
});