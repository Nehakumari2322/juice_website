<?php require APPROOT . '/views/inc/header.php';?>
<?php require APPROOT . '/views/inc/navbar.php';?>
<div>
  <center> <h1 class="mt-4">DASHBOARD</h1></center>
</div>

<form action="<?php echo URLROOT ;?>juices/admindashboard" method="post" >

<div class="container-fluid">
   <div class="row">
      <div class="col-sm-6 mb-2 h-100">
         <div class="card" style="padding:20px; border:2px solid black;box-shadow: 0px 4px 20px rgba(5,57,94,.5);">
            <div class="row">
               <h2 class="text-center">Order</h2>
               <div class="col-sm-4">
                  <div class="card" style="padding:20px; border:2px solid black;box-shadow: 0px 4px 20px rgba(5,57,94,.5);">
                     <h2 style="text-align:center">0</h2>
                     <p class="btn" style="background-color:#bab7b7; text-align:center;font-size:.9rem">completed orders</p>
                     <button class="btn mt-2" style="color:white;background:#6c89b4" name="order" id="order">See Orders</button>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="card" style="padding:20px; border:2px solid black;box-shadow: 0px 4px 20px rgba(5,57,94,.5);">
                     <h2 style="text-align:center">0</h2>
                     <p class="btn" style="background-color:#bab7b7; text-align:center;font-size:.9rem">orders placed</p>
                     <button class="btn mt-2" style="color:white;background:#6c89b4" name="order" id="order">See Orders</button>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="card" style="padding:20px; border:2px solid black;box-shadow: 0px 4px 20px rgba(5,57,94,.5);">
                     <h2 style="text-align:center">0</h2>
                     <p class="btn" style="background-color:#bab7b7; text-align:center;font-size:.9rem">total pendings</p>
                     <button class="btn mt-2" style="color:white;background:#6c89b4;" name="order" id="order">See Orders</button>
                  </div>
               </div>
            </div>
         </div>
      </div>


      <div class="col-sm-6 mb-2 h-100">
         <div class="card" style="padding:20px; border:2px solid black;box-shadow: 0px 4px 20px rgba(5,57,94,.5);">
            <div class="row">
               <h2 class="text-center">Products</h2>
               <div class="col-sm-4">
                  <div class="card" style="padding:20px; border:2px solid black;box-shadow: 0px 4px 20px rgba(5,57,94,.5);">
                     <h2 style="text-align:center">7</h2>
                     <p class="btn" style="background-color:#bab7b7; text-align:center;font-size:.9rem">Products added</p>
                     <button class="btn mt-2" style="color:white;background:#6c89b4" name="seeproduct" id="seeproduct">See Products</button>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="card" style="padding:20px; border:2px solid black;box-shadow: 0px 4px 20px rgba(5,57,94,.5);">
                     <h2 style="text-align:center">0</h2>
                     <p class="btn" style="background-color:#bab7b7; text-align:center;font-size:.9rem">Low</p>
                     <button class="btn mt-2" style="color:white;background:#6c89b4" name="seeproduct" id="seeproduct">See Products</button>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="card" style="padding:20px; border:2px solid black;box-shadow: 0px 4px 20px rgba(5,57,94,.5);">
                     <h2 style="text-align:center">0</h2>
                     <p class="btn" style="background-color:#bab7b7; text-align:center;font-size:.9rem">Out of Stock</p>
                     <button class="btn mt-2" style="color:white;background:#6c89b4;" name="seeproduct" id="seeproduct">See Products</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>


   <div class="row">
      <div class="col-sm-6 mb-2">
         <div class="card h-100" style="padding:20px; border:2px solid black;box-shadow: 0px 4px 20px rgba(5,57,94,.5);">
            <div class="row">
               <h2 class="text-center">Accounts</h2>
               <div class="col-sm-4">
                  <div class="card" style="padding:20px; border:2px solid black;box-shadow: 0px 4px 20px rgba(5,57,94,.5);">
                     <h2 style="text-align:center">welcome!</h2>
                     <p class="btn" style="background-color:#bab7b7; text-align:center">admin</p>
                     <button class="btn mt-2" style="color:white;background:#6c89b4" name="edit" id="edit">Update Profile</button>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="card" style="padding:20px; border:2px solid black;box-shadow: 0px 4px 20px rgba(5,57,94,.5);">
                     <h2 style="text-align:center">0</h2>
                     <p class="btn" style="background-color:#bab7b7; text-align:center">normal User</p>
                     <button class="btn mt-2 " style="color:white;background:#6c89b4" name="account" id="account">See users</button>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="card" style="padding:20px; border:2px solid black;box-shadow: 0px 4px 20px rgba(5,57,94,.5);">
                     <h2 style="text-align:center">0</h2>
                     <p class="btn" style="background-color:#bab7b7; text-align:center">new message</p>
                     <button class="btn mt-2" style="color:white;background:#6c89b4" name="message" id="message">See messages</button>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="col-sm-6 mb-2">
         <div class="card h-100" style="padding:20px; border:2px solid black;box-shadow: 0px 4px 20px rgba(5,57,94,.5);">
            <div class="row">
               <h2 class="text-center">Category</h2>
               <div class="col-sm-4">
                  <div class="card " style="padding:20px; border:2px solid black;box-shadow: 0px 4px 20px rgba(5,57,94,.5);">
                     <p class="btn" style="background-color:#bab7b7; text-align:center;">Add Category</p>
                     <button class="btn mt-2 " style="color:white;background:#6c89b4" name="addcategory" id="addcategory">Add </button>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="card " style="padding:20px; border:2px solid black;box-shadow: 0px 4px 20px rgba(5,57,94,.5);">
                     <p class="btn" style="background-color:#bab7b7; text-align:center;">Add products</p>
                     <button class="btn mt-2" style="color:white;background:#6c89b4" name="addproduct" id="addproduct">Add </button>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="card " style="padding:20px; border:2px solid black;box-shadow: 0px 4px 20px rgba(5,57,94,.5);">
                     <p class="btn" style="background-color:#bab7b7; text-align:center">See Category</p>
                     <button class="btn mt-2" style="color:white;background:#6c89b4" name="additems" id="additems">Add </button>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </div>

  
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

