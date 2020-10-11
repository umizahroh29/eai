const grpc = require('grpc')
const PROTO_PATH = './proto.proto'
const UserService = grpc.load(PROTO_PATH).user.UserService

const client = new UserService('localhost:50051', grpc.credentials.createInsecure())
module.exports = client