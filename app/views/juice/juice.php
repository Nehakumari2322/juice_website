<?php require APPROOT . '/views/inc/header.php';?>
<?php require APPROOT . '/views/inc/unavbar.php';?>


<section style="background: #7BDCB5;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <img src="<?php echo URLROOT.'/img/50..png'?>" style="margin-left:-100px" alt="">
                <img src="<?php echo URLROOT.'/img/7..png'?>" style="margin-top:500px;margin-left:-330px;rotate:30deg"
                    alt="">
            </div>
            <div class="col-sm-4">
                <h1 style="font-size: 5rem;margin-top:25%">Juice</h1>
                <p>Flavors that will make you do a happy dance.</p>
            </div>
            <div class="col-sm-4" style="">
                <img src="<?php echo URLROOT.'/img/58..png'?>" style="margin-left:-130px;float:right" alt="">
            </div>
        </div>
    </div>
</section>


<form action="<?php echo URLROOT ;?>juices/productprocesstonextstep" method="post" enctype="multipart/form-data">
    <section>
    <div class="container">

        <?php $count=0; foreach($data as $dataline){
    if($count%3 == 0){ echo '<div class="row mt-4 mb-2 " style="--mdb-gutter-y: 0;--mdb-gutter-x:0.5rem;">';}?>
        <input type="hidden" value="<?php echo $dataline->id;?>" name="<?php echo 'id'.$count;?>"
            id="<?php echo 'id'.$count;?>">
        <div class="col-sm-4 ">
            <div class="card h-100" style=" padding:10px; ">
                <img src="<?php echo URLROOT.'/product_img/'. $dataline->image;?>" height="400px" alt="">
                <input type="hidden" value="<?php echo $dataline->image;?>" name="<?php echo 'image'.$count;?>"
                id="<?php echo 'image'.$count;?>">
                <p class="mt-2"><?php echo$dataline->name;?></p>
                <input type="hidden" value="<?php echo $dataline->name;?>" name="<?php echo 'name'.$count;?>"
                id="<?php echo 'name'.$count;?>">
                <div class="row">
                    <div class="col-sm-6">
                        <p><?php echo$dataline->price;?>\-</p>
                        <input type="hidden" value="<?php echo $dataline->price;?>" name="<?php echo 'price'.$count;?>"
                        id="<?php echo 'price'.$count;?>">
                    </div>
                    <div class="col-sm-6">
                        <p><?php echo$dataline->quantity;?></p>
                        <input type="hidden" value="<?php echo $dataline->quantity;?>" name="<?php echo 'quantity'.$count;?>"
                        id="<?php echo 'quantity'.$count;?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 ">
                        <button class="px-5" type="submit" name="<?php echo 'cart'.$count;?>"
                            id="<?php echo 'cart'.$count;?>"
                            style="display:block;margin:auto;background:#dddd51;font-size:1.2rem">Add Cart </button>
                    </div>

                    <div class="col-sm-6">
                        <button class="px-5" type="submit" name="<?php echo 'buy'.$count;?>"
                            id="<?php echo 'buy'.$count;?>"
                            style="display:block;margin:auto;background:#a9e495;font-size:1.2rem">Buy Now </button>
                    </div>
                </div>
            </div>
        </div>
        <?php '</div>' ?>
        <!-- <br> -->
        <?php $count++;} ?>

        <input type="hidden" value="<?php echo $count;?>" name="totalcount" id="totalcount">



    </div>
</section>
</form>
<section style="background: #E2BED3;">
    <?php require APPROOT . '/views/inc/footer.php';?>
</section>