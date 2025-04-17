<?php require APPROOT . '/views/inc/header.php';?>
<?php require APPROOT . '/views/inc/navbar.php';?>

<?php if($additionalData['message']){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo $additionalData['message'];?>

          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<?php } ?>
<div>
  <center> <h1 class="heading mt-4">ADD PRODUCTS</h1></center>
</div>
<form action="<?php echo URLROOT ;?>juices/addproduct" method="post" enctype="multipart/form-data" >
<div class="container mb-4">
   <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
         <div class="card"  style="padding:20px; border:2px solid black;box-shadow: 0px 4px 20px rgba(5,57,94,.5);">
            <div class="row">
               <div class="col">
                  <label for="product" class="form-label">Product name (required)</label>
                  <input type="text" class="form-control mb-4" name="productname" id="productname" placeholder="Enter product name">
               </div>
               <div class="col">
                  <label for="product" class="form-label">Product price (required)</label>
                  <input type="number" min="0" class="form-control mb-4"  max="9999" placeholder="Enter product price" onkeypress="if(this.value.length == 10) return false;" name="price" id="price">
               </div>
            </div>

            <div class="row">
               <div class="col">
                  <label for="category" class="form-label">Category</label>
                  <select name="category" id="category" class="form-control mb-4">
                        <option value="" selected>Select Category</option>
                        <?php $count=0; foreach($data as $dataline){ ?> 
                        <option value="<?php echo $dataline->id;?>"><?php echo $dataline->catergory_name;?></option>
                        <?php $count++;} ?>
                  </select>
               </div>
               <div class="col">
                  <label for="subcategory" class="form-label">Quantity</label>
                  <input type="text" class="form-control mb-4" name="quantity" id="quantity" placeholder="Enter product name">
               </div>
            </div>

            <div class="row">
               <div class="col">
                  <label for="image" class="form-label">image 01 (required)</label>
                  <input type="file" class="form-control mb-4" name="image[]"  id="image[]" accept="image/*" class="box" >
               </div>
              
            </div>

            <button type="submit"  class="btn" name="add_product"  id="add_product"  style="color:white;background:#5081ca">
            Add product</button>

         </div>
      </div>
      <div class="col-sm-2"></div>
   </div>
</div>

</form>
  

  <!-- <div class="row my-4"> -->
  

<script type ="text/javascript">
   //  function myFunction() {
   //       alert("The product list");
   //    }
    $(document).ready(function(){
     
      alert("The product list");
       function loadData(){
            $.ajax({
                url: '<?php echo URLROOT; ?>ecommerceadmins/getCategory',
                type: "POST",
               //  data: {},
               //  dataType: 'json',
                success:function(data){            
                $("#category").append(data);
               }
            });
         }
         loadData();
  });
</script>
   
</body>
</html>