<?php

class Juice {

    private $db;

    public function __construct() {

        $this->db = new Database;
       
    }


    public function email_verification($data){

        $this->db->query(' SELECT 1 FROM user_details where email = :email ');
        $this->db->bind(':email', $data);
    
        if($row = $this->db->single()){
               
            return true;
        }
        else{
              
            return false;
        }
    }

    public function login_verification($data){
        
        $this->db->query('SELECT * FROM login where email = :user_id and password = :password');
        $this->db->bind(':user_id', $data['userid']);
        $this->db->bind(':password', $data['password']);

        if($row = $this->db->single()){    
            return true;
        }
        else{      
            return false;
        }
    }

    public function getCategory(){
        $this->db->query(' SELECT id,catergory_name FROM category WHERE 1 = 1 ');
        $row = $this->db->resultSet();
        return $row; 
    }

    public function insertproduct($productname,$category,$quantity,$price,$image,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy){
        $this->db->query(' INSERT INTO products(id, name, price, quantity, category_id, image, created_ts, created_by, last_updated_ts, last_updated_by) VALUES(0,:productname,:price,:quantity,:category,:image,:createdTs,:createdBy,:lastUpdatedTs,:lastUpdatedBy)');
        $this->db->bind(':productname', $productname);
        $this->db->bind(':price',$price);
        $this->db->bind(':quantity', $quantity);
        $this->db->bind(':category', $category);
        $this->db->bind(':image',$image);
        $this->db->bind(':createdTs', $createdTs);
        $this->db->bind(':createdBy', $createdBy);
        $this->db->bind(':lastUpdatedTs', $lastUpdatedTs);
        $this->db->bind(':lastUpdatedBy', $lastUpdatedBy);
        if($this->db->execute()){
            $userId = $this->db->insertId();
            return true;

        }
        else {
            return false;
        }
    }


    public function insertUserData($name,$phone_no,$email,$createTs,$created_by){
        $this->db->query(' INSERT INTO user_details(user_id, name, email, phone_no, created_ts, created_by) VALUES(0,:name,:email,:phone_no,:createTs,:created_by)');
        $this->db->bind(':name', $name);
        $this->db->bind(':email',$email);
        $this->db->bind(':phone_no', $phone_no);
        $this->db->bind(':createTs', $createTs);
        $this->db->bind(':created_by',$created_by);
        if($this->db->execute()){
            $userId = $this->db->insertId();
            return $userId;
        }
        else {
            return false;
        }
    }


    public function insertIntoLogin($userId,$email,$password,$createTs,$created_by){
        $this->db->query(' INSERT INTO login(user_id, email, password, created_ts, created_by) VALUES (:userId,:email,:password,:created_ts,:created_by)');
        $this->db->bind(':userId', $userId);
        $this->db->bind(':email',$email);
        $this->db->bind(':password', $password);
        $this->db->bind(':created_ts', $createTs);
        $this->db->bind(':created_by',$created_by);
        if($this->db->execute()){
            $userId = $this->db->insertId();
            return $userId;
        }
        else {
            return false;
        }
    }


    public function getmenuItems($category){
        $this->db->query(' SELECT * FROM products WHERE category_id = :category');
        $this->db->bind(':category', $category);
        $row = $this->db->resultSet();
        return $row; 
    }
    

    public function getProductDetails($product_id){
        $this->db->query(' SELECT id,name,price,quantity,category_id,image FROM products WHERE id= :product_id');
        $this->db->bind(':product_id', $product_id);
        $row = $this->db->single();
        return $row;
    }

    public function getUserName($user){
        $this->db->query(' SELECT name,user_id FROM user_details WHERE email =:user ');
        $this->db->bind(':user', $user);
        $row = $this->db->single();
        return $row;
    }
   
    public function checkuserExitInCart($user_id){
        $this->db->query(' SELECT cart_id,user_id FROM cart WHERE user_id = :user_id ');
        $this->db->bind(':user_id', $user_id);
        $row = $this->db->single();
        return $row;
    }

    public function insertIntoCart($price,$user_id,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy){
        $this->db->query(' INSERT INTO cart(cart_id, user_id, grand_total, created_ts, created_by, last_updated_ts, last_updated_by)'
                .       '  VALUES  (0,:user_id,:price,:createdTs,:createdBy,:lastUpdatedTs,:lastUpdatedBy) ');
        $this->db->bind(':user_id',$user_id); 
        $this->db->bind(':price',$price);
        $this->db->bind(':createdTs', $createdTs);  
        $this->db->bind(':createdBy', $createdBy);
        $this->db->bind(':lastUpdatedTs',$lastUpdatedTs);   
        $this->db->bind(':lastUpdatedBy', $lastUpdatedBy);
        if($this->db->execute()){
            $id = $this->db->insertId();
            return $id;
        }
        else {
            return false;
        }    
    }


