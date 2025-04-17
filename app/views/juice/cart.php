<?php require APPROOT . '/views/inc/header.php';?>
<?php require APPROOT . '/views/inc/unavbar.php';?>
<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');

h2 {
    font-family: "Inter", sans-serif;

    color: black;
    margin-bottom: 0px;
    font-weight: 300;
}

p {
    text-align: left;
}

.bt {
    background: #7BDCB5;
    padding: 15px;
    width: 20%;
    color: white;
    display: block;
    margin: auto;
    border-radius: 30px;
}
</style>
<section style="background: #E2BED3;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <img src="<?php echo URLROOT.'/img/45..png'?>" style="margin-left:-130px" alt="">
                <img src="<?php echo URLROOT.'/img/7..png'?>" style="margin-top:500px;margin-left:-330px;rotate:30deg"
                    alt="">
            </div>
            <div class="col-sm-4">
                <h1 style="font-size: 5rem;margin-top:30%">Cart</h1>
            </div>
            <div class="col-sm-4" style="">
                <img src="<?php echo URLROOT.'/img/30,.png'?>"
                    style="margin-left:-130px;float:right;rotate:180deg;margin-right:-10px" alt="">
            </div>
        </div>
    </div>
</section>
<?php if($additionalData['message']){ ?>
<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
    <h6> <?php echo $additionalData['message'];?></h6>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php } ?>

<form action="<?php echo URLROOT ;?>juices/removeformcart" method="post" >
<section>
    <div class="container mb-4">
        <div class="row mt-4">
            <div class="card pb-3">
                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Size</th>
                            <th>Subtotal</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
           
                             $count=0; foreach($data as $dataline){ 
              
                            ?>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo URLROOT.'/product_img/'. $dataline->image;?>" alt=""
                                        style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1"><?php echo $dataline->name;?></p>
                                    </div>
                                </div>
                            </td>
                            <input type="hidden" name="<?php echo 'cart_id'.$count;?>" value="<?php echo $dataline->cart_id ;?>"> 
                            <input type="hidden" name="<?php echo 'product_id'.$count;?>" value="<?php echo $dataline->product_id ;?>"> 
                            <td> <?php echo $dataline->product_price;?></td>
                            <td> <?php echo $dataline->number;?></td>
                            <td><?php echo $dataline->quantity;?></td>
                            <td><?php echo $dataline->total_price;?> </td>
                            <td> <button class="btn bt" type="submit" name="<?php echo 'remove'.$count;?>" id="<?php echo 'remove'.$count;?>" style="width:100px;padding:8px">Delete</button></td>
                        </tr>
                        <?php  $count++;}; ?>
                        <input type="hidden" name="totalcount" value="<?php echo $count;?>">
                    </tbody>
                </table>

            </div>
        </div>

        <div class="row mt-4">
            <h2>Cart Total</h2>
            <div class="col mt-5">
                <div class="row p-2">
                    <div class="col-sm-3">
                        <p> <b>Sub Total </b></p>
                    </div>
                    <div class="col-sm-9">
                        <p><?php echo $dataline->grand_total?>/-</p>
                    </div>
                </div>
                <hr>
                <div class="row p-2">
                    <div class="col-sm-3">
                        <p><b>Shipping </b></p>
                    </div>
                    <div class="col-sm-9">
                        <p>FLat Rate 20/-</p>

                    </div>
                </div>
                <hr>
                <div class="row p-2">
                    <div class="col-sm-3">
                        <p><b>Total </b></p>
                    </div>
                    <div class="col-sm-9">
                        <p><?php echo $dataline->grand_total+20?>/-</p>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <button class="btn bt" type="submit" name="purchase" id="purchase">Proceed To Checkout</button>
    </div>
</section>
                             </form>
<section style="background:#7BDCB5">
    <?php require APPROOT . '/views/inc/footer.php';?>
</section>