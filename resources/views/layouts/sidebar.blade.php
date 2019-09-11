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
            <p>Warehouse List</p>
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
        <li class="nav-item" id="myaccordion">
            <h2>Company Admin</h2>
            <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="/employee">
                    <i class="material-icons">people_outline</i>
                    <p>Employees</p>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="/employeetype">
                    <i class="material-icons">emoji_people</i>
                    <p>Employee Types</p>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="/users">
                    <i class="material-icons">people</i>
                    <p>Users</p>
                  </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/agents">
                      <i class="material-icons">record_voice_over</i>
                      <p>Agents</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/dh">
                      <i class="material-icons">airline_seat_recline_normal</i>
                      <p>Drivers/Helpers</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/vehicles">
                      <i class="material-icons">directions_car</i>
                      <p>Vehicles</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/customers">
                      <i class="material-icons">perm_identity</i>
                      <p>Customers</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/vendors">
                      <i class="material-icons">store</i>
                      <p>Vendors</p>
                    </a>
                </li>
              </ul>
        </li>
      </ul>
    </div>
    
  </div>
  <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
  
  
  
  <script type="text/javascript">
    $(document).ready(function() {
        $("#myaccordion" ).accordion();
        $("#myaccordion").accordion("destroy");
        $("#myaccordion").accordion({
            collapsible: true,
            active: false
        });
    });
  </script>
