<!-- This file is for CANTEEN FORM-->
<!-- This file is for CANTEEN FORM-->

<?php include("dp.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Donate Food</title>
    <style>
      .btn{
            background-color: rgb(153, 3, 203);
            border-radius: 5px;
            color: white;
            padding: 10px 10px;
            text-align: left;
            display: inline-block;
            font-size: 20px;
            margin: 0px 3px;
            cursor: pointer;
            text-decoration:none;

        }
        .btn:hover{
          background-color: blue;
        }
    </style>
</head>
<body>
  <header class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <svg xmlns="https://image.shutterstock.com/image-vector/donate-food-cartoon-silhouette-hand-260nw-1606942012.jpg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3 text-xl">Foodarity</span>
      </a>
      <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
        <a href="index.html" class="mr-5 hover:text-gray-900" id="home">Home</a>
        <a href="aboutwebsite.html" class="mr-5 hover:text-gray-900" id="aboutweb">About website</a>
        <a href="services.html" class="mr-5 hover:text-gray-900" id="services">Services</a>
        <a href="contactus.html" class="mr-5 hover:text-gray-900" id="contacts">Contacts</a>
      </nav>
    </div>

  </header>
    <section class="text-gray-600 body-font">
      <form action="#" id="canteen" method="POST">
        <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
          <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
            <h1 class="title-font font-medium text-3xl text-gray-900">Kindly fill your Canteen/Hostel and food details :)</h1>
            <p class="leading-relaxed mt-4">"Whatever you are donating, may god bless you and your family!"</p>
          </div>
          <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
            <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Enter Canteen/Hostel Details:</h2>
            <div class="relative mb-4">
              <label for="full-name" class="leading-7 text-sm text-gray-600">Name</label>
              <input type="text" id="fullname" name="full-name" class="w-full bg-white rounded border border-gray-300 focus:border-pink-500 focus:ring-2 focus:ring-pink-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
              <label for="email" class="leading-7 text-sm text-gray-600">Email-ID</label>
              <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-pink-500 focus:ring-2 focus:ring-pink-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
              <label for="mycontact" class="leading-7 text-sm text-gray-600">Contact number</label>
              <input type="number" id="mycontact" name="mycontact" class="w-full bg-white rounded border border-gray-300 focus:border-pink-500 focus:ring-2 focus:ring-pink-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">

            </div>
            <div class="relative mb-4">
              <label for="myaddress" class="leading-7 text-sm text-gray-600">Address</label>
              <input type="text" id="myaddress" name="myaddress" class="w-full bg-white rounded border border-gray-300 focus:border-pink-500 focus:ring-2 focus:ring-pink-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div>
              <strong>Select Food items and enter Qt.:</strong><br>
            <input type="checkbox" id="food1" name="food1" value="Roti">
            <label for="food1"> Roti</label><br>
            <label for="Amount" class="leading-7 text-sm text-gray-600" >Roti Qt. in kg:</label>
            <input type="number" name="amount1" id="amount1" class="w-full bg-white rounded border border-gray-300 focus:border-pink-50 focus:ring-2 focus:ring-pink-100 text-base outline-none text-gray-700 py-1 px-2 leading-8 transition-colors duration-200 ease-in-out">
            <br><br><input type="checkbox" id="food2" name="food2" value="Rice">
            <label for="food2"> Rice</label><br>
            <label for="Amount2" class="leading-7 text-sm text-gray-600" >Rice Qt. in kg:</label>
            <input type="number" name="amount2" id="amount2" class="w-full bg-white rounded border border-gray-300 focus:border-pink-50 focus:ring-2 focus:ring-pink-100 text-base outline-none text-gray-700 py-1 px-2 leading-8 transition-colors duration-200 ease-in-out">
            <br><br><input type="checkbox" id="food3" name="food3" value="Curry/Bhaji">
            <label for="food3"> Curry/Bhaji</label><br>
            <label for="Amount3" class="leading-7 text-sm text-gray-600" >Curry/Bhaji Qt. in kg:</label>
           <input type="number" name="amount3" id="amount3" class="w-full bg-white rounded border border-gray-300 focus:border-pink-50 focus:ring-2 focus:ring-pink-100 text-base outline-none text-gray-700 py-1 px-2 leading-8 transition-colors duration-200 ease-in-out">
           <br><br><strong>Date and Time:</strong><br>
           <label for="time" class="leading-7 text-sm text-gray-600">Enter:</label>
           <input type="datetime-local"  id="time" name="time" class="w-full bg-white rounded border border-gray-300 focus:border-pink-50 focus:ring-2 focus:ring-pink-100 text-base outline-none text-gray-700 py-1 px-2 leading-8 transition-colors duration-200 ease-in-out">
           <br><br>
           <input type="submit" name="submit" id="submit" value="Submit" class="btn">
            </div>
            <div class="alert">Your message sent</div>
            </form>
          
            <p class="text-xs text-gray-500 mt-3">Contact-8262056085 regarding any form filling issues.</p>
            
            

            <!-- To view the database click here -->
            
            <a href="display1.php" class="mr-5 hover:text-gray-900">To view the database click here</a>
        


          </div>
        </div>
        
      </section>
    
    <footer class="text-gray-600 body-font">
      <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
        <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
          </svg>
          <span class="ml-3 text-xl">Foodarity</span>
        </a>
        <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">?? 2022 Foodarity ???
          <a href="#" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">Email-id ~ foodaritypb@gmail.com</a>
        </p>
        <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
          <a class="text-gray-500">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
              <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
              <circle cx="4" cy="4" r="2" stroke="none"></circle>
            </svg>
          </a>
        </span>
      </div>
    </footer>

</body>
</html>

<?php
	if($_POST['submit'])
	{
		$name = $_POST['full-name'];
		$email = $_POST['email'];
		$contact = $_POST['mycontact'];
		$address = $_POST['myaddress'];
    $roti = $_POST['amount1'];
    $rice = $_POST['amount2'];
    $curry = $_POST['amount3'];
    $time = $_POST['time'];
		$query = "INSERT INTO FORM VALUES('$name' , '$email' , '$contact' , '$address','$roti','$rice','$curry','$time')";
		$data = mysqli_query($conn,$query);

    if($data)
    {
          echo"Data Inserted into Database";
    }
      else
    {
          echo"Failed";
    }
  }
?>
