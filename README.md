# EAI Duties

## 1. Rabbit MQ
Simple message broker implementation using PHP

### How To Use
1. Clone this repo
2. Run <code>php receiver.php</code> in terminal
3. Open <code>send.php</code> in your browser
4. Try to send a word from your browser, then check the terminal. A word that you have sent will appear.

### Stacks
1. RabbitMQ
2. PHP 7
3. AMQP


## 2. Dashboard (Pentaho Data Integration)
Data visualization from a database created with Pentaho Data Integration

### How To Use
1. Clone this repo
2. Import the database to your local
3. Open <code>/dashboard</code> in your browser

## 2. Consume API
Data visualization of the growth of positive cases of COVID 19 in China using the API

### How To Use
1. Clone this repo
2. Open <code>/consume-api/dashboard</code> in your browser

## 2. gRPC
Method integration with Node JS as a server and client

### How To Use
1. Make sure <code>npm</code> and <code>node js</code> are installed in your computer
2. Clone this repo
3. Import <code>company.sql</code>
4. Run <code>npm install --save grpc</code>
5. Run <code>npm install --save uuid</code>
6. Run <code>node server.js</code> in your terminal
7. Open new terminal, then run <code>node accounting/getUser.js</code>