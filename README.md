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

## 3. Consume API
Data visualization of the growth of positive cases of COVID 19 in China using the API

### How To Use
1. Clone this repo
2. Open <code>/consume-api/dashboard</code> in your browser

## 4. gRPC
Method integration with gRPC. Assume that we have 2 web applications, HRD App, and Accounting App. HRD App can add, edit, delete, and show a list of users. Accounting App only shows the list of the user. To make sure these two apps are integrated, we use gRPC so each app only has to call a method in a server.

- For server, we use Node JS.
- HRD App using PHP
- Accounting App using Express JS  

### Requirement
1. NPM
2. Node JS
3. PHP
4. gRPC Extension for PHP
5. Protoc, you can download it from <link>https://github.com/protocolbuffers/protobuf/releases/download/v3.7.1/protoc-3.7.1-win64.zip</link>
6. Protobuf Extension for PHP

### How To Use
1. Make sure <code>npm</code> and <code>node js</code> are installed in your computer
2. Clone this repo
3. Import <code>company.sql</code>
4. Run <code>npm install --save grpc</code>
5. Run <code>npm install --save uuid</code>
6. Run <code>npm install --save mysql</code>
7. Run <code>npm install --save express</code>
8. Run <code>npm install --save body-parser</code>
9. Run <code>npm install --save ejs</code>
10. Run <code>node server.js</code> in your terminal
11. Open new terminal, then run <code>node accounting/app.php</code>
12. Open <link>localhost/grpc/hrd/list.php</link> in your browser to show HRD App. You can try to add, update, and delete users on this page.
13. Open <link>localhost:8180</link> in your browser to show the list of users in the Accounting App. 