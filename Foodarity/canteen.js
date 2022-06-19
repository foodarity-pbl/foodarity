const firebaseConfig = {
    apiKey: "AIzaSyBKxEXHJ4IXwUMNVKJPsIjunPCFkFWohqA",
    authDomain: "foodarity-8cfba.firebaseapp.com",
    databaseURL: "https://foodarity-8cfba-default-rtdb.firebaseio.com",
    projectId: "foodarity-8cfba",
    storageBucket: "foodarity-8cfba.appspot.com",
    messagingSenderId: "473797592672",
    appId: "1:473797592672:web:feb3efd805704758cd2505"
  };

 // initialize firebase
firebase.initializeApp(firebaseConfig);
// reference your database
var canteenDB = firebase.database().ref("canteen");


document.getElementById("canteen").addEventListener("submit", submitForm);

function submitForm(e) {
  e.preventDefault();

  var fullname= getElementVal("fullname");
  var email = getElementVal("email");
  var mycontact = getElementVal("mycontact");
  var myaddress= getElementVal("myaddress");
  var food1= getElementVal("food1");
  var amount1= getElementVal("amount1");
  var food2= getElementVal("food2");
  var amount2= getElementVal("amount2");
  var food3= getElementVal("food3");
  var amount3= getElementVal("amount3");
  var time= getElementVal("time");
  console.log(fullname, email, mycontact, myaddress, food1, amount1, food2, amount2, food3, amount3, time);

  saveMessages(fullname, email, mycontact, myaddress, food1, amount1, food2, amount2, food3, amount3, time);

  //   enable alert
  document.querySelector(".alert").style.display = "block";

  //   remove the alert
  setTimeout(() => {
    document.querySelector(".alert").style.display = "none";
  }, 3000);

  //   reset the form
  document.getElementById("canteen").reset();
}
const saveMessages = (fullname, email, mycontact, myaddress, food1, amount1, food2, amount2, food3, amount3, time) => {
    var newcanteen = canteenDB.push();
  
    newcanteen.set({
      name: fullname,
      emailid: email,
      mycontact: mycontact,
     myaddress:myaddress, 
     food1:food1,
     amount1:amount1, 
     food2:food2,
     amount2:amount2, 
     food3:food3,
     amount3:amount3, 
     time:time,
    });
  };
const getElementVal = (id) => {
    return document.getElementById(id).value;
  };

