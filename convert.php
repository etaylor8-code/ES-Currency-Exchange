<title>E.S. Currency Exchange</title>
<h3>Thank you for using the E.S. Currency Exchange App!</h3><br>
<?php

  $currency1 = htmlspecialchars($_POST['currency1']);
  $currency2 = htmlspecialchars($_POST['currency2']);
  $amount = htmlspecialchars($_POST['amount']);

  
#CAD to everything
  if ($currency1 == "canada") {
   if ($currency2 == "canada") {
    $convertedAmount = $amount * 1;
   }
   if ($currency2 == "us") {
    $convertedAmount = $amount * 0.79;
   }
   if ($currency2 == "uk") {
    $convertedAmount = $amount * 0.57;
   }
   if ($currency2 == "europe") {
    $convertedAmount = $amount * 0.66;
   }
   if ($currency2 == "china") {
    $convertedAmount = $amount * 5.13;
   }
   if ($currency2 == "japan") {
    $convertedAmount = $amount * 85.58;
   }
  }

#USD to everything
  if ($currency1 == "us") {
   if ($currency2 == "us") {
    $convertedAmount = $amount * 1;
   }
   if ($currency2 == "canada") {
    $convertedAmount = $amount * 1.27;
   }
   if ($currency2 == "uk") {
    $convertedAmount = $amount * 0.72;
   }
   if ($currency2 == "europe") {
    $convertedAmount = $amount * 0.84;
   }
   if ($currency2 == "china") {
    $convertedAmount = $amount * 6.50;
   }
   if ($currency2 == "japan") {
    $convertedAmount = $amount * 108.32;
   }
  }

#GBP to everything
  if ($currency1 == "uk") {
   if ($currency2 == "uk") {
    $convertedAmount = $amount * 1;
   }
   if ($currency2 == "canada") {
    $convertedAmount = $amount * 1.75;
   }
   if ($currency2 == "us") {
    $convertedAmount = $amount * 1.38;
   }
   if ($currency2 == "europe") {
    $convertedAmount = $amount * 1.16;
   }
   if ($currency2 == "china") {
    $convertedAmount = $amount * 8.98;
   }
   if ($currency2 == "japan") {
    $convertedAmount = $amount * 149.94;
   }
  }

#EUR to everything
  if ($currency1 == "europe") {
   if ($currency2 == "europe") {
    $convertedAmount = $amount * 1;
   }
   if ($currency2 == "canada") {
    $convertedAmount = $amount * 1.51;
   }
   if ($currency2 == "us") {
    $convertedAmount = $amount * 1.19;
   }
   if ($currency2 == "uk") {
    $convertedAmount = $amount * 0.86;
   }
   if ($currency2 == "china") {
    $convertedAmount = $amount * 7.74;
   }
   if ($currency2 == "japan") {
    $convertedAmount = $amount * 129.09;
   }
  }

#CNY to everything
  if ($currency1 == "china") {
   if ($currency2 == "china") {
    $convertedAmount = $amount * 1;
   }
   if ($currency2 == "canada") {
    $convertedAmount = $amount * 0.19;
   }
   if ($currency2 == "us") {
    $convertedAmount = $amount * 0.15;
   }
   if ($currency2 == "uk") {
    $convertedAmount = $amount * 0.11;
   }
   if ($currency2 == "europe") {
    $convertedAmount = $amount * 0.13;
   }
   if ($currency2 == "japan") {
    $convertedAmount = $amount * 16.67;
   }
  }

#JPY to everything
  if ($currency1 == "japan") {
   if ($currency2 == "japan") {
    $convertedAmount = $amount * 1;
   }
   if ($currency2 == "canada") {
    $convertedAmount = $amount * 0.012;
   }
   if ($currency2 == "us") {
    $convertedAmount = $amount * 0.0092;
   }
   if ($currency2 == "uk") {
    $convertedAmount = $amount * 0.0067;
   }
   if ($currency2 == "europe") {
    $convertedAmount = $amount * 0.0077;
   }
   if ($currency2 == "china") {
    $convertedAmount = $amount * 0.060;
   }
  }

#Canada/US print statement
  if ($currency2 == "canada" || $currency2 == "us") {
  	$roundedAmount1 = round($convertedAmount,2);
    echo 'Your converted amount is $', number_format($roundedAmount1, 2);
  }
#China/Japan print statement
  if ($currency2 == "china" || $currency2 == "japan") {
    	$roundedAmount2 = round($convertedAmount,2);
    echo 'Your converted amount is ¥', number_format($roundedAmount2, 2);
  }
#UK print statement
  if ($currency2 == "uk") {
    	$roundedAmount3 = round($convertedAmount,2);
    echo 'Your converted amount is £', number_format($roundedAmount3, 2);
  }
#Europe print statement
  if ($currency2 == "europe") {
    	$roundedAmount4 = round($convertedAmount,2);
    echo 'Your converted amount is €', number_format($roundedAmount4, 2);
  }
?>
<br><br>
<button name="backbutton" onclick="history.go(-1)">Back</button>

