var mysql = require('mysql');
var TABLE = 'users';
//mysqlクライアント作成
var client = mysql.createConnection({
  user: 'root',
  password: '',
  database: 'memo'
});

//データの検索
client.query(
  'select * from ' + TABLE,
  function (err, result, field) {
    if (err) {
      throw err;
    }

    console.log(result);
    // console.log(field);
    client.end();
  }
);