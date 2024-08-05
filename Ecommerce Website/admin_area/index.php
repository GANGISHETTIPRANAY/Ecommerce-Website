<?php
session_start();
include('../includes/connect.php');
include('../functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    <link rel="stylesheet" href="../style.css">
    <style>
    .product_img {
        width: 100px;
        object-fit: contain;
    }
    </style>
</head>
<body>
    
<!-- navbar -->
<div class="container-fluid p-0">
    <!-- first-child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <img src="../LOGO1.png" alt="Logo" class="logo">
            <nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Welcome!</a>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
    <!-- second child -->
    <div class="bg-semilight">
        <h3 class="text-center p-2">MANAGE DETAILS</h3>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <ul class="navbar-nav me-auto">
            <?php
            if (!isset($_SESSION['admin_name'])) {
                echo "<li class='nav-item'>
                        <a class='nav-link' href='#'>Welcome Guest</a>
                      </li>
                      <li class='nav-item'>
                        <a class='nav-link' href='admin_login.php'>Login</a>
                      </li>";
            } else {
                echo "<li class='nav-item'>
                        <a class='nav-link' href='#'>Welcome " . $_SESSION['admin_name'] . "</a>
                      </li>
                      <li class='nav-item'>
                        <a class='nav-link' href='admin_logout.php'>Logout</a>
                      </li>";
            }
            ?>
        </ul>
    </nav>
    <!-- third child -->
    <div class="row">
        <div class="col-md-12 bg-secondary p-1">
            <div>
                <p class="text-light text-center">ADMIN LOGIN</p>
            </div>
            <!-- buttons -->
            <div class="button text-center">
                <button><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert Products</a></button>
                <button><a href="index.php?view_products" class="nav-link text-light bg-info my-1">View Products</a></button>
                <button><a href="index.php?insert_categories" class="nav-link text-light bg-info my-1">Insert Category</a></button>
                <button><a href="index.php?view_categories" class="nav-link text-light bg-info my-1">View Categories</a></button>
                <button><a href="index.php?insert_brands" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
                <button><a href="index.php?view_brands" class="nav-link text-light bg-info my-1">View Brands</a></button>
                <button><a href="index.php?list_orders" class="nav-link text-light bg-info my-1">All Orders</a></button>
                <button><a href="index.php?list_payments" class="nav-link text-light bg-info my-1">All Payments</a></button>
                <button><a href="index.php?list_users" class="nav-link text-light bg-info my-1">List Users</a></button>
                <button><a href="admin_logout.php" class="nav-link text-light bg-info my-1">Logout</a></button>
            </div>
        </div>
    </div>

    <!-- fourth-child -->
    <div class="container my-3">
        <?php
        if (isset($_GET['insert_categories'])) { 
            include('insert_categories.php'); 
        }
        if (isset($_GET['insert_brands'])) { 
            include('insert_brands.php'); 
        }
        if (isset($_GET['view_products'])) { 
            include('view_products.php'); 
        }
        if (isset($_GET['edit_products'])) { 
            include('edit_products.php'); 
        }
        if (isset($_GET['delete_product'])) { 
            include('delete_product.php'); 
        }
        if (isset($_GET['view_categories'])) { 
            include('view_categories.php'); 
        }
        if (isset($_GET['view_brands'])) { 
            include('view_brands.php'); 
        }
        if (isset($_GET['edit_category'])) { 
            include('edit_category.php'); 
        }
        if (isset($_GET['edit_brands'])) { 
            include('edit_brands.php'); 
        }
        if (isset($_GET['delete_category'])) { 
            include('delete_category.php'); 
        }
        if (isset($_GET['delete_brands'])) { 
            include('delete_brands.php'); 
        }
        if (isset($_GET['list_orders'])) { 
            include('list_orders.php'); 
        }
        if (isset($_GET['list_payments'])) { 
            include('list_payments.php'); 
        }
        if (isset($_GET['list_users'])) { 
            include('list_users.php'); 
        }
        ?>
    </div>
    <!-- Footer -->
    <?php include("../includes/footer.php") ?>
</div>

<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1WYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5Kkcrossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>