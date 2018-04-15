<?php
if($_POST){
    $name = $_POST['name'];
    $summary = $_POST['commentContent'];
    $date = $_POST['date'];
    $location = $_POST['location'];
    $pricePaid = $_POST['price'];
    $rating = $_POST['rating'];
    $photo = $_POST['photo'];
    $handle = fopen("carabaoReview.html","a");
    fwrite($handle, "<b>" . $name . ' (' . $date . ') ' . "(" . $rating . " stars) " . "</b>:<br/>" . "<b>Retailer(s): </b>" . $location . "<br>" . "<b>Price paid: </b>" . $pricePaid . "<br>" . $summary . "<br>" . "<img src=" . $photo . "><br>");
    fclose($handle);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<header>
    <div class="container">
        <div id="branding">
            <h1><span class="highlight">Carabao Original</span> Review</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="signup.html">Sign Up</a></li>
            </ul>
        </nav>
    </div>
</header>
<section id="single">
    <div class="box">
        <img src="img/carabaoOriginal.png" border="1">
        <p><b><u>Carabao Energy Original</u></b><br>
            <b>Price Range:</b> €1.00 - €2.50<br>
            <b>Summary:</b> Carabao Energy Drink is a Thai energy drink launched in 2002 by Carabao Tawandang Co Ltd
        </p>
    </div>
    <div class="details">
        <h2>Description</h2>
        <p>Carabao Original is a refreshing and great tasting low sugar energy drink, designed to give you the energy you need to achieve your everyday goals.</p>
        <br>
        <h2>Ingredients</h2>
        <p>Carbonated Water, Sucrose, Citric Acid, Taurine (0.3%), Flavourings, Aspartame, Stevia (Sweeteners), Caffeine (0.032%), Inositol, Niacin, Pantothenic Acid, Vitamin B6, Vitamin B12, Riboflavin, Caramel (Colour), Sodium Benzoate (Preservative)</p>
    </div>
</section>
<form action="" method="POST">
    Comment: <textarea rows="10" cols="30" name="commentContent"></textarea><br>
    Name: <input type="text" name="name" placeholder="Name"><br>
    Date: <input type="date" name="date" placeholder="31/12/2000"><br>
    Retailer(s): <input type="text" name="location" placeholder="Super Valu"><br>
    Price paid: <input type="number" min="0.00" max="100.00" step="0.01" name="price" placeholder="1.50"><br>
    Rating: <input type="number" min="1" max="5" name="rating" placeholder="4"><br>
    Photo: <input type="file" name="photo" accept="image/*"><br>
    <input type = "submit" value="Post!"><br/>
</form>
<?php include "carabaoReview.html"; ?>
</body>
</html>