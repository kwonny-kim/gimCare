var mysql = require('mysql');
var connection = mysql.createConnection({
    host: 'localhost',
    post: 3000,
    user: 'gimacarry',
    password: 'gimcarry123..',
    database: 'db_gimcarry'
});

module.exports = connection;
