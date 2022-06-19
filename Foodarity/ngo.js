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
    var ngoDB = firebase.database().ref("ngo");
    
    
    document.getElementById("ngo").addEventListener("submit", submitForm);
    
    function submitForm(e) {
      e.preventDefault();
    
      var fullname1= getElementVal("fullname1");
      var email1 = getElementVal("email1");
      var mycontact1 = getElementVal("mycontact1");
      var myaddress1= getElementVal("myaddress1");
      var time1= getElementVal("time1");
      console.log(fullname1, email1, mycontact1, myaddress1, time1);
    
      saveMessages(fullname1, email1, mycontact1, myaddress1, time1);
    
      //   enable alert
      document.querySelector(".alert").style.display = "block";
    
      //   remove the alert
      setTimeout(() => {
        document.querySelector(".alert").style.display = "none";
      }, 3000);
    
      //   reset the form
      document.getElementById("ngo").reset();
    }
    const saveMessages = (fullname1, email1, mycontact1, myaddress1, time1) => {
        var newngo = ngoDB.push();
      
        newngo.set({
          name1: fullname1,
          emailid1: email1,
          mycontact1: mycontact1,
         myaddress1:myaddress1,  
         time1:time1,
        });
      };
    const getElementVal = (id) => {
        return document.getElementById(id).value;
      };
    