<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Software Development Wing <Penta Head Private Ltd.>
 */
class Juices extends Controller{

    public function __construct() {
       // echo 'Agents construct';
        $this->juice = $this->model('Juice');
        $todaysDate = null;
    }

    public function adminLogmeIn()
    {
        // $data=$this->juice->getCategory(); 
        $this->view('admin/dashboard');
    } 
    public function logmein()
    {
       
        $this->view('juice/main');
    } 

    public function adminnavform(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['home'])){
               
                // $data=$this->juice->getCat();
                $this->view('admin/dashboard',$data);
            }
            else if(isset($_POST['courses'])){
                $data=$this->interior->getCourseDetails();
                $this->view('admission/course_detail',$data);
            }
           
        }
    }
    
    public function usernavform(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['home'])){
                $this->view('juice/main');
            }
            else if(isset($_POST['gallery'])){
                $this->view('juice/gallery');
            }
            else if(isset($_POST['smoothies'])){
                $category = '2';
                $data=$this->juice->getmenuItems($category);
                $this->view('juice/smoothies',$data);
            }
            else if(isset($_POST['juice'])){
                $category = '1';
                $data=$this->juice->getmenuItems($category);
                $this->view('juice/juice',$data);
            }
            else if(isset($_POST['login'])){
                $this->view('juice/login');
            }
            else if(isset($_POST['cart'])){
                $user_id= $_SESSION['userid'];
                $data = $this->juice->getCartItem($user_id);
                $this->view('juice/cart',$data,$adata);
            }
           
        }
    }

    public function agentsLogin(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data['message'] = null;
            if(isset($_POST['login'])){
                $data = [
                    'userid' => trim($_POST['email']),
                    'password' => trim($_POST['password'])
                ];
                $matched = $this->juice->login_verification($data);
                echo"werfgvc".$matched;
                if($matched == true){
                    $this->createUserSession($data['userid']);
                    $username = $_SESSION['name']; 
                    $this->view('juice/main');       
                }
                else{
                  
                    $data['message']= " Invalid Password  !! ";
                    $this->view('juice/login', $data);
                }
            }
        }
    }

    public function userRegistration(){
        $data['message'] = null;
        echo"werfgbv";
        if(isset($_POST['register']))
        {
            $name =  trim($_POST['name']);
            $phone_no =  trim($_POST['phone']);
            $email =  trim($_POST['email']);
            $password =  trim($_POST['password']);
            
            $createTs = $this->getCurrentTs();
            $created_by = 'user';
          
            $match = $this->juice->email_verification($email);
            if($match == true)
            {
                $data['message']= " User already Registered please Login  !! ";  
            }
            else{

                $userId = $this->juice->insertUserData($name,$phone_no,$email,$createTs,$created_by);
                echo"sdfghj".$userId;
                $log = $this->juice->insertIntoLogin($userId,$email,$password,$createTs,$created_by);
                $data['message']= " User Register Successfully !! ";
                
            }
            $this->view('juice/login',$data); 
        }
    }

    public function main(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['more_services'])){
                $this->view('interior/services');
            }
           
            else if(isset($_POST['project'])){
                $this->view('interior/project');
            }
        
           
        }
    }

    public function admindashboard(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['addproduct'])){
                $data=$this->juice->getCategory(); 
                $this->view('admin/addproduct',$data);
            }
        } 
    }
   
    public function addproduct(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['add_product'])){
                $adata['message'] = 0;
                $productname =  trim($_POST['productname']);
                $category =  trim($_POST['category']);
                $quantity  =  trim($_POST['quantity']);
                $price =  trim($_POST['price']);
                $createdTs =$this->getCurrentTs();
                $createdBy = 'admin';
                $lastUpdatedTs = $this->getCurrentTs();
                $lastUpdatedBy='admin';
                $targetDir = "product_img/"; 
                $allowTypes = array('jpg','png','jpeg');       
                $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
                $image = array_filter($_FILES['image']['name']); 
                if(!empty($image)){ 
                    foreach($_FILES['image']['name'] as $key=>$val){ 
                         // File upload path 
                         $image = basename($_FILES['image']['name'][$key]); 
                         $targetFilePath = $targetDir . $image; 
                          
                         // Check whether file type is valid 
                         $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
                         if(in_array($fileType, $allowTypes)){ 
                             // Upload file to server 
                             if(move_uploaded_file($_FILES["image"]["tmp_name"][$key], $targetFilePath)){ 
                                 // Image db insert sql 
                                 $insertValuesSQL .= "('".$image."', NOW()),"; 
                                 $id = $this->juice->insertproduct($productname,$category,$quantity,$price,$image,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy);
                                 if($id != null){
                                    $adata['message']  = "product is added Successfully !!" ;
                                }
                                else{
                                     $adata['message']="Failed to add data, please try again !!";
                                } 
                            }
                        } 
                    } 
                }
                $data=$this->juice->getCategory(); 
                $this->view('admin/addproduct',$data,$adata);
            }
        } 
    }
    
    public function productProcessToNextStep(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $totalcount = trim($_POST['totalcount']);
            // $userId = $_SESSION['userid'];
            for ($count=0; $count<$totalcount; $count++){
                if(isset($_POST['cart'.$count])){
                    $product_name = trim($_POST['name'.$count]);
                    $product_id = trim($_POST['id'.$count]); 
                    $price = trim($_POST['price'.$count]);
                    $quantity = trim($_POST['quantity'.$count]);
                  
                    $image1 = trim($_POST['image'.$count]);
                    $number = '1';
                    $totalprice = trim($_POST['price'.$count]);
                    $user_id =  $_SESSION['userid'];
                    $createdBy= $_SESSION['name'];
                    $createdTs=$this->getCurrentTs();
                    $lastUpdatedBy= $_SESSION['name'];
                    $lastUpdatedTs=$this->getCurrentTs();
                    $check = $this->juice->checkuserExitInCart($user_id);
                    // print_r($check);
                    if($check->user_id == null){
                        $cartId = $this->juice->insertIntoCart($price,$user_id,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy);
                        $cartLine = $this->juice->insertIntoCartline($cartId,$product_id,$quantity,$price,$number,$product_name,$totalprice,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy);
                    }
                    else{
                        $duplicate = $this->juice->checkProductExit($check->cart_id,$product_id);
                        // print_r($duplicate);
                        if($duplicate->id == null){
                            $cartId = $this->juice->updateItems($check->cart_id,$price,$lastUpdatedTs,$lastUpdatedBy);
                            $cartLine = $this->juice->insertIntoCartline($check->cart_id,$product_id,$quantity,$price,$number,$product_name,$totalprice,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy);
                        }
                       else{
                            $cartId = $this->juice->updateItems($check->cart_id,$price,$lastUpdatedTs,$lastUpdatedBy,);
                            $updateitem = $this->juice->updateItemInCartLine($number,$price,$product_id,$check->cart_id,$lastUpdatedTs,$lastUpdatedBy);
                            
                       }
                    }
                    if($cartId != null && $cartLine != null || $updateitem != null){
                        $adata['message'] = "Product is added to cart Successfully !!" ;
                    }
                    
                    $data = $this->juice->getCartItem($user_id);
                   
                    $this->view('juice/cart',$data,$adata);
                }
    
                else if(isset($_POST['buy'.$count])){
                    $product_name = trim($_POST['name'.$count]);
                    $product_id = trim($_POST['id'.$count]); 
                    $price = trim($_POST['price'.$count]);
                    $quantity = trim($_POST['quantity'.$count]);
                  
                    $image1 = trim($_POST['image'.$count]);
                    $number = '1';
                    $totalprice = trim($_POST['price'.$count]);
                    $user_id =  $_SESSION['userid'];
                    $createdBy= $_SESSION['name'];
                    $createdTs=$this->getCurrentTs();
                    $lastUpdatedBy= $_SESSION['name'];
                    $lastUpdatedTs=$this->getCurrentTs();
                    $check = $this->juice->checkuserExitInCart($user_id);
                    // print_r($check);
                    if($check->user_id == null){
                        $cartId = $this->juice->insertIntoCart($price,$user_id,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy);
                        $cartLine = $this->juice->insertIntoCartline($cartId,$product_id,$quantity,$price,$number,$product_name,$totalprice,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy);
                    }
                    else{
                        $duplicate = $this->juice->checkProductExit($check->cart_id,$product_id);
                        // print_r($duplicate);
                        if($duplicate->id == null){
                            $cartId = $this->juice->updateItems($check->cart_id,$price,$lastUpdatedTs,$lastUpdatedBy);
                            $cartLine = $this->juice->insertIntoCartline($check->cart_id,$product_id,$quantity,$price,$number,$product_name,$totalprice,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy);
                        }
                       else{
                            $cartId = $this->juice->updateItems($check->cart_id,$price,$lastUpdatedTs,$lastUpdatedBy,);
                            $updateitem = $this->juice->updateItemInCartLine($number,$price,$product_id,$check->cart_id,$lastUpdatedTs,$lastUpdatedBy);
                            
                       }
                    }
                    if($cartId != null && $cartLine != null || $updateitem != null){
                        $adata['message'] = "Product is added to cart Successfully !!" ;
                    }
                    
                    $data = $this->juice->getCartItem($user_id);
                   
                    $this->view('juice/cart',$data,$adata);
                }
                
                
    
                }
               
            }
        }
    

        public function removeformcart(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $adata['message'] = null;
               
                $totalcount = trim($_POST['totalcount']);
                for ($count=0; $count<$totalcount; $count++){
                    if(isset($_POST['remove'.$count])){
                    $cart_id = trim($_POST['cart_id'.$count]);
                    $product_id = trim($_POST['product_id'.$count]);
                    $lastUpdatedBy= $_SESSION['name'];
                    $lastUpdatedTs=$this->getCurrentTs();
                    $price = $this->juice->getPrice($cart_id,$product_id);
                    $CartPrice =  $this->juice->updateCartPrice($cart_id,$price->total_price,$lastUpdatedTs,$lastUpdatedBy);
                    $checkprice = $this->juice->getPriceIfExit($cart_id);
                    if($checkprice->grand_total == null || $checkprice->grand_total == 0){
                        $deleteCart = $this->juice->deleteItem($cart_id);
                    }
                    $delete  = $this->juice->deleteCartItem($cart_id,$product_id);
                    if($deleteCart  == true || $delete == true){
                        $adata['message'] = "Product is removed from cart !!" ;
                    }
                    $user_id= $_SESSION['userid'];
                    $data = $this->juice->getCartItem($user_id);
                    $this->view('juice/cart',$data,$adata);
                    
                      
                    }
                    if(isset($_POST['purchase'])){
                        $cartId = trim($_POST['cart_id'.$count]);
                        $data = $this->juice->getCartItemForOrder($cartId);
                        $this->view('juice/order',$data);
                    }
                   
                   
                }
            }
        }


        public function placeorder(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                if(isset($_POST['cancel'])){
                    $user_id= $_SESSION['userid'];
                    $data = $this->juice->getCartItem($user_id);
                    $this->view('juice/cart',$data,$adata);
                }
                else if(isset($_POST['order'])){
                    $cartId = trim($_POST['cartId']);
                    $first_name=trim($_POST['first_name']);
                    $last_name=trim($_POST['last_name']);
                    $email =trim($_POST['email']);
                    $phone =trim($_POST['phone']);
                    $pincode=trim($_POST['pin']);
                    $address_line_1=trim($_POST['street']);
                    $address_line_2=trim($_POST['appartment']);
                    $city=trim($_POST['city']);
                    $state=trim($_POST['state']);
                    $country=trim($_POST['country']);
                    $createdBy= $_SESSION['name'];
                    $createdTs=$this->getCurrentTs();
                    $lastUpdatedBy= $_SESSION['name'];
                    $lastUpdatedTs=$this->getCurrentTs();
                    $cart =$this->juice->getCartItemForOrder($cartId);
                    $order = $this->juice->inserIntoOrder($cart->cart_id,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy);
                    $orderLine = $this->juice->insertIntoOrderLine($order,$cart->cart_id,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy);
                    $id=$this->juice->makeOrder($first_name,$last_name,$email,$phone,$pincode,$address_line_1,$address_line_2,$city,$state,$country,$createdBy,$createdTs,$lastUpdatedBy,$lastUpdatedTs,$cart->user_id); 
                    // delete
                    $deleteCart = $this->juice->deleteItem($cart->cart_id);
                    $deleteCartLine = $this->juice->deleteCartItemFromOder($cart->cart_id);
    
                    $this->view('juice/ordersucess');
                }
            
               
            }
        }

    // -------------------------------------session------------------------------------------

    public function createUserSession($user){
        session_start();
         // Taking current system Time
         $_SESSION['start'] = time(); 
  
         // Destroying session after 1 minute
         $_SESSION['expire'] = $_SESSION['start'] + (1 * 240) ; 
       // echo " in session: userid is ". $user;
       $_SESSION['loggedin'] = "YES";
       $_SESSION['userid'] = $user;
       $data = $this->juice->getUserName($user);
       $_SESSION['name'] = $data->name;
       $_SESSION['userid'] = $data->user_id;
       return $user;
    }
    
    public function logout(){

        unset($_SESSION['userid']);
        unset($_SESSION['loggedin']);
        session_destroy();
        // redirect('users/login');
    }
}