<?php
if($_POST){
    $name = $_POST['name'];
    $summary = $_POST['commentContent'];
    $date = $_POST['date'];
    $location = $_POST['location'];
    $pricePaid = $_POST['price'];
    $rating = $_POST['rating'];
    $photo = $_POST['photo'];
    $handle = fopen("monsterReview.html","a");
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
            <h1><span class="highlight">Monster Original</span> Review</h1>
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
    <img src="img/monsterOriginal.png" border="1">
        <p><b><u>Monster Energy Original</u></b><br>
            <b>Price Range:</b> €1.50 - €3<br>
        <b>Summary:</b> Monster Energy is an energy drink introduced by Hansen Natural Company in April 2002.
        </p>
    </div>
    <div class="details">
        <h2>Description</h2>
        <p> Tear into a can of the meanest energy supplement on the planet, MONSTER energy. We went down to the lab and cooked up a double shot of our killer energy brew. It´s a wicked mega hit that delivers twice the buzz of a regular energy drink. MONSTER packs a vicious punch but has a smooth flavor you can really pound down.</p>
        <br>
        <h2>Ingredients</h2>
        <p>Carbonated water, sucrose, glucose, citric acid, natural flavors, taurine, sodium citrate,color added, panax ginseng root extract, L-carnitine, caffeine, sorbic acid, benzoic acid, niacinamide, sodium chloride, Glycine max glucuronolactone, inositol, guarana seed extract, pyridoxine hydrochloride, sucralose, riboflavin, maltodextrin, and cyanocobalamin</p>
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
<?php include "monsterReview.html"; ?>
</body>
</html>
