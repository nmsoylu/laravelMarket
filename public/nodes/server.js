const SERVER_PORT = 8081


/*var io = require('socket.io')(6379);
var redis = require('redis').createClient;
var adapter = require('socket.io-redis');

var port = 6379;
var host = '67.205.171.53';

var pub = redis(port, host, { auth_pass: "redis_123456" });
var sub = redis(port, host, { auth_pass: "redis_123456" });
io.adapter(adapter({ pubClient: pub, subClient: sub }));

var https = require('https')
var express = require('express')
var app = express();

var server = https.createServer({}, app)

sub.on('error', function (error) {
    console.log('ERROR ' + error)
})
sub.on('subscribe', function (channel, count) {
    console.log('SUBSCRIBE', channel, count)
})


sub.on('message', function (channel, payload) {
    console.log('INCOMING MESSAGE', channel, payload)

    payload = JSON.parse(payload)

    // Merge channel into payload
    payload.data._channel = channel

    // Send the data through to any client in the channel room (!)
    // (i.e. server room, usually being just the one user)
    io.sockets.in(channel).emit(payload.event, payload.data)
})

/*
 * Server


io.sockets.on('connection', function (socket) {

    console.log('NEW CLIENT CONNECTED')

    socket.on('subscribe-to-channel', function (data) {
        console.log('SUBSCRIBE TO CHANNEL', data)

        // Subscribe to the Redis channel using our global subscriber
        sub.subscribe(data.channel)

        // Join the (somewhat local) server room for this channel. This
        // way we can later pass our channel events right through to
        // the room instead of broadcasting them to every client.
        socket.join(data.channel)
    })

    socket.on('disconnect', function () {
        console.log('DISCONNECT')
    })

})


server.listen(SERVER_PORT, function () {
    console.log('Listening to incoming client connections on port ' + SERVER_PORT)
})
//
 Redis pub/sub
 */

