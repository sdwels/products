<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css" rel="stylesheet"/>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="carousel.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background-color:rgba(10, 10, 10, 1);
            margin: 0;
            padding: 0; 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        header {
            position: sticky;
            top: 0;
            left: 0;
            width: 100%;
            padding: 15px 5%;
            background-color: rgba(10, 10, 10, 1);
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            z-index: 100;
        }
        nav {
            width: 100%;
            display: flex;
            align-items: center;
            list-style: none;
            gap: 10px;
            margin: 5px;
        }
        a {
            text-decoration: none;
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 1.2rem;
            font-weight: 500;
            padding: 5px;
            display: block;
        }
        a:hover {
            background-color:rgba(49, 49, 49, 1);
            border-radius: 8px;
            color: white ;
        }
        .search-container {
            display: flex;
            align-items: center;
            text-align: center;
            width: 50%;
            margin-left: -15px;
        }
        .search-bar {
            border: 1px solid  rgba(255, 255, 255, 1);
            border-radius: 5px;
            color: white;
            padding: 8px;
            font-size: 1.2rem;
            width: 100%;
            margin-left: -20%;
            background-color: transparent;
        }
        .search-btn {
            border: 1px solid  rgba(255, 255, 255, 1);
            border-radius: 5px;
            font-size: 1.2rem;
            margin-right: -20%;
            width: 30%;
            background-color: transparent;
            color: white;
            padding: 8px;
        }  
        .search-btn:hover {
            background-color:  rgba(255, 255, 255, 1);
            color: black ;
        }
        .prof-cart {
            display: flex;
            gap: 10px;
            align-items: right;
            text-align: right;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .product-grid {
          display: grid;
          grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
          gap: 20px;
          width: 90%;
          margin: auto;
          padding: 20px;
        }
        .product-card {
          width: 100%;
          margin: auto;
          padding: 20px;
          border: 1px solid rgba(63, 62, 62, 0.1);
          background: #fff;
          border-radius: 12px;
          box-shadow: 0 0 10px rgba(255, 255, 255, 0.25);
          font-family: Arial, sans-serif;
        }
        .product-img-holder {
          width: 100%;
          height: 250px;
          overflow: hidden;
          margin-bottom: 15px;
        }
        .product-img-holder {
          height: 200px;
        }
        @media(max-width: 500px) {
          .product-img-holder {
            height: 160px;
          }
        }
        .product-img-holder img {
          width:100%;
          height: 100%;
          object-fit: cover;
        }
        .label-box {
          align-items: center;
          font-size: 18px;
          padding: 3px;
          margin: 3px;
          font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        .btn-group {
          padding: 10px;
          gap: 15px;
        }
        .add-cart, .buy-now {
          border: 1px solid  rgba(0, 0, 0, 1);
          border-radius: 5px;
          font-family: Arial, Helvetica, sans-serif;
          font-size: 0.9rem;
          background-color: rgba(255, 255, 255, 1);
          color:black;
          padding: 9px;
          margin: 5px;
          cursor: pointer;
        }
        .add-cart:hover,.buy-now:hover {
          background-color: rgba(0, 0, 0, 1);
          color: white ;
          font-weight: 500;
        }

      /* modal */
.modal-product {
  width: 50%;
  max-width: 600px;
  max-height: 500vh;
  background-color: white;
  border-radius: 14px;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  display: none;
  z-index: 100;
  overflow-y: auto;
  box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
}

.modal-product.open {
  display: block;
}


.modal-body {
  display: flex;
  gap: 30px;
  padding: 30px;
  color: #030303;
}

.modal-img-section {
  flex: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  min-width: 250px;
}

.modal-img-section img {
  width: 100%;
  max-width: 100%;
  height: auto;
  border-radius: 15px;
  object-fit: cover;
}

.modal-info-section {
  flex: 1;
  min-width: 40%;
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.modal-info-section h2 {
  font-size: 1.8rem;
  margin: 0;
  color: #030303;
}

.modal-price-stocks {
  display: flex;
  gap: 20px;
  font-size: 1.1rem;
}

.modal-price-stocks p {
  margin: 0;
}

.modal-form-group {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.modal-form-group label {
    font-size: 1rem;
    color: #030303;
}

.modal-action-buttons {
    display: flex;
    gap: 15px;
    margin-top: 20%;
}

.btn-buy, .btn-add-cart {
    flex: 1;
    padding: 10px;
    border: 1px solid  rgba(0, 0, 0, 1);
    border-radius: 8px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 0.9rem;
    cursor: pointer;
}

.btn-buy {
    background: transparent;
    color: black;
}

.btn-buy:hover {
    background: black;
    color: white;
}

.btn-add-cart {
    background: transparent;
    color: black;
    border: 1px solid black;
}

.btn-add-cart:hover {
    background: black;
    color: white;
}

.modal-close-btn {
    position: absolute;
    top: 15px;
    right: 15px;
    background: #f0f0f0;
    border: 1px solid black;
    width: 35px;
    height: 35px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 1.5rem;
    color: #030303;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 2;
}

.modal-close-btn:hover {
    background: #e0e0e0;
}  
hr {
color: white;
margin: 5px;
}
footer{
color: white;
text-align: center;
}
      </style>
    
</head>
<body>
 <header>
        <div class="nav-container">  
        <nav class="nav-bar">
            <a href="#" class="link">Logo</a>
        </nav>
        </div>
         <div class="prof-cart">
           <a href="prac.php" class="link">Home</a>
            <a href="aboutUs.php" class="link">About Us</a>
            <a href="contact.php" class="link">Contact</a>
             <a href="products.php" class="link">Products</a>

        </div> 
         <!--
       <div class="search-container">
            <form>
            <input type="search" class="search-bar" placeholder="Search" aria-label="Search">
            <button type="submit" class="search-btn">Search</button>
        </form>
      </div>  -->
        </header>   
        <hr>

        <section>

      <?php 
        include 'db.php';
        $sql = "SELECT * FROM products";
        $result = $conn->query(query: $sql);
      ?>

      <div class="product-grid">
        <?php if($result->num_rows > 0){
          while($product =$result->fetch_assoc()){
        ?>

        <div class="product-card" 
          data-id="<?php echo $product['product_id'];?>"
          data-name="<?php echo $product['product_name'];?>"
          data-price="<?php echo $product['price']; ?>"
          data-stocks="<?php echo $product['stocks'];?>"
          onclick="openProductModal(this)"
          style="cursor: pointer;">
          
          <div class="product-img-holder">
            <img src="showimage.php?id=<?php echo $product['product_id'];?>" alt="Product Image">
          </div>
          
          <div class="label-box">
            <strong>Product Name: </strong><?php echo $product['product_name'];?>
          </div>
          
          <div class="label-box">
               <strong>Price: </strong>₱<?php echo number_format($product['price'], 2);?>
          </div>
          
          <div class="label-box">
            <strong>Stocks Available: </strong><?php echo $product['stocks'];?>
          </div>

          <div class="button-group">
       
            <button class="buy-now" onclick="openProductModal(this.closest('.product-card'));">
              Buy Now
            </button>
            <button class="add-cart" onclick="addToCart(<?php echo $product['product_id'];?>); ">
              Add to Cart
            </button>
          </div>
        </div>

        <?php
          }
        }else{
          echo "<p>No products available.</p>";
        }
        $conn->close();
        ?>
      </div>
    </section>
  </main>

  
  <div class="modal-product" id="productModal">
    <div class="modal-content">
      <button class="modal-close-btn" onclick="closeProductModal()">
        ✕
      </button>

      <div class="modal-body">
        <div class="modal-img-section">
          <img id="modalProductImage" alt="Product Image" src="/placeholder.svg">
        </div>

        <div class="modal-info-section">
          <h2 id="modalProductName"></h2>
          
          <div class="modal-price-stocks">
            <p><strong>Price: </strong><span id="modalProductPrice"></span></p>
            <p><strong>Available Stock: </strong><span id="modalProductStocks"></span></p>
          </div>

      <form action='prac_modal.php' method='post'>
        <div class="modal-form-group">
            <label for="quantityInput"><strong>Quantity:</strong></label>
            <input type="number" name="product_id" id="modalProductId" readonly hidden>
              <input type="number" id="quantityInput" value="1" min="1" max="50" name="total_order">
              <label for="quantityInput"><strong>Total Price:</strong></label>
              <input type="number" id="productTotalPrice"  name="total_price" readonly>
          </div>

          <div class="modal-action-buttons">
            <input type="submit" class="btn-buy" value="Purchace" onclick="purchase()">
          </div>
        </div>
</form>
      </div>
    </div>
  </div>
  <br>
  <br>
<hr>
<footer>
        WELS @2025
</footer>
<hr>

  <script>
    
    // Store product data
    let currentProduct = {
      id: null,
      name: null,
      price: null,
      stocks: null
    };

   
    function openProductModal(cardElement) {
      currentProduct = {
        id: cardElement.dataset.id,
        name: cardElement.dataset.name,
        price: cardElement.dataset.price,
        stocks: cardElement.dataset.stocks
      };

      //  modal print lang product data
     document.getElementById('modalProductId').value = currentProduct.id;
      document.getElementById('modalProductImage').src = 'showimage.php?id=' + currentProduct.id;
      document.getElementById('modalProductName').textContent = currentProduct.name;
      document.getElementById('modalProductPrice').textContent = '₱' + currentProduct.price;
      document.getElementById('modalProductStocks').textContent = currentProduct.stocks;


      // Reset Basta
      document.getElementById('quantityInput').value = 1;
      document.getElementById('quantityInput').max = currentProduct.stocks;
      document.getElementById('productTotalPrice').value = currentProduct.price;
      //total
     

      document.getElementById('quantityInput').oninput = function(){
        let quantity = document.getElementById('quantityInput').value;
        let total = currentProduct.price * quantity;
        document.getElementById('productTotalPrice').value = total.toFixed(2);
      }

      
      document.getElementById('productModal').classList.add('open');
    }

     
    
    function closeProductModal() {
      document.getElementById('productModal').classList.remove('open');
    }

  </script>

</body>
</html>
