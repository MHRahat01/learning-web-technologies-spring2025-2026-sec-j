<?php

    //$user = $_POST['user'];
    //$data = json_decode($user);
    
    //sleep(3);

    // if($data->password == ""){
    //     echo "username is null, please type first!";
    // }else{
    //     echo "your password is: ".$data->password;
    // }

    /*$user = ['username'=>'alamin', 'password'=>'123', 'email'=>'alamin@aiub.edu'];
    $data = json_encode($user);
    echo $data;*/

     $product= [
            ['id' => 1, 'name' => 'Laptop', 'price' => '1200', 'stock' => 15],
            ['id' => 2, 'name' => 'Mouse', 'price' => '25', 'stock' => 80],
            ['id' => 3, 'name' => 'Keyboard', 'price' => '45', 'stock' => 60],
            ['id' => 4, 'name' => 'Monitor', 'price' => '225', 'stock' => 20],
            ['id' => 5, 'name' => 'Headset', 'price' => '55', 'stock' => 35],
        ];
    $data = json_encode($product);
    echo $product
?>