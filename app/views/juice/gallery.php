<?php require APPROOT . '/views/inc/header.php';?>
<?php require APPROOT . '/views/inc/unavbar.php';?>
<style>
@import url('https://fonts.googleapis.com/css2?family=Jacques+Francois+Shadow&display=swap');

h1 {
    font-family: "Jacques Francois Shadow", serif;
    text-align: center;
    color: black;
    margin-bottom:0px;
    font-size: 5rem;
}
.cur{
    box-shadow:none;
}
.cur img{
    border-radius:50%;
    height:300px;
    width:300px;
    display:block;
    margin:auto;
}
</style>
<section style="background: #7BDCB5;height:750px">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5" style="background: #E2BED3;border-radius:45%;margin-left:-240px;height:750px">
                <img src="<?php echo URLROOT.'/img/78..png'?>" style="rotate:40deg;margin-left:150px" alt="">
                <img src="<?php echo URLROOT.'/img/7..png'?>"   style="rotate:40deg;margin-left:250px" alt="">
            </div>
            <div class="col-sm-5" style="padding-top:10%">
                <h1>  <img src="<?php echo URLROOT.'/img/19..png'?>" style="margin-left:100px;padding-top:60px" alt="">Gallery</h1>
              
                <img src="<?php echo URLROOT.'/img/46..png'?>" style="rotate:60deg;margin-left:70px" alt="">
            </div>
            <div class="col-sm-2">
                <img src="<?php echo URLROOT.'/img/79..png'?>" alt="">
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container p-4">
        <div class="row">
            <div class="col-sm-4 mb-3">
                <div class="card cur">
                    <img src="<?php echo URLROOT.'/img/73..jpeg'?>" alt="">
                </div>
            </div>

            <div class="col-sm-4 mb-3">
                <div class="card cur">
                    <img src="<?php echo URLROOT.'/img/74..jpeg'?>" alt="">
                </div>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card cur">
                    <img src="<?php echo URLROOT.'/img/72..jpeg'?>" alt="">
                </div>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card cur">
                    <img src="<?php echo URLROOT.'/img/75..jpeg'?>" alt="">
                </div>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card cur">
                    <img src="<?php echo URLROOT.'/img/76..jpeg'?>" alt="">
                </div>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card cur">
                    <img src="<?php echo URLROOT.'/img/77..jpeg'?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section style="background: #E2BED3;">
<?php require APPROOT . '/views/inc/footer.php';?>
</section>
