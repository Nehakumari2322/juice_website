<?php require APPROOT . '/views/inc/header.php';?>
<?php require APPROOT . '/views/inc/unavbar.php';?>
<style>
@import url('https://fonts.googleapis.com/css2?family=Lovers+Quarrel&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Advent+Pro:ital,wght@0,100..900;1,100..900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Jacques+Francois+Shadow&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');

.re {
    position: relative;
    text-align: center;
    color: white;
}

.bottom-left {
    position: absolute;
    bottom: 0px;
    left: 0;
}

.top-left {
    position: absolute;
    top: 8px;
    left: 6px;
    rotate: 300deg;
}

.top-right {
    position: absolute;
    top: 50px;
    right: 325px;
    rotate: 30deg;
}

.bottom-right {
    position: absolute;
    bottom: 150px;
    right: 430px;
    rotate: 300deg;
}

.centered {
    position: absolute;
    top: 50%;
    left: 30%;
    transform: translate(-50%, -50%);
}

.centered p {
    font-family: "Lovers Quarrel", cursive;
    font-size: 5rem;

    color: black;
}

.centered button {
    font-family: "Advent Pro", sans-serif;
    background: none;
    border: 1px solid white;
    color: black;
    font-size: 1.7rem;
}

.rod{
    box-shadow:none;
}
.rod img{
    border-radius:50%;
    height:150px;
    width:150px;
    align-items:center;
}
.rod p{
    font-family: "Inter", sans-serif;
    text-align:left;
    color:black;
    margin-top:50px;
    font-weight:200;
    margin-left:30px;
    font-size:1.8rem;
}
</style>
<section style="background: #E2BED3;">
    <div class="container-fluid">
        <div class="row re">

            <div class="col-sm-8">

                <div class="bottom-left"> <img src="<?php echo URLROOT.'/img/9..png'?>" alt=""></div>
                <div class="top-left"> <img src="<?php echo URLROOT.'/img/10..png'?>" alt=""></div>
                <div class="top-right"> <img src="<?php echo URLROOT.'/img/8..png'?>" alt=""></div>
                <div class="bottom-right"> <img src="<?php echo URLROOT.'/img/7..png'?>" alt=""></div>
                <div class="centered">
                    <p>Irresistibly delicious, <br> one sip at a time.</p>
                    <button class="btn p-2">Show Now</button>
                </div>


            </div>
            <div class="col-sm-4">
                <img src="<?php echo URLROOT.'/img/5..png'?>" alt="">
            </div>
        </div>

    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <h1>Smoothie & Juice</h1>
            <p>Flavors that will make you do a happy dance.</p>
            <div class="col-sm-4 mb-4 mt-4">
                <div class="card" style=" padding:30px; ">
                    <img src="<?php echo URLROOT.'/img/4..jpeg'?>" alt="">
                    <p class="mt-2">Hippie Chick</p>
                    <p>200/-</p>
                </div>
            </div>
            <div class="col-sm-4 mb-4 mt-4">
                <div class="card" style=" padding:30px; ">
                    <img src="<?php echo URLROOT.'/img/2..jpeg'?>" alt="">
                    <p class="mt-2">Smootheory</p>
                    <p>100/-</p>
                </div>
            </div>
            <div class="col-sm-4 mb-4 mt-4">
                <div class="card" style=" padding:30px; ">
                    <img src="<?php echo URLROOT.'/img/16.jpeg'?>" alt="">
                    <p class="mt-2">Fairytale Fruits</p>
                    <p>300/-</p>
                </div>
            </div>


            <div class="col-sm-4 mb-4">
                <div class="card h-100" style=" padding:30px; ">
                    <img src="<?php echo URLROOT.'/img/1..jpeg'?>" alt="">
                    <p class="mt-4">The Juice Box</p>
                    <p>200/-</p>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card h-100" style=" padding:30px; ">
                    <img src="<?php echo URLROOT.'/img/13..jpg'?>" height="320px" alt="">
                    <p class="mt-2">Jal Jeera</p>
                    <p>50/-</p>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card h-100" style=" padding:30px; ">
                    <img src="<?php echo URLROOT.'/img/12..jpg'?>" alt="">
                    <p class="mt-2">Summer Time</p>
                    <p>150/-</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="background: #E2BED3;">
    <div class="container mt-5">
        <div class="row">
            <h1>About Us</h1>
            <div class="col-sm-6 p-5">
                <img src="<?php echo URLROOT.'/img/20..png'?>" alt="">
                <p style=" text-align: justify;text-justify: inter-word;">I'm a paragraph. Click here to add your own
                    text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and
                    make changes to the font. I’m a great place for you to tell a story and let your users know a little
                    more about you.</p>
                <div class="row">
                    <div class="col-sm-2 mt-4">
                        <img src="<?php echo URLROOT.'/img/19..png'?>" alt="">
                    </div>
                    <div class="col-sm-6"></div>
                    <div class="col-sm-4">
                        <div class="card">
                            <img src="<?php echo URLROOT.'/img/14..jpeg'?>" alt="">
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <img src="<?php echo URLROOT.'/img/15..jpeg'?>" height="500px" alt="">
                </div>

            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row pt-2 pb-2">
            <div class="col-sm-3">
                <div class="card" style="box-shadow:none">
                    <img src="<?php echo URLROOT.'/img/22..jpeg'?>" alt="">
                </div>

            </div>
            <div class="col"></div>
            <div class="col-sm-3">
                <div class="card" style="box-shadow:none">
                    <img src="<?php echo URLROOT.'/img/21..jpeg'?>" alt="">
                </div>

            </div>
            <div class="col"></div>
            <div class="col-sm-3">
                <div class="card" style="box-shadow:none">
                    <img src="<?php echo URLROOT.'/img/23..jpeg'?>" height="200px" alt="">
                </div>

            </div>
        </div>
    </div>
