<?php

session_start();
if(isset($_SESSION['login'])){

require("products.php");

require("layout.php");



// Korb initialisieren

if(!isset($_SESSION['shopping_cart'])) {

	$_SESSION['shopping_cart'] = array();

}

// Korb lerren

if(isset($_GET['empty_cart'])) {

	$_SESSION['shopping_cart'] = array();

}





// **PROCESS FORM DATA**



$message = '';



// Produkt dem Korb hinzufügen

if(isset($_POST['add_to_cart'])) {

	$product_id = $_POST['product_id'];

	

	// Prüfung auf Korrektheit

	if(!isset($products[$product_id])) {

		$message = "Invalid item!<br />";

	}

	// Sollte das Produkt bereits im Korb sein wird dies dem User mitgeteilt

	else if(isset($_SESSION['shopping_cart'][$product_id])) {

		$message = "<p style='color:#FAC446'>Befindet sich bereits im Warenkorb!</p>";

	}

	// Oder, füge es dem Korb hinzu

	else {

		$_SESSION['shopping_cart'][$product_id]['product_id'] = $_POST['product_id'];

		$_SESSION['shopping_cart'][$product_id]['quantity'] = $_POST['quantity'];

		$message = "<p style='color:#FAC446'>Dem Warenkorb hinzugefügt!</p>";

	}

}

// Update Korb

if(isset($_POST['update_cart'])) {

	$quantities = $_POST['quantity'];

	foreach($quantities as $id => $quantity) {

		if(!isset($products[$id])) {

			$message = "Invalid product!";

			break;

		}

		$_SESSION['shopping_cart'][$id]['quantity'] = $quantity;

	}

	if(!$message) {

		$message = "<p style='color:#FAC446'>Warenkorb aktualisiert!</p>";

	}

}





// **DISPLAY PAGE**

echo $header;



echo $message;



// Anzeigen eines Produktes

if(isset($_GET['view_product'])) {

	$product_id = $_GET['view_product'];

	

	if(isset($products[$product_id])) {

		// Anzeigen der Links

		echo "<p>

			<a href='./index.php'>DropShop</a> &gt; <a href='./index.php'>" . 

			$products[$product_id]['category'] . "</a></p>";

		

		

		// Anzeigen aller Produkte

		echo "<p>

			<span style='font-weight:bold; color:#FAC446;'>" . $products[$product_id]['name'] . "</span><br />

			<span style='color:#FFF300;'>Fr." . $products[$product_id]['price'] . "</span><br />

			<span style='color:#E6D17E;'>" . $products[$product_id]['description'] . "</span><br />


			<p>

				<form action='./index.php?view_product=$product_id' method='post'>

					<select name='quantity'>

						<option value='1'>1</option>

						<option value='2'>2</option>

						<option value='3'>3</option>

						<option value='4'>4</option>

						<option value='5'>5</option>

					</select>

					<input type='hidden' name='product_id' value='$product_id' />

					<input type='submit' name='add_to_cart' value='Dem Warenkorb hinzufügen' />

				</form>

			</p>

		</p>";

	}

	else {

		echo "Invalid product!";

	}

}

// Korb ansehen

else if(isset($_GET['view_cart'])) {

	// Anzeigen der Links

	echo "<p>

		<a href='./index.php'>DropShop</a></p>";
	echo "	<a href='./ausloggen.php'>Ausloggen</a>";

	

	echo "<h3><p style='color:#FAC446'>Ihr Warenkorb</p></h3>

	<p>

		<a href='./index.php?empty_cart=1'>Warenkorb leeren</a>

	</p>";

	

	if(empty($_SESSION['shopping_cart'])) {

		echo "<p style='color:#FAC446'>Ihr Warenkorb ist leer.</p>";

	}

	else {

		echo "<form action='./index.php?view_cart=1' method='post'>

		<table style='width:500px;' cellspacing='0'>

				<tr>

					<th style='border-bottom:1px solid #000000;'>Name</th>

					<th style='border-bottom:1px solid #000000;'>Price</th>

					<th style='border-bottom:1px solid #000000;'>Category</th>

					<th style='border-bottom:1px solid #000000;'>Quantity</th>

				</tr>";

				foreach($_SESSION['shopping_cart'] as $id => $product) {

					$product_id = $product['product_id'];

					

					echo "<tr>

						<td style='border-bottom:1px solid #000000;'><a href='./index.php?view_product=$id'>" . 

							$products[$product_id]['name'] . "</a></td>

						<td style='border-bottom:1px solid #000000;'>Fr." . $products[$product_id]['price'] . "</td> 

						<td style='border-bottom:1px solid #000000;'>" . $products[$product_id]['category'] . "</td>

						<td style='border-bottom:1px solid #000000;'>

							<input type='text' name='quantity[$product_id]' value='" . $product['quantity'] . "' /></td>

					</tr>";

				}

			echo "</table>

			<input type='submit' name='update_cart' value='Update' />

			</form>

			<p>

				<a href='./index.php?checkout=1'>Checkout</a>

			</p>";

		

	}

}

// Preis zusammenzählen

else if(isset($_GET['checkout'])) {

	// Anzeigen der Links

	echo "<p>

		<a href='./index.php'>DropShop</a></p>";

	

	echo "<h3>Checkout</h3>";

	

	if(empty($_SESSION['shopping_cart'])) {

		echo "<p style='color:#FAC446'>Ihr Warenkorb ist leer.</p>";

	}

	else {

		echo "<form action='./index.php?checkout=1' method='post'>

		<table style='width:500px;' cellspacing='0'>

				<tr>

					<th style='border-bottom:1px solid #000000;'>Name</th>

					<th style='border-bottom:1px solid #000000;'>Item Price</th>

					<th style='border-bottom:1px solid #000000;'>Quantity</th>

					<th style='border-bottom:1px solid #000000;'>Cost</th>

				</tr>";

				

				$total_price = 0;

				foreach($_SESSION['shopping_cart'] as $id => $product) {

					$product_id = $product['product_id'];

					

					

					$total_price += $products[$product_id]['price'] * $product['quantity'];

					echo "<tr>

						<td style='border-bottom:1px solid #000000;'><a href='./index.php?view_product=$id'>" . 

							$products[$product_id]['name'] . "</a></td>

						<td style='border-bottom:1px solid #000000;'>Fr." . $products[$product_id]['price'] . "</td> 

						<td style='border-bottom:1px solid #000000;'>" . $product['quantity'] . "</td>

						<td style='border-bottom:1px solid #000000;'>Fr." . ($products[$product_id]['price'] * $product['quantity']) . "</td>

					</tr>";

				}

			echo "</table>

			<p style='color:#FAC446'>Total price: Fr." . $total_price . "</p>";

		

	}

}

// Anzeigen der Produkte

else {

	echo "<div id='logo'><img src='images/logo.png'></div>";



	echo "<table style='width:500px;' cellspacing='0'>";

	echo "<tr>

		<th style='border-bottom:1px solid #000000;'>Name</th>

		<th style='border-bottom:1px solid #000000;'>Price</th>

		<th style='border-bottom:1px solid #000000;'>Category</th>

	</tr>";





	// Loop um Produkte anzuzeigen

	foreach($products as $id => $product) {

		echo "<tr>

			<td style='border-bottom:1px solid #000000;'><a href='./index.php?view_product=$id'>" . $product['name'] . "</a></td>

			<td style='border-bottom:1px solid #000000;'>Fr." . $product['price'] . "</td> 

			<td style='border-bottom:1px solid #000000;'>" . $product['category'] . "</td>

		</tr>";

	}

	echo "</table>";

}



echo $footer;
}else{
echo "Keine Schummelei ;)";
}

?>
