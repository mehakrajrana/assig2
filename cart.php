<?php 
 session_start();
 
?>
    
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link href="style/style.css" rel="stylesheet" >
  </head>
  <body>
    <div class="col-md-12">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">Farm Shop</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Contact</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>  
            </form>
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="">Cart <span class="badge bg-secondary"><?php  if(isset($_SESSION['p_counter'])){  echo $_SESSION['p_counter']; }else{ echo "0"; } ?></span></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    
    <table class="table">
      <thead>

        <tr>
          <th scope="col">#</th>
          <th scope="col">Image</th>
          <th scope="col">Product</th>
          <th scope="col">Price</th>
          <th scope="col">Quantity</th>
          <th scope="col">Total</th>
        </tr>
    
      </thead>
      <tbody>
<?php
    if(isset($_SESSION['p_name'])){

    $filtered_array=array_unique($_SESSION['p_name']);

    foreach($filtered_array as $row){

    $item_repeated=array_count_values($_SESSION['p_name']);
    $find_position_in_array=array_search($row,$_SESSION['p_name']);

    ?>
<tr>
          <th scope="row">1</th>
          <td><img src="<?php echo $_SESSION['image'][$find_position_in_array]?>" alt=""></td>
          <td><?php echo $row ?></td>
          <td><?php echo $_SESSION['price'][$find_position_in_array]?></td>
          <td><?php echo $item_repeated[$row] ?></td>
          <td>CAD $0.00</td>
        </tr>
        <tr>
    <?php 
    }
    }
?>

        
        

</tbody>
    </table>

    <div class="footer">
        <div class="row">
          <div class="text-center">
            <p>Developed by Hamenjeet Kaur &copy; 2024</p>
          </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js" ></script>

  </body>
</html>    
