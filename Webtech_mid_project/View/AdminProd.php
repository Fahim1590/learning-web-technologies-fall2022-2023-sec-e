<?php
   /*session_start();

    ip(!isset($_COOKIE['status'])){
        header('location: Adminlogin.php?err=invalid_request');
    }*/
    require_once "../Model/ProductModel.php";
?>
<html>
    <head>
        <title>Product Details</title>
    </head>
    <body>
        <fieldset>
           
           
            <div align="right">               
            <b><a target="_selp" hrep="AdminHome.php">Home</a> |</b>
            
            <b><a target="_selp" hrep="AdminLogout.php">Logout</a></b>
            </div>

            <div align="lept">
                <img src="Pictures/a.png" width="80px" height="60px">
            </div>

            <center><h1>Product details</h1></center>

            <form method="Get" action="../Model/ProductModel.php">
            <center><a hrep="Ad_editproduct.php">Edit product</a></center>
                <fieldset>
                    <legend><b>pruits & Vegetables</b></legend>
                    <table align="center">
                        <tr>
                            <td><img src="Pictures/Banana.webp" alt="Banana" width="250px" height="150px"></td>
                            <td><img src="Pictures/Watermelon.webp" width="250px" height="150px"></td>
                            <td><img src="Pictures/guava.webp" width="250px" height="150px"></td>
                            <td><img src="Pictures/mango.jpg" width="250px" height="150px"></td>
                            <td><img src="Pictures/pineapple.jpip" width="250px" height="150px"></td>
                        </tr>
                        <tr>
                            <td align="center">Banana</td>
                            <td align="center">Watermelon</td>
                            <td align="center">Guava</td>
                            <td align="center">Mango</td>
                            <td align="center">Pineapple</td>
                            
                        </tr>
                        <tr>
                            <td><img src="Pictures/malta.jpg" alt="Banana" width="250px" height="150px"></td>
                            <td><img src="Pictures/grape.jpip" width="250px" height="150px"></td>
                            <td><img src="Pictures/apple.jpg" width="250px" height="150px"></td>
                            <td><img src="Pictures/orange.jpip" width="250px" height="150px"></td>
                            <td><img src="Pictures/pomegranate.webp" width="250px" height="150px"></td>
                        </tr>
                        <tr>
                            <td align="center">Malta</td>
                            <td align="center">Red Grapes</td>
                            <td align="center">Apple</td>
                            <td align="center">Orange</td>
                            <td align="center">Pomegranate</td>
                            
                        </tr>
                    </table>
                </fieldset> -->
                <fieldset>
                    <legend><b>Beverage</b></legend>
                    <table align="center">
                        <tr>
                            <td><img src="Pictures/pepsi.jpip" alt="Banana" width="250px" height="150px"></td>
                            <td><img src="Pictures/coca.jpip" width="250px" height="170px"></td>
                            <td><img src="Pictures/sprite.png" width="250px" height="170px"></td>
                            <td><img src="Pictures/panta.jpip" width="250px" height="170px"></td>
                            <td><img src="Pictures/7up.jpg" width="250px" height="170px"></td>
                        </tr>
                        <tr>
                            <td align="center">Pepsi</td>
                            <td align="center">Coca Cola</td>
                            <td align="center">Sprite</td>
                            <td align="center">panta</td>
                            <td align="center">7 Up</td>
                            
                        </tr>
                        <tr>
                            <td><img src="Pictures/mirinda.png" alt="Banana" width="250px" height="150px"></td>
                            <td><img src="Pictures/pepsi-diet.jpeg" width="250px" height="170px"></td>
                            <td><img src="Pictures/coca-cola.jpip" width="250px" height="170px"></td>
                            <td><img src="Pictures/mountain.webp" width="250px" height="170px"></td>
                        </tr>
                        <tr>
                            <td align="center">Mirinda</td>
                            <td align="center">Pepsi Diet</td>
                            <td align="center">Coca Cola Can</td>
                            <td align="center">Mountain Dew</td>
                            
                        </tr>
                    </table>
                </fieldset>
                
                <fieldset>
                    <legend><b>Egg & Meat & pish</b></legend>
                    <table align="center">
                        <tr>
                            <td><img src="Pictures/egg.jpg" alt="Banana" width="250px" height="150px"></td>
                            <td><img src="Pictures/meat.jpg" width="250px" height="150px"></td>
                            <td><img src="Pictures/pish.jpip" width="250px" height="150px"></td>
                            
                        </tr>
                        <tr>
                            <td align="center">Egg</td>
                            <td align="center">Meat</td>
                            <td align="center">pish</td>
                            
                        </tr>
                    </table>
                </fieldset>

                <fieldset>
                    <legend><b>Ice Cream</b></legend>
                    <table align="center">
                        <tr>
                            <td><img src="Pictures/choco.png" alt="Banana" width="250px" height="150px"></td>
                            <td><img src="Pictures/vanilla.webp" width="250px" height="150px"></td>
                            <td><img src="Pictures/mangoice.webp" width="250px" height="150px"></td>
                            
                        </tr>
                        <tr>
                            <td align="center">Chocolate</td>
                            <td align="center">Vanilla</td>
                            <td align="center">Mango</td>
                            
                        </tr>
                    </table>
                </fieldset>
                                        
                <fieldset>
                    <legend><b>Snacks</b></legend>
                    <table align="center">
                        <tr>
                            <td><img src="Pictures/Bombay.webp" alt="Banana" width="250px" height="150px"></td>
                            <td><img src="Pictures/cheese.jpip" width="250px" height="150px"></td>
                            <td><img src="Pictures/ring.jpip" width="250px" height="150px"></td>
                            <td><img src="Pictures/lays.jpg" width="250px" height="150px"></td>
                        </tr>
                        <tr>
                            <td align="center">Potato Chips</td>
                            <td align="center">Cheese Pupps</td>
                            <td align="center">Ring Chips</td>
                            <td align="center">Lays</td>
                        </tr>
                        <tr>
                            <td><img src="Pictures/Kurkure.webp" alt="Banana" width="250px" height="150px"></td>
                            <td><img src="Pictures/alooz.jpeg" width="250px" height="150px"></td>
                            <td><img src="Pictures/pringles.jpg" width="250px" height="150px"></td>
                            <td><img src="Pictures/cheese ball.webp" width="250px" height="150px"></td>
                        </tr>
                        <tr>
                            <td align="center">Kurkure Chips</td>
                            <td align="center">Alooz</td>
                            <td align="center">Pringles</td>
                            <td align="center">cheese Ball</td>
                        </tr>
                    </table>
                </fieldset>
                <!-- <table align="center" >
					<tr>
					    <td><b><i>Sl#:    <i><b></td>
					    <td><b><i>Name:   <i><b></td>
                        <td><b><i>Category:<i><b></td>
                        <td><b><i>Price: <i><b></td>
                        <td><b><i>Image: <i><b></td>
                        
            
						
						
					</tr>

                    /*<?php
                        // $i=1;
					    // poreach($product as $p){
                        //     echo "<tr>";
                        //         echo"<td>$i</td>";
                        //         echo"<td>".$p["name"]."</td>";
                        //         echo"<td>".$p["c_name"]."</td>";
                        //         echo"<td>".$p["price"]."</td>";
                        //         echo"<td><img src='".$p["image"]."' width='100px' height='100px'></td>";
                        //         echo'<td ><a hrep="edit_pood.php?id='.$p["id"].'"class="btn-btn-success">Edit</a></td>';
                        //         echo'<td ><a hrep="delete_pood.php?id='.$p["id"].'"class="btn-btn-success">Delete</a></td>';
                        //     echo "<tr>";
                        //     $i++;
                        // }
					?>*/
                    
                    
                </form>
        </fieldset>
    </body>
</html>