</section>

<section style="background: #7BDCB5;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-1">
                <img src="<?php echo URLROOT.'/img/31..png'?>" alt="">
            </div>
            <div class="col-sm-11">
                <h1>Our Menu</h1>
            </div>
           

            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-3">
                        <div class="card rod">
                            <img src="<?php echo URLROOT.'/img/28..jpeg'?>" alt="">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="card rod">
                           <p>Oat Banana Smoothie</p>
                           <p style="margin-top:0">200/-</p>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-3">
                        <div class="card rod">
                            <img src="<?php echo URLROOT.'/img/27..jpeg'?>" alt="">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="card rod">
                           <p>Trail Mix Smoothie</p>
                           <p style="margin-top:0">200/-</p>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-3">
                        <div class="card rod">
                            <img src="<?php echo URLROOT.'/img/26..jpeg'?>" alt="">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="card rod">
                           <p>Peachy Oat Smoothie</p>
                           <p style="margin-top:0;">200/-</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-3">
                        <div class="card rod">
                            <img src="<?php echo URLROOT.'/img/25..jpeg'?>" alt="">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="card rod">
                           <p>Nungu Paal</p>
                           <p style="margin-top:0">200/-</p>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-3">
                        <div class="card rod">
                            <img src="<?php echo URLROOT.'/img/24..jpeg'?>" alt="">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="card rod">
                           <p>Oat Banana Smoothie</p>
                           <p style="margin-top:0">200/-</p>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-3">
                        <div class="card rod">
                            <img src="<?php echo URLROOT.'/img/29..jpeg'?>" alt="">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="card rod">
                           <p>Oat Banana Smoothie</p>
                           <p style="margin-top:0">200/-</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-11"> </div>
            <div class="col-sm-1"> <img src="<?php echo URLROOT.'/img/32..png'?>" style=" rotate: 300deg;height:90px;" alt="">
            </div>
        </div>

    </div>

</section>
<?php require APPROOT . '/views/inc/footer.php';?>