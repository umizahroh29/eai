const client = require('../client/accounting.js')
// const express = require('express');
// const router = express.Router();
//
// router.get('/user-list', function (req, res, next) {
//   client.ListUser({}, (error, users) => {
//     if (!error) {
//       res.render('user-list', {title: 'User List', userData: data});
//     }
//   })
// })
//
// module.exports = router;

const app = require('express')();
const bodyParser = require("body-parser");

//Set view engine to ejs
app.set("view engine", "ejs");

//Tell Express where we keep our index.ejs
app.set("views", __dirname + "/views");

//Use body-parser
// app.use(bodyParser.urlencoded({extended: false}));

app.get("/", (req, res) => {
  client.ListUser({}, (error, users) => {
    if (!error) {
      res.render('list', {title: 'tes', users: users.users});
    }
  })
});


app.listen(8180, () => {
  console.log("Server online on http://localhost:8180");
});