    public function insertIntoCartline($cartId,$productId,$quantity,$price,$number,$productname,$totalprice,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy){
        $this->db->query(' INSERT INTO cart_line(id, cart_id, product_id, quantity, number, product_name, product_price, total_price,'
                .        ' created_ts, created_by, last_updated_ts, last_updated_by) VALUES (0,:cartId,:productId,:quantity,'
                .        ' :number,:product_name,:price,:totalprice,:createdTs, :createdBy,:lastUpdatedTs,:lastUpdatedBy)');
        $this->db->bind(':cartId',$cartId); 
        $this->db->bind(':productId',$productId);
        $this->db->bind(':quantity', $quantity);
        $this->db->bind(':price',$price);
        $this->db->bind(':number', $number);
        $this->db->bind(':product_name', $productname);
        $this->db->bind(':totalprice',$totalprice);
        $this->db->bind(':createdTs', $createdTs);  
        $this->db->bind(':createdBy', $createdBy);
        $this->db->bind(':lastUpdatedTs',$lastUpdatedTs);   
        $this->db->bind(':lastUpdatedBy', $lastUpdatedBy);  
        if($this->db->execute()){
            $cart_id = $this->db->insertId();
            return $cart_id;
        }
        else {
            return false;
        }              
    }

    public function checkProductExit($cartId,$productId){
        $this->db->query(' SELECT id FROM cart_line WHERE product_id = :productId AND cart_id =:cartId ');
        $this->db->bind(':productId',$productId); 
        $this->db->bind(':cartId',$cartId);
        $row = $this->db->single();
        return $row; 
    }

    public function updateItems($cartId,$price,$lastUpdatedTs,$lastUpdatedBy){
        $this->db->query(' UPDATE cart SET grand_total = grand_total + :price ,last_updated_ts = :lastUpdatedTs,'
                    .    ' last_updated_by = :lastUpdatedBy WHERE cart_id =:cartId ');
        $this->db->bind(':price',$price); 
        $this->db->bind(':cartId',$cartId);           
        $this->db->bind(':lastUpdatedTs',$lastUpdatedTs);   
        $this->db->bind(':lastUpdatedBy', $lastUpdatedBy);  
        if($this->db->execute()){
            $cart_id = $this->db->insertId();
            return $cart_id;
        }
        else {
            return false;
        }              
    }

    public function updateItemInCartLine($number,$price,$productId,$cartId,$lastUpdatedTs,$lastUpdatedBy){
        $this->db->query(' UPDATE cart_line SET number = number + :number,total_price = total_price +:price, '
                    .    ' last_updated_ts=:lastUpdatedTs,  last_updated_by=:lastUpdatedBy WHERE cart_id =:cartId AND '
                    .    ' product_id =:productId ');  
        $this->db->bind(':number',$number); 
        $this->db->bind(':price',$price);  
        $this->db->bind(':cartId',$cartId);
        $this->db->bind(':productId',$productId); 
        $this->db->bind(':lastUpdatedTs',$lastUpdatedTs);
        $this->db->bind(':lastUpdatedBy',$lastUpdatedBy); 
        if($this->db->execute()){
            $cart_id = $this->db->insertId();
            return $cart_id;
        }
        else {
            return false;
        }         
    }

    public function getCartItem($userId){
        $this->db->query('SELECT ct.cart_id,ct.user_id,cl.product_id,cl.quantity,cl.number,p.name,p.image,ct.grand_total,cl.product_price,cl.total_price FROM cart ct,cart_line cl,products p  WHERE ct.cart_id = cl.cart_id AND cl.product_id = p.id AND ct.user_id = :userId;');
        $this->db->bind(':userId',$userId);
        $row = $this->db->resultSet();
        // print_r($row);
        return $row;
    }

    public function getCartItemForOrder($cartId){
        $this->db->query(' SELECT cart_id,user_id,grand_total,created_ts,created_by,last_updated_ts,last_updated_by FROM cart  WHERE cart_id = :cartId');
        $this->db->bind(':cartId', $cartId);
        $row = $this->db->single();
        // print_r($row);
        return $row;
    }


    public function getPrice($cart_id,$product_id){
        $this->db->query(' SELECT total_price FROM cart_line WHERE cart_id = :cart_id AND product_id = :product_id ');
        $this->db->bind(':product_id',$product_id); 
        $this->db->bind(':cart_id',$cart_id);
        $row = $this->db->single();
        return $row; 
    }

    public function updateCartPrice($cart_id,$total_price,$lastUpdatedTs,$lastUpdatedBy){
        $this->db->query( ' UPDATE cart SET grand_total = grand_total - :total_price, '
                    .     ' last_updated_ts=:lastUpdatedTs,last_updated_by =:lastUpdatedBy WHERE cart_id =:cart_id ');
        $this->db->bind(':cart_id',$cart_id);
        $this->db->bind(':total_price',$total_price); 
        $this->db->bind(':lastUpdatedTs',$lastUpdatedTs);
        $this->db->bind(':lastUpdatedBy',$lastUpdatedBy); 
        if($this->db->execute()){
            $cart_id = $this->db->insertId();
            return $cart_id;
        }
        else {
            return false;
        }               
    }

