
var io = require('socket.io')();
var mysql = require('mysql');

var connection = mysql.createConnection({
	host : 'localhost',
	user : 'root',
	password : ''
});
connection.connect();

io.on('connection', function(socket) {
});
io.listen(443);