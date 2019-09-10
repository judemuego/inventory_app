<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
      <a href="http://www.creative-tim.com" class="simple-text logo-normal">
        Inventory App
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="/dashboard">
            <i class="material-icons">dashboard</i>
            <p>Home</p>
          </a>
        </li>
       
        <li class="nav-item ">
          <a class="nav-link" href="/inventory">
            <i class="material-icons">content_paste</i>
            <p>Inventory</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="/warehouselist">
            <i class="material-icons">list</i>
            <p>Warehouse</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="/warehousetransfer">
            <i class="material-icons">assignment</i>
            <p>Warehouse Transfer</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="/cargoreleases">
            <i class="material-icons">new_releases</i>
            <p>Cargo Releases</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="/dtd">
            <i class="material-icons">local_shipping</i>
            <p>DTD Delivery</p>
          </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="/dtdpickuporder">
              <i class="material-icons">directions_walk</i>
              <p>DTD Pickup Order</p>
            </a>
          </li>
        <li class="nav-item ">
            <a class="nav-link" href="/warehousereceipts">
              <i class="material-icons">receipt</i>
              <p>Warehouse Receipts</p>
            </a>
          </li>
      </ul>
    </div>
  </div>
  <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
  <div id="myaccordion">


    <!-- accordion 1 -->
    <h2>My Accordion 1</h2>
    <div>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
  
  
    <!-- accordion 2 -->
    <h2>My Accordion 2</h2>
    <div>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
  
  
    <!-- accordion 3 -->
    <h2>My Accordion 3</h2>
    <div>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
  
  
    <!-- accordion 4 -->
    <h2>My Accordion 4</h2>
    <div>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
  
  </div>
  
  
  <script type="text/javascript">
    $(document).ready(function() {
        $( "#myaccordion" ).accordion();
        $("#myaccordion").accordion("destroy");
        $("#myaccordion").accordion({
            collapsible: true,
            active: false
        });
    });
  </script>