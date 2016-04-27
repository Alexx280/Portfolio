var user = require ('./user');
var Vasya =  new user.User("Вася");
var Petya =  new user.User("Петя");

Vasya.hello(Petya);
