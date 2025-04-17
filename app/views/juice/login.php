<?php require APPROOT . '/views/inc/header.php';?>
<?php require APPROOT . '/views/inc/unavbar.php';?>
<!-- Pills navs -->
<style>
    body{
        background:url('<?php echo URLROOT.'/img/bg.jpg'?>');
        background-repeat: no-repeat;
        background-size: cover;
      
    }
</style>

<?php if($data['message']){ ?>
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
      <h4>  <?php echo $data['message'];?></h4>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<?php } ?>
<div class="container">
    <div class="row">
        <div class="col-sm-5" style="display:block;margin:auto;algin-item:center;">
            <div class="card p-5 mt-5" style="background:white">
                <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="tab-login" data-mdb-pill-init href="#pills-login" role="tab"
                            aria-controls="pills-login" aria-selected="true">Login</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="tab-register" data-mdb-pill-init href="#pills-register" role="tab"
                            aria-controls="pills-register" aria-selected="false">Register</a>
                    </li>
                </ul>
                <!-- Pills navs -->

                <!-- Pills content -->
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                        <form action="<?php echo URLROOT ;?>juices/agentsLogin" method="post">
                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="email" id="email" name="email" class="form-control" />
                                <label class="form-label" for="email">Email or username</label>
                            </div>

                            <!-- Password input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="password" id="password" name="password" class="form-control" />
                                <label class="form-label" for="password">Password</label>
                            </div>

                           

                            <!-- Submit button -->
                            <button type="submit" name="login" id="login"  class="btn btn-primary btn-block mb-4">Sign in</button>

                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                        <form action="<?php echo URLROOT ;?>juices/userregistration" method="post">

                            <!-- Name input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="text" id="name" name="name" class="form-control" />
                                <label class="form-label" for="name" >Name</label>
                            </div>

                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="email" id="email" name="email" class="form-control" />
                                <label class="form-label" for="email">Email</label>
                            </div>
                            <!-- phone input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="number" id="phone" name="phone" class="form-control" />
                                <label class="form-label" for="phone">Phone No.</label>
                            </div>

                            <!-- Password input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="password" id="password" name="password" class="form-control" />
                                <label class="form-label" for="password">Password</label>
                            </div>
 
                            <!-- Submit button -->
                            <button type="submit"  name="register" id="register" class="btn btn-primary btn-block mb-3">Sign in</button>
                        </form>
                    </div>
                </div>
                <!-- Pills content -->
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.1/mdb.umd.min.js"></script>
</body>

</html>