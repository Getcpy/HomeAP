<?php 
session_start();
include('server.php');

?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Cart</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="cart.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.0.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site1"
}</script>
    <meta name="theme-color" content="#black">
    <meta property="og:title" content="Cart">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-align-center-sm u-align-center-xs u-clearfix u-header u-header" id="sec-8f02"><div class="u-clearfix u-sheet u-sheet-1">
        <nav class="u-align-left u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem;">
            <a class="u-button-style u-nav-link" href="#">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8a8f"></use></svg>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-8a8f" x="0px" y="0px" viewBox="0 0 302 302" style="enable-background:new 0 0 302 302;" xml:space="preserve" class="u-svg-content"><g><rect y="36" width="302" height="30"></rect><rect y="236" width="302" height="30"></rect><rect y="136" width="302" height="30"></rect>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
        <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="index.php" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" style="padding: 10px 20px;">Categories</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="Kitchen.php">Kitchen</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="washer.php">Washer</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="largeappliance.php" >Large Appliance</a>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="index.php#carousel_5cb2" data-page-id="119500483" style="padding: 10px 20px;">Deals</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="index.php#carousel_1ae9" data-page-id="119500483" style="padding: 10px 20px;">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="cart.php" data-page-id="119500483" style="padding: 10px 20px;">Cart</a>
</li></ul>
      </div>
      <div class="u-custom-menu u-nav-container-collapse">
        <div class="u-align-center u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
          <div class="u-inner-container-layout u-sidenav-overflow">
            <div class="u-menu-close"></div>
            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 20px;">Categories</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="kitchen.php">Kitchen</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="washser.php" >Washer</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="largeappliance.php" >Large Appliance</a>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php#carousel_5cb2" data-page-id="119500483" style="padding: 10px 20px;">Deals</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php#carousel_1ae9" data-page-id="119500483" style="padding: 10px 20px;">Contact</a>
  
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <form action="#" method="get" class="u-border-1 u-border-grey-30 u-search u-search-left u-white u-search-1">
          <button class="u-search-button" type="submit">
            <span class="u-search-icon u-spacing-10">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 56.966 56.966"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-0c53"></use></svg>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-0c53" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" class="u-svg-content"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path></svg>
            </span>
          </button>
          <input class="u-search-input" type="search" name="search" value="" placeholder="Search">
        </form>
        <img class="u-image u-image-default u-image-1" src="images/Home.AP1.png" alt="" data-image-width="334" data-image-height="99">
      </div></header>
    <section class="u-align-center u-clearfix u-section-1" id="sec-66c4">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
          <table class="u-table-entity u-table-entity-1">
            <colgroup>
              <col width="25%">
              <col width="25%">
              <col width="25%">
              <col width="25%">
              <col width="25%">
            </colgroup>
            <thead class="u-custom-color-2 u-custom-font u-font-courier-new u-table-header u-table-header-1">
              <tr style="height: 58px;">
                <th class="u-table-cell">Product</th>
                <th class="u-table-cell">Price</th>
                <th class="u-table-cell">Quantity</th>
                <th class="u-table-cell">Subtotal</th>
                <th class="u-table-cell">Delete</th>
              </tr>
            </thead>
            <?php  
            
            $q = "SELECT * FROM cart";
            $result = mysqli_query($con,$q);
            while($row=$result->fetch_array()){
            ?>
            <tbody class="u-table-body">
              <tr style="height: 55px;">
                <td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell"><?php echo $row['productname'] ?></td>
                <td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell"><?php echo $row['productprice'] ?> THB</td>
                <td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell"><?php echo $row['quantity'] ?></td>
                <td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell"><?php echo $row['totalprice'] ?> THB</td>
                
                <td><a href="delete.php?productid=<?php echo $row['productid']; ?>" >DELETE</a></td>
              </tr>
              
            </tbody>
            <?php
            }
             ?>
          </table>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-2" id="sec-20dc">
      <div class="u-clearfix u-sheet u-sheet-1">
      <?php  
            
            $q1 = "SELECT sum(totalprice) as sum1 FROM cart";
            $result1 = mysqli_query($con,$q1);
            while($row=$result1->fetch_array()){
            ?>
        <h5 class="u-custom-font u-font-montserrat u-text u-text-default u-text-1">Cart total</h5>
        <div class="u-table u-table-responsive u-table-1">
          <table class="u-table-entity u-table-entity-1">
            <colgroup>
              <col width="50%">
              <col width="50%">
            </colgroup>
            <tbody class="u-table-body">
              <tr style="height: 63px; text-align: center;">
                <td class="u-border-1 u-border-grey-30 u-table-cell">Subtotal</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $row['sum1']?> THB</td>
              </tr>
              <tr style="height: 63px; text-align: center;">
                <td class="u-border-1 u-border-grey-30 u-table-cell">Delivery Fee</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">0.00 THB</td>
              </tr>
              <tr style="height: 63px; text-align: center;">
                <td class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-3">Total</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-4"><?php echo $row['sum1']?> THB</td>
              </tr>
            </tbody>
          </table>
          <?php
            }
             ?>
        </div>
        <a href="https://nicepage.com/c/pricing-html-templates" class="u-border-none u-btn u-button-style u-custom-color-1 u-custom-font u-font-montserrat u-btn-1">Proceed to checkout</a>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-6423"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>
  </body>
</html>