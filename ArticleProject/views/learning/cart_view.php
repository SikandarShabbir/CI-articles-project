<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shopping Cart</title>
</head>
<body>

	<table cellpadding="6" cellspacing="1" width="100%" border="1">

		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Price</th>
			<th>&nbsp</th>
		</tr>
		
		<?php
		$key=0;
		 foreach($products as $product) 
		 {	
			echo"<tr>";
			echo "<td>".$product['id']."</td>";
			echo "<td>".$product['name']."</td>";
			echo "<td>".$product['price']."</td>";
			echo "<td><a href='?id=".$key."' >Add to Cart</a></td>";
			echo"</tr>";
			$key++;
		}	
		?>
	</table>

	<hr>
	<h2>Your Cart</h2>
	<?= form_open();?>
	<table cellpadding="6" cellspacing="1" width="100%" border="1">

		<tr>
			<th>QTY</th>
			<th>Name</th>
			<th>Price</th>
			<th>Sub-Total</th>
		</tr>
		
		<?php
		$i=1;
		 foreach($this->cart->contents() as $items) 
		 {	
			
			echo "<td>".form_hidden($i.'[rowid]',$items['rowid'])."</td>";
			echo"<tr>";
			echo "<td>".form_input(array('name'=>$i.'[qty]','value'=> $items['qty'],'maxlength'=> '3','size'=>'5'))."</td>";
			echo "<td>".$items['name']."</td>";
			echo "<td>".$items['price']."</td>";
			echo "<td>".$items['subtotal']."</td>";
			// echo "<td><a href='?id=".$key."' >Add to Cart</a></td>";
			echo"</tr>";
			$i++;
		}	
		?>
	</table>
	
</body>
</html>