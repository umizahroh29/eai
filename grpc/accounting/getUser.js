const client = require('../client/accounting')
client.ListUser({}, (error, users) => {
  if (!error) {
    console.log('Successfully fetch list users')
    console.log(users)
  } else {
    console.log(error)
  }
})