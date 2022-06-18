<?php
require_once('connection.php');
class Product
{
    public $id;
    public $name;
    public $price;
    public $description;
    public $reviews;
    public $img;
    public $rating;

    public function __construct($id, $name, $price, $description, $reviews, $img,  $rating)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->reviews = $reviews;
        $this->img = $img;
        $this->rating = $rating;
    }

    static function getAll()
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT * FROM product");
        $products = [];
        foreach ($req->fetch_all(MYSQLI_ASSOC) as $product) {
            $products[] = new Product(
                @$product['id'],
                @$product['name'],
                @$product['price'],
                @$product['description'],
                @$product['reviews'],
                @$product['img'],
                @$product['rating']
            );
        }
        return $products;
    }

    static function get($id)
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT * FROM product WHERE id = $id");
        $result = $req->fetch_assoc();
        $product = new Product(
            $result['id'],
            $result['name'],
            $result['price'],
            $result['description'],
            $result['reviews'],
            $result['img'],
            $result['rating']
        );
        return $product;
    }

    static function insert($name, $price, $description, $reviews, $img, $rating)
    {
        $db = DB::getInstance();
        $req = $db->query(
            "INSERT INTO product (name, price, description, reviews, img, rating)
            VALUES ('$name', $price, '$description', '$reviews', '$img', '$rating');"
        );
        return $req;
    }

    static function delete($id)
    {
        $db = DB::getInstance();
        $req = $db->query("DELETE FROM product WHERE id = $id");
        return $req;
    }

    static function update($id, $name, $price, $description, $reviews, $img, $rating)
    {
        $db = DB::getInstance();
        $req = $db->query(
            "
                UPDATE product
                SET name = '$name', price = $price, description = '$description', reviews = '$reviews', img = '$img' , rating = '$rating',
                WHERE id = $id
            ;"
        );
    }
}
