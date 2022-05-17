var expres = require("express");
var bodyParse = require("body-parser");
var multer = require("multer");
var cookieParser = require('cookie-parser');
var session =require('express-session');
var upload = multer();
var app = expres();
var alert=require('alert');
var mongoose = require('mongoose');
mongoose.connect('mongodb://localhost/my_db');
var personSchema = mongoose.Schema({
    name: String,
    roll_no: Number,
    Department:String,
    Operating_System: Array,
    Coding_Experience:String,
    domains: Array
 });
 var signupSchema = mongoose.Schema({ 
     emailId: String,
     password: String
 })
var Person = mongoose.model("Person", personSchema);
var signPerson = mongoose.model("signPerson", signupSchema);
app.use(session({secret:"its secret"}));
app.use(cookieParser());
app.set('view engine', 'pug');
app.set('views','/Users/srvijayganesh/Documents/express/views');
app.use(expres.static('public'));
app.use(bodyParse.json());
app.use(bodyParse.urlencoded({ extended : true }));
app.use(upload.array());
var users_id=[];
var users_pass=[];
signPerson.find(function(err, response){
    response.map(function(item){
        users_id.push(item.emailId);
        users_pass.push(item.password);
    });
});
app.get('/',function(req,res,next){
    res.render('form');
    next();
});


app.get('/signup',function(req,res,next){
    res.render('signup');
    next();
});
app.post('/signup/danks',function(req,res){
    console.log(req.body);
    var signInfo=req.body;
    if(signInfo.pass!=signInfo.repass){
        alert("Passwords did not match!! Try Again");
        res.redirect('/signup');
    }
    else if(users_id.includes(signInfo.id)){
        alert("this account already exists, please login here");
        res.redirect('/login');
    }
    else {
        var newSignup = new signPerson({
           emailId: signInfo.id,
           password: signInfo.pass
        });
        newSignup.save(function(err){
            if(err)
               res.render('show_message', {message: "Database error", type: "error"});
            else
                alert("Successfully Registered");
                res.redirect('/');
         })};     

});
app.get('/login', function(req, res,next){
    res.render('login');
    next();
});
app.post('/login/danks',function(req,res,next){
    var loginInfo=req.body;
    var user_ind=users_id.indexOf(loginInfo.log_id);
    if(!users_id.includes(loginInfo.log_id)){
        alert("this account does not exist!! Please register here");
        res.redirect('/signup');
    } 
    else{
        if(loginInfo.log_pass!=users_pass[user_ind]){
            alert('Incorrect Password');
            res.redirect('/login');
        }
        else{
            alert('successfully logged in');
            res.redirect('/');
        }
        
    }
});

app.get('/hello',function(req,res,next){
    if(req.session.page_views){
        req.session.page_views++;
        res.send("u visited"+req.session.page_views);
    }
    else{
        req.session.page_views=1;
        res.send("welcome bro!")
    }
    next();
})
app.get('/user/:user',function(req,res,next){
    res.cookie('name',req.params.user).send('<p>hello<a href="/user">click</a></p>');
    console.log("cookie:",req.cookies);
    next();
});
app.get('/user',function(req,res,next){
    res.clearCookie('name').send(res.cookies.name);
    next();
})

app.post('/person',function(req,res){
    console.log(req.body);
    var personInfo=req.body;
    if(!personInfo.nam || !personInfo.roll){
        res.render('show_message', {
           message: "Sorry, you provided worng info", type: "error"});
     } else {
        var newPerson = new Person({
           name: personInfo.nam,
           roll_no: personInfo.roll,
           Department: personInfo.dept,
           Operating_System: personInfo.os,
           Coding_Experience:personInfo.codeExp,
           domains: personInfo.dom
        })};
        newPerson.save(function(err){
            if(err)
               res.render('show_message', {message: "Database error", type: "error"});
            else
               res.render('show_message', {
                  message: "New person added", type: "success",name:personInfo.nam});
         })
});
app.listen(3000);