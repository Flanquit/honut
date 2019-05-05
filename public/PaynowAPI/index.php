<?php 

require_once 'autoloader.php';

$email = $_POST['email'];
$name = $_POST['name'];
// $name = 'testing variable name';
$phone = $_POST['phone'];
$card = $_POST['card'];
$price = $_POST['amount'];

$paynow = new Paynow\Payments\Paynow(

      //TESTING MODE key
      //'6850',
      //'af4698a9-f997-48d1-adf0-e43e22d56226',

      // ' 6476',
      // '9749bddf-22bf-4dea-b3e7-c796f5719675',
   
      
    // alpham.co.zw intergration key with shepherd account, this key i havent tested it payments
    '4198',
    '5c74798d-f9b0-42e0-9a61-a48138a7189c',

    //Pay It Up integration Key TEST MODE
   // '6716',
   // '260b51ca-ee64-4401-8097-da5d7cdb8221',
    'http://d8403290.ngrok.io/paynow-demo-php/examples/index.php?paynow-return=true',
    'http://d8403290.ngrok.io/paynow-demo-php/examples/callback.php'
);

$payment = $paynow->createPayment($name, $email);


$payment->add('Package', $price);

// Optionally set a description for the order.
// By default, a description is generated from the items
// added to a payment
$payment->setDescription($card);


// Initiate a Payment 
$response = $paynow->sendMobile($payment, $phone, 'ecocash');

//adding a sale to database after the payment is done 

   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "shopproducts";

   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

     // set the PDO error mode to exception

      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "INSERT INTO sales (price)
      VALUES ('$price')";

      //use exec() because no results are returned

      $conn->exec($sql);
      echo "New record created successfully";
      }
   catch(PDOException $e)
      {
      echo $sql . "<br>" . $e->getMessage();
      }

   $conn = null;


if(!$response->success): 

   echo $response->error;
    var_dump($response);
   echo("Duplicate Transaction, Please try again after 5 minutes / Insufficient balance");
  
  
else: 
   echo $response->instructions();
endif; 

if(isset($_GET['paynow-return'])):
  echo 'Payment Successful';
endif; 

?>





