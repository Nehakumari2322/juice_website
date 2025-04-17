<form action="<?php echo URLROOT ;?>juices/usernavform" method="post" style="margin-bottom:0">
    <style>
    .btn {
        box-shadow: none;
    }
    </style>
    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
        <div class="container-fluid justify-content-between">
            <!-- Left elements -->
            <div class="d-flex">
                <!-- Brand -->
                <a class="navbar-brand me-2 mb-1 d-flex align-items-center">
                    <img src="<?php echo URLROOT.'/img/logoo.png'?>" height="50px" alt="">
                </a>


            </div>
            <!-- Left elements -->

            <!-- Center elements -->
            <ul class="navbar-nav flex-row d-none d-md-flex">
                <li class="nav-item me-3 me-lg-1 active">
                    <button class="nav-link btn" name="home" id="home">
                        Home
                    </button>
                </li>

                <li class="nav-item me-3 me-lg-1">
                    <div class="dropdown">
                        <button class="btn  dropdown-toggle" style="font-size:1rem" type="button" 
                            data-mdb-dropdown-init data-mdb-ripple-init aria-expanded="false">
                           Menu
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <li><button class="dropdown-item" type="submit" name="smoothies" id="smoothies">Smoothie</button></li>
                            <li><button class="dropdown-item" type="submit" name="juice" id="juice">Juice</button></li>
                        </ul>
                    </div>
                   
                </li>

                <li class="nav-item me-3 me-lg-1">
                    <img src="<?php echo URLROOT.'/img/drink bar.png'?>" height="30px" alt="">
                </li>

                <li class="nav-item me-3 me-lg-1">
                    <button class="nav-link btn" name="gallery" id="gallery">
                        Gallery
                    </button>
                </li>

                
            </ul>
            <!-- Center elements -->

            <!-- Right elements -->
            <ul class="navbar-nav flex-row">

                <li class="nav-item me-3 me-lg-1">
                    <button class="nav-link btn" name="cart" id="cart">
                        Cart <img src="<?php echo URLROOT.'/img/11..png'?>" height="30px" alt="">
                    </button>
                </li>
                <li class="nav-item me-3 me-lg-1">
                    <?php if($_SESSION['name'] == null){?>
                        <button class="nav-link btn" name="login" id="login">
                        Login/Sign up <img src="https://img.icons8.com/?size=30&id=98957&format=png" height="30px" alt="">
                    </button>
                    <?php
                    }
                    else{?>
                  <p class="mt-2">
                       Welcome <?php echo $_SESSION['name'] ?><img src="https://img.icons8.com/?size=30&id=98957&format=png" height="30px" alt="">
                       </p>
                    <?php } ?>
                   
                </li>


            </ul>
            <!-- Right elements -->
        </div>
    </nav>
    <!-- Navbar -->


</form>