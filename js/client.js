let ws = new WebSocket("ws://localhost:9090");
let clientId;

ws.onmessage = message => {
    const response = JSON.parse(message.data);
    console.log(response);

    if (response.method = "connect") {
        clientId = response.clientId;
        ws.send(JSON.stringify({
            "method": "received",
            "clientId": clientId
        }));
    }
}