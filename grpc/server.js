const grpc = require('grpc')
const mysql = require('mysql')
const proto = grpc.load('proto.proto')

const dbCon = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: '',
  database: 'company'
})

const server = new grpc.Server()
server.addService(proto.UserService.service, {
  ListUser: (call, callback) => {
    dbCon.connect(function (err) {
      if (err) throw err
      dbCon.query('SELECT * FROM users', function (err, result) {
        if (err) throw err
        callback(null, result)
      })
    })
  }
})

server.bind('127.0.0.1:50051',
  grpc.ServerCredentials.createInsecure())

console.log('Server running at http://127.0.0.1:50051')
server.start()