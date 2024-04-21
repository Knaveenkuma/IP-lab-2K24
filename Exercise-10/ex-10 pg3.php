<?php

class Product
{
    private $name;
    private $price;
    private $quantity;
    private $category;

    public function __construct($name, $price, $quantity, $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->category = $category;
    }


    public function addProduct()
    {
        echo "<h3>Product added:</h3> {$this->name}<br>Price: {$this->price}<br>Quantity: {$this->quantity}<br>Category: {$this->category}\n<br>";
        echo"<br>";
    }


    public function updateProduct($newPrice, $newQuantity)
    {
        
        $this->price = $newPrice;
        $this->quantity = $newQuantity;


        echo "<h3>Product updated:</h3> {$this->name}<br>New Price: {$this->price}<br>New Quantity: {$this->quantity}\n";
    }

    
    public function deleteProduct()
    {
       
        echo "Product deleted: {$this->name}\n";
    }
}


$product = new Product("Laptop", 999, 10, "Electronics");
$product->addProduct();


$product->updateProduct(899, 5);


$product->deleteProduct();

?>
