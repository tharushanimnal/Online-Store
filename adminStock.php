<?php

    session_start();
    include "connection.php";

    if (isset($_SESSION["a"])) {
        
        ?>
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap.css" />
        <link rel="stylesheet" href="style.css" />
        <title>Stock - Admin Panel</title>
    
    </head>
<body class="adminBody">
    
    <?php
        include "adminNavBar.php";
    ?>

    <div class="container-fluid">

        <div class="row">

            <div class="col-5 offset-1">

                <h2 class="text-center">Product Registration</h2>

                <div class="mb-3">
                    <label class="form- for=">Product Name</label>
                    <input id="pname" type="text" class="form-control">
                </div>

                <div class="row">

                <div class="mb-3 col-6">
                    <label class="form-label" for="">Brand</label>
                    <select id="brand" class="form-select" >
                    <option value="0">Select</option>

                        <?php
                        
                            $rs = Database::search("SELECT * FROM `brand`");
                            $num = $rs->num_rows;

                            for ($x= 0; $x < $num; $x++) { 
                                
                                $data = $rs->fetch_assoc();
                                ?>
                                    <option value="<?php echo($data["brand_id"]); ?>"><?php echo($data["brand_name"]); ?></option>
                                <?php
                            }
                        
                        ?>

                        
>                        
                    </select>
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label">Category</label>
                    <select id="category" class="form-select">
                    <option value="0">Select</option>
                        

                        <?php
                        
                        $rs = Database::search("SELECT * FROM `category`");
                        $num = $rs->num_rows;

                        for ($x= 0; $x < $num; $x++) { 
                            
                            $data = $rs->fetch_assoc();
                            ?>
                                <option value="<?php echo($data["cat_id"]); ?>"><?php echo($data["cat_name"]); ?></option>
                            <?php
                        }
                    
                        ?>
                        
                    </select>
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label">Color</label>
                    <select id="color" class="form-select">
                        <option value="0">select</option>
                        
                        <?php
                        
                        $rs = Database::search("SELECT * FROM `color`");
                        $num = $rs->num_rows;

                        for ($x= 0; $x < $num; $x++) { 
                            
                            $data = $rs->fetch_assoc();
                            ?>
                                <option value="<?php echo($data["color_id"]); ?>"><?php echo($data["color_name"]); ?></option>
                            <?php
                        }
                    
                        ?>
                    </select>
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label">Size</label>
                    <select id="size" class="form-select">
                        <option value="0">select</option>
                        
                        <?php
                        
                        $rs = Database::search("SELECT * FROM `size`");
                        $num = $rs->num_rows;

                        for ($x= 0; $x < $num; $x++) { 
                            
                            $data = $rs->fetch_assoc();
                            ?>
                                <option value="<?php echo($data["size_id"]); ?>"><?php echo($data["size_name"]); ?></option>
                            <?php
                        }
                    
                        ?>
                    </select>
                </div>

                </div>

                <div class="mb-3">
                    <label class="form-label" for="">Description</label>
                    <textarea id="description" class="form-control" rows="5"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="">Product Image</label>
                    <input id="file" class="form-control" type="file">
                </div>

                <div class="d-grid">
                    <button class="btn btn-info" onclick="regProduct();">Register Product</button>
                </div>

            </div>

            <div class="col-5">

                <h2 class="text-center">Stock Update</h2>

                <div class="mb-3">
                    <label class="form-label" for="">Product Name</label>
                    <select class="form-select" id="selectProduct">
                        <option>Select</option>
                        
                        <?php
                        $rs = Database::search("SELECT * FROM `product`");
                        $num = $rs->num_rows;

                        for ($i=0; $i < $num; $i++) { 
                            $d = $rs->fetch_assoc();
                            ?>
                            <option value="<?php echo $d["id"] ?>"><?php echo $d["name"] ?></option>
                            <?php
                        }
                        
                        ?>

                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="">Qty</label>
                    <input type="text" class="form-control" id="qty" required>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="">Unit Price</label>
                    <input type="text" class="form-control" id="uprice" required>
                </div>

                <div class="d-grid">
                    <button class="btn btn-info" onclick="updateStock();">Update Stock</button>
                </div>

            </div>

        </div>

    </div>

        <!-- Footer -->
        <div class="fixed-bottom col-12">
            <p class="text-center text-black">&copy; 2024 HEXASHOP.lk || All Right Reserved</p>
        </div>
        <!-- Footer -->

    <script src="script.js"></script>
</body>
</html>

        <?php

    } else {
        echo("You're not an admin");
    }

?>

