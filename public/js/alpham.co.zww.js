let cart = [];

function addToCart(item) {
  let name = $('#name').val();
  cart.push(item);
  let total_price = 0;
  let total_items = 0;
  cart.forEach((i,k)=>{
    total_price += i.price;
    total_items += 1;
  });


  $('span.simpleCart_total.notification').html('$' + total_price.toFixed(2));
  $('span.simpleCart_quantity').html(total_items);
  $('span.simpleCart_name').html(name);
  
}

function emptyCart(){
  cart = [];
  $('span.simpleCart_total.notification').html('$0.00');
  $('span.simpleCart_quantity').html(0);
}

function continuePayment() {
  if($('span.simpleCart_total.notification').html() != "0.00"){
    $('.finalPayment').attr('style', 'visibility: visible, width: 100%, height: 100%;');
  }else{
  	alert('Please choose a package from the list below before you can make a payment');
  }
}

function checkOut(){
  // let name = $('#name').val();
  // let email = $('#email').val();
  // let phone = $('#phone').val();
  // let card = $('#card').val();

  let name = "Product Name"; 
  let email = "alflanquit@gmail.com";
  let phone =  $('#phone').val();
  let card = "0289102938";
  let total_price =   $('span.simpleCart_total.notification').html();
  	// total_price = (+total_price.replace('$','')).toFixed(2);
  if (total_price != '0.00') {
  if (!name | !email | !phone | !card) {
    // alert('Please fill in all the fields before you can make the payment');
    alert('Please unlock your phone and enter your ecocash pin');
  	jQuery.post('PaynowAPI/index.php', {'phone': phone, 'name': name, 'card': card, 'email': email, 'amount': total_price}, function(data){
    alert(data);

     
  //   $.ajax({

  //     type:'POST',

  //     url:'http://127.0.0.1:8000/add_sale',

  //     data:{total_price:total_price},

  //     success:function(data){

  //        alert(data.success);

  //     }

  //  });
      



      window.location.replace("http://127.0.0.1:8000/add_sale");



    });
  }else{
  	alert('Please unlock your phone and enter your ecocash pin');
  	jQuery.post('PaynowAPI/index.php', {'phone': phone, 'name': name, 'card': card, 'email': email, 'amount': total_price}, function(data){
    alert(data);



    // function add_sale(data) {
      // $(function() {
      //   $.ajax({
      //     method: "POST",
      //     url: "http://127.0.0.1:8000/add_sale",
      //     data: {name: '#Alpha'},
      //     success: function(response) {
      //       alert(response);
      //       console.log(data);
      //     }
      //   });
      // });
    // }



    window.location.replace("http://127.0.0.1:8000/add_sale");




    
    });
  }
 }else{
   alert('Please Select Item ');
   
 }
}






// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
} 






