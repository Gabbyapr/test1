<?php 
  class Post {
    // DB stuff
    private $conn;
    private $table = 'posts';

    // Post Properties
    public $id;
    public $product_id;
    public $product_name;
    public $title;
    public $body;
    public $author;
    public $created_at;

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

    // Get Posts
    public function read_by_id() {
      // Create query
      $query = 'SELECT c.name as product_name, p.id, p.product_id, p.title, p.body, p.author, p.created_at
                                FROM ' . $this->table . ' p
                                LEFT JOIN
                                  categories c ON p.product_id = c.id
                                WHERE
                                      c.id = ?
                                ORDER BY
                                  p.created_at DESC';
      
      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Bind ID
          $stmt->bindParam(1, $this->product_id);

      // Execute query
      $stmt->execute();

      return $stmt;
    }

    // Get Single Post
    public function read_by_name() {
    // Create query
      $query = 'SELECT c.name as product_name, p.id, p.product_id, p.title, p.body, p.author, p.created_at
                                FROM ' . $this->table . ' p
                                LEFT JOIN
                                  categories c ON p.product_id = c.id
                                WHERE
                                      c.name = ?
                                ORDER BY
                                  p.created_at DESC';
      
      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Bind ID
          $stmt->bindParam(1, $this->product_name);

      // Execute query
      $stmt->execute();

      return $stmt;
    }
    
  }