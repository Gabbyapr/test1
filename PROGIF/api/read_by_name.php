<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../config/Database.php';
  include_once 'Post.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $post = new Post($db);
  
  $post->product_name = isset($_GET['product_name']) ? $_GET['product_name'] : die();

  // Blog post query
  $result = $post->read_by_name();

  // Get row count
  $num = $result->rowCount();

  // Check if any posts
  if($num > 0) {
    // Post array
    $posts_arr = array();
    // $posts_arr['data'] = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
      extract($row);

      $post_item = array(
        //'id' => $id,
        'title' => $title,
        'product_name' => $product_name,
        'body' => html_entity_decode($body),
        'author' => $author,
        //'product_id' => $product_id,
        'created at' => $created_at,
        
      );

      // Push to "data"
      array_push($posts_arr, $post_item);
      // array_push($posts_arr['data'], $post_item);
    }

    // Turn to JSON & output
    echo json_encode($posts_arr);

  } else {
    // No Posts
    echo json_encode(
      array('message' => 'Belum ada review untuk produk ini')
    );
  }
