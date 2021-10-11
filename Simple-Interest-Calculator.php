<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Simple-Interest-Calculator</title>
</head>
<body>
	<div>
		<?php
			$Principal = $RateofInterest = $NoofYears = "";
			$PrincipalError = $RateofInterestError = $NoofYearsError = "";
			$ErrorFound = false;

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$Principal = $_POST['principal'];
				if (empty($Principal)) {
					$PrincipalError =  "Principal is Mandatory";
					$ErrorFound = true;
				} else if ($Principal>500000) {
					$PrincipalError = "Principal Amount Should not exceed Rs.5 Lakhs . ";
					$ErrorFound = true;
				}

				$RateofInterest = $_POST['rateofinterest'];
				if (empty($RateofInterest)) {
					$RateofInterestError =  "Rate of Interest is Mandatory";
					$ErrorFound = true;
				} else if ($RateofInterest < 8 || $RateofInterest > 24) {
					$RateofInterestError = "Rate of Interest must Between 8 and 24 ";
					$ErrorFound = true;
				}

				$NoofYears = $_POST['noofyears'];
				if (empty($NoofYears)) {
					$NoofYearsError =  "No of Years is Mandatory";
					$ErrorFound = true;
				} else if ($NoofYears < 0 || $NoofYears > 10) {
					$NoofYearsError = "No of Years must Between 1 and 10.";
					$ErrorFound = true;
				}
			}
		?>
	</div>

	<!-- HTML Content -->
	<div>
		<form action="Simple-Interest-Calculator.php" method="post">
			<h2>Simple Interest Calculator</h2>
			<label>Principal Amount</label>
			<br>
			<input type="number" name="principal"/>
			<br>
			<?php echo $PrincipalError;?>
			<br>
			<br>

			<label>Rate of Interest</label>
			<br>
			<input type="number" name="rateofinterest"/>
			<br>
			<?php echo $RateofInterestError;?>
			<br>
			<br>

			<label>No of Years</label>
			<br>
			<input type="number" name="noofyears"/>
			<br>
			<?php echo $NoofYearsError;?>
			<br>
			<br>
			<button type="submit">Submit</button>
			<br>

		</form>

	</div>





	<div class="Calculate">
		<!-- Calculation -->
		<?php
		if ($_SERVER['REQUEST_METHOD'] == "	POST" and ErrorFound == false) {
			echo "HELLO"; 	
			$SimpleInterest = $Principal * RateofInterest/100.0 * NoofYears;

			echo "<h2>Result</h2>";
			echo "Principal Amount : $Principal <br> ";
			echo "Rate of Interest : $RateofInterest <br> ";
			echo "No of Years : $NoofYears<br> ";
			echo "Simple Interest : <b><$SimpleInterest/b>";
		}


		?>

	</div>
</body>
</html>