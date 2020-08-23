const express = require('express')
const app = express()

module.exports = {
  path: '/server',
  handler: app
}

app.get('/hello', (req, res) => {
  const mysql = require('mysql')
  const connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    database: 'memo',
    password: ''
  })
  connection.connect()
  let sql = 'select * from users'
  connection.query(sql, function (error, row, fields) {
    if (error) console.log(error);
    let dat = [];
    for (let i = 0; i < row.length; i++)
      dat.push({ id: row[i].id, name: row[i].name })
    ret = JSON.stringify(dat)
    res.send(ret)
  })
  connection.end()
})