    public function getPriceIfExit($cart_id){
        $this->db->query( ' SELECT grand_total FROM cart WHERE cart_id =:cart_id ');
        $this->db->bind(':cart_id',$cart_id);
        $row = $this->db->single();
        return $row;  
    }

    public function deleteItem($cart_id){
        $this->db->query('DELETE FROM cart WHERE cart_id =  :cart_id');
        $this->db->bind(':cart_id',$cart_id);
        if($this->db->execute()){
            return true;
        }
        else {
            return false;
        }

    }

    public function deleteCartItem($cart_id,$product_id){
        $this->db->query('DELETE FROM cart_line WHERE cart_id =  :cart_id AND product_id=:product_id');
        $this->db->bind(':cart_id',$cart_id);
        $this->db->bind(':product_id',$product_id);
        if($this->db->execute()){
            return true;
        }
        else {
            return false;
        }

    }

    public function deleteCartItemFromOder($cart_id){
        $this->db->query('DELETE FROM cart_line WHERE cart_id =  :cart_id');
        $this->db->bind(':cart_id',$cart_id);
        if($this->db->execute()){
            return true;
        }
        else {
            return false;
        }
    }

    public function inserIntoOrder($cartId,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy){
        $this->db->query(' INSERT INTO `order`(order_id,user_id,grand_total,created_ts,created_by,last_updated_ts,last_updated_by)'
                .        ' SELECT null,user_id,grand_total,:createdTs,:createdBy,:lastUpdatedTs,:lastUpdatedBy '
                .        ' FROM cart c WHERE c.cart_id =:cartId');
       $this->db->bind(':cartId', $cartId); 
       $this->db->bind(':createdTs', $createdTs); 
       $this->db->bind(':createdBy', $createdBy); 
       $this->db->bind(':lastUpdatedTs',$lastUpdatedTs);   
       $this->db->bind(':lastUpdatedBy', $lastUpdatedBy);  
       if($this->db->execute()){
          $order_id = $this->db->insertId();
          return $order_id;
        }
        else {
            return false;
        }            
    }

    public function insertIntoOrderLine($order,$cartId,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy){
        $this->db->query(' INSERT INTO order_line(order_line_id, order_id, product_id, quantity, number, product_name, '
                    .    ' product_price, total_price, created_ts, created_by, last_updated_ts, last_updated_by) '
                    .    ' SELECT null,:order,product_id, quantity, number, product_name, product_price, total_price,:createdTs,'
                    .    ' :createdBy,:lastUpdatedTs,:lastUpdatedBy FROM cart_line cl  WHERE cl.cart_id = :cartId');
       $this->db->bind(':order', $order);
       $this->db->bind(':cartId', $cartId); 
       $this->db->bind(':createdTs', $createdTs); 
       $this->db->bind(':createdBy', $createdBy); 
       $this->db->bind(':lastUpdatedTs',$lastUpdatedTs);   
       $this->db->bind(':lastUpdatedBy', $lastUpdatedBy);  
       if($this->db->execute()){
          $order_id = $this->db->insertId();
          return $order_id;
        }
        else {
            return false;
        }  
    }


    public function makeOrder($first_name,$last_name,$email,$phone,$pincode,$address_line_1,$address_line_2,$city,$state,$country,$createdBy,$createdTs,$lastUpdatedBy,$lastUpdatedTs,$user_id){
        // echo ' Inside insertApplicant';
        $this->db->query('INSERT INTO order_address(id, user_id, first_name, last_name, phone, email, address_line1, address_line2,'
                        .' city, state, country, pin, created_ts, created_by, last_updates_ts, last_updated_by) '
                        .' VALUES (0,:userid,:first_name,:last_name,:phone,:email,:address_line_1,:address_line_2,:city, '
                        .' :state,:country,:pincode,:created_ts,:created_by,:last_updated_ts,:last_updated_by) ');       
        $this->db->bind(':first_name',$first_name);
        $this->db->bind(':last_name',$last_name);
        $this->db->bind(':email', $email);
        $this->db->bind(':userid', $user_id);
        $this->db->bind(':phone',$phone);
        $this->db->bind(':pincode',$pincode);
        $this->db->bind(':address_line_1',$address_line_1);
        $this->db->bind(':address_line_2',$address_line_2);
        $this->db->bind(':city',$city);
        $this->db->bind(':state',$state);                 
        $this->db->bind(':country',$country);
        $this->db->bind(':created_by', $createdBy);
        $this->db->bind(':created_ts',$createdTs);
        $this->db->bind(':last_updated_by',$lastUpdatedBy);
        $this->db->bind(':last_updated_ts',$lastUpdatedTs);
        if($this->db->execute()){
            $id = $this->db->insertId();
            return true;
        }
        else {
            return false;
        }
    }
}

?>