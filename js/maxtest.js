var url = document.URL;
url = url.substring(url.indexOf(':'));
url = 'ws'+url;

var connection = new WebSocket(url, ['newbound']);

connection.onopen = function(){
    console.log("CONNECTED!");
}