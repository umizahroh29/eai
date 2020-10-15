const client = require('../client/accounting.js')
const app = require('express')();

//Set view engine to ejs
app.set("view engine", "ejs");

//Tell Express where we keep our index.ejs
app.set("views", __dirname + "/views");

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