<!DOCTYPE html>

<head>
	<title>Electricity</title>
</head>

<?php
$result_str = $result = '';
if (isset($_POST['unit-submit'])) {
    $u = $_POST['snd'] ;
$s= $_POST['fst'];
$units=$s-$u;
    if (!empty($units)) {
        $result = calculate_bill($units);
        $result_str = 'Total amount of ' . $units . ' - ' . $result;
    }
}
/**
 * To calculate electricity bill as per unit cost
 */
function calculate_bill($units) {
   

  if ($units <= 100)
        {
            $bill= $units * 3;
        }
        elseif ($units <= 200)
        {
            $bill= $units * 4;
        }
        elseif ($units <= 300)
        {
            $bill= $units * 5;
        }
        elseif ($units > 300)
        {
          $bill= $units * 6;
        }
    return number_format((float)$bill, 2, '.', '');
}

?>

<body style="background-image: url('h3.jpg');color:tomato">
	<div id="page-wrap">
	<center>	<h1>  Electricity </h1>

		<form action="" method="post" id="quiz-form">
            	<input type="text" name="fst" id="fst" placeholder="Please enter previous Units" />
                  <input type="text" name="snd" id="snd" placeholder="Please enter current Units" />
            	<input type="submit" name="unit-submit" id="unit-submit" value="Submit" />
		</form>

		<div>
		    <?php echo '<br />' . $result_str; ?>
		</div>
	</div>
</center>
</body>
</html>