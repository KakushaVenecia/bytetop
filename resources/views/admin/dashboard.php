<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <title>Bytetop</title>
</head>
<body>
  <header class="navbar">
    <a href="#0" onclick="toggleSidebar()">
      <div>
        <img class="logo-logo" src="images/Logo.png" alt="Logo">
      </div>
      <i class="fa fa-bars"></i>
    </a>
    <div class="header-user">
      <i class="fas fa-user-circle icon"></i>Hello Peter Pan
    </div>
  </header>

  <div class="layout">
  <div class="sidebar">
        <ul>
        <li> <a class="sidebar-list-item active" href="#0"> <i class="fas fa-home icon"></i><em>Dashboard</em></a></li>
        <li> <a class="sidebar-list-item" href="#0"> <i class="fas fa-user icon"></i><em>Products </em></a></li>
        <li> <a class="sidebar-list-item" href="#0"> <i class="fas fa-tasks icon"></i><em>Orders and Deliveries</em></a></li>
        <li> <a class="sidebar-list-item " href="#0"> <i class="fas fa-calendar icon"></i><em>Notifications</em></a>
        </li>
        <li> <a class="sidebar-list-item" href="#0"> <i class="fas fa-toolbox icon"></i><em></em></a>
        </li>
        <li> <a class="sidebar-list-item" href="#0"> <i class="fas fa-comments icon"></i><em></em></a></li>
        <li> <a class="sidebar-list-item" href="#0"> <i class="fas fa-lightbulb icon"></i><em></em></a>
        </li>
        </ul>
        </div>

    <main class="content">
      <div class="main-header">
        <div class="main-header">
            <div class="main-title">
            <h1>Add Product</h1>
            <div class="main-form">
            <form name="event">
                <input type="text" id="ftitle" placeholder="Product Name">
                <input type="text" id="fdescription" placeholder="Add description">
                <input type="text" id="flocation" placeholder="Add Category">

                </div> 
                <input type="submit" id="fsubmit" value="Save" class="button">
            </form> 
            </div>
            </div>
       
         </div>
      </div>
     </main>  
      </div>
    </main>
  </div>
    <footer class="footer">
    <h2>Here is the footer</h2>
    </footer>
  </div>
</body>
</html>