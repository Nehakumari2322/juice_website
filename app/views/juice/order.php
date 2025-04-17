<?php require APPROOT . '/views/inc/header.php';?>
<?php require APPROOT . '/views/inc/unavbar.php';?>
<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');

h2 {
    font-family: "Inter", sans-serif;
    font-weight: 200;
}

.bt {
    background: #7BDCB5;
    padding: 15px;
   width:200px;
    color: white;
    display: block;
    margin: auto;
    border-radius: 30px;
}
</style>
<h2></h2>
<section style="background: #7BDCB5;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <img src="<?php echo URLROOT.'/img/45..png'?>" style="margin-left:-130px" alt="">
                <img src="<?php echo URLROOT.'/img/7..png'?>" style="margin-top:500px;margin-left:-330px;rotate:30deg"
                    alt="">
            </div>
            <div class="col-sm-4">
                <h1 style="font-size: 5rem;margin-top:30%">Check Out</h1>
            </div>
            <div class="col-sm-4" style="">
                <img src="<?php echo URLROOT.'/img/30,.png'?>"
                    style="margin-left:-130px;float:right;rotate:180deg;margin-right:-10px" alt="">
            </div>
        </div>
    </div>
</section>
<form  action="<?php echo URLROOT; ?>juices/placeorder" method="post">
<input type="hidden" name="cartId" id="cartId" value="<?php echo $data->cart_id;?>">
<section>
    <div class="container">
        <div class="row">
            <h1>Billing Details</h1>
            <div class="col p-5">
                <form>
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row ">
                        <div class="col-sm-4">
                            <div data-mdb-input-init class="form-outline">
                                <input type="text"  class="form-control" name="first_name" id="first_name" />
                                <label class="form-label" for="first_name">First name</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div data-mdb-input-init class="form-outline">
                                <input type="text"  class="form-control" name="last_name" id="last_name"  />
                                <label class="form-label" for="last_name">Last name</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="number" id="phone" name="phone" class="form-control" />
                                <label class="form-label" for="phone">Phone</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="text"  class="form-control" name="country" id="country" />
                                <label class="form-label" for="country">Country/Region</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="text" class="form-control"
                                    placeholder="House No and Street name" name="street" id="street"/>
                                <label class="form-label" for="street">Street Address</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="text" id="appartment" name="appartment" placeholder="Appartment,Sutie,Unit,etc (optional)"
                                    class="form-control" />

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="text" id="city" name="city" class="form-control" />
                                <label class="form-label" for="city">Town/City</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="text" id="state" name="state" class="form-control" />
                                <label class="form-label" for="state">State</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="number" id="pin" name="pin" class="form-control" />
                                <label class="form-label" for="pin">Pincode</label>
                            </div>
                        </div>
                       
                        <div class="col-sm-6">
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="email" id="email" name="email" class="form-control" />
                                <label class="form-label" for="form6Example3">Email</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <h2> <b>Your Order </b></h2>
                        <div class="col mt-5">
                            <div class="row p-2">
                                <div class="col-sm-3">
                                    <p> <b>SubTotal</b></p>
                                </div>
                                <div class="col-sm-9">
                                    <p><?php echo $data->grand_total?>/-</p>
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
                                    <p> <b><?php echo $data->grand_total+20?> </b>/-</p>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>

                    <div class="row">
                        <h2 class="mt-2">Bank Transfer</h2>
                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment
                            reference. Your order will not be shipped until the funds have cleared in our account.
                        </p>
                        <h2 class="mt-3 mb-2">Cash on delivey</h2>
                    </div>

                    <!-- Submit button -->
                    <div class="row mt-3">
                        <div class="col-sm-6">
                            <button class="btn bt" type="submit" name="order" id="order">Place Order</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn bt bg-danger" type="submit" name="cancel" id="cancel" >Cancel</button>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</section>
</form>
<section style="background:#E2BED3;margin-bottom:0">
    <?php require APPROOT . '/views/inc/footer.php';?>
</section>