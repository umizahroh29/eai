const grpc = require('grpc')
const mysql = require('mysql')
const {v1: uuidv1} = require('uuid');
const proto = grpc.load('proto.proto')

const dbCon = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: '',
  database: 'company'
})

const server = new grpc.Server()
server.addService(proto.user.UserService.service, {
  ListUser: (call, callback) => {
    dbCon.query('SELECT * FROM users', function (err, result) {
      if (err) throw err
      callback(null, result)
    })
  },
  GetUser: (call, callback) => {
    let id = call.request.id
    dbCon.query('SELECT * FROM users WHERE id = "' + id + '"', function (err, result) {
      if (err) throw err
      callback(null, result[0])
    })
  },
  InsertUser: (call, callback) => {
    let user = call.request
    user.id = uuidv1()
    dbCon.query(
      'INSERT INTO users (id, name, email, position ) VALUES ("' +
      user.id + '", "' +
      user.name + '", "' +
      user.email + '", "' +
      user.position + '")',
      function (err, result) {
        if (err) throw err

        dbCon.query('SELECT * FROM users WHERE id = "' + user.id + '"', function (err, result) {
          if (err) throw err
          callback(null, result[0])
        })
      })
  },
  UpdateUser: (call, callback) => {
    let user = call.request
    dbCon.query(
      'UPDATE users SET name = "' + user.name + '", email = "' +
      user.email + '", position = "' +
      user.position + '" WHERE id = "' +
      user.id + '"',
      function (err, result) {
        if (err) throw err

        dbCon.query('SELECT * FROM users WHERE id = "' + user.id + '"', function (err, result) {
          if (err) throw err
          callback(null, result[0])
        })
      })
  },
  DeleteUser: (call, callback) => {
    const id = call.request.id
    dbCon.query(
      'DELETE FROM users WHERE id = "' + id + '"',
      function (err, result) {
        if (err) throw err
        callback(null, {})
      })
  }
})

server.bind('127.0.0.1:50051',
  grpc.ServerCredentials.createInsecure())

console.log('Server running at http://127.0.0.1:50051')
server.start()