<?php
include 'header.php';
include 'pass.php';

function changecurrency(){


	global $newCurrency ;
	global $newLongCurrency ;
	global $newSymbol ;

	$currencylocation = "/home/stakebox/UI/currency.php" ;

	if (is_readable($currencylocation) == FALSE)
		die ("The currency file must be writable.") ;

	// Open the file and erase the contents if any
	$fp = fopen($currencylocation, "w");


	// Write the data to the file
	// CODE INJECTION WARNING!
  	fwrite($fp, "<?php\n\$currency='$newCurrency';\n\$longCurrency='$newLongCurrency';\n\$symbol='$newSymbol';\n?>");
  	// Close the file
  	fclose($fp);

  	echo '<h4><p><b>Your currency has been changed.</p></b></h4>' ;
}

?>

   <b><a name="transactions" style="margin-bottom: 10px; display: inline-block;">Select New Currency</a></b>
	 <div class="row">
           <div class="col-lg-3" offset="4">
            <div class="dropdown">
               <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Choose Currency
               <span class="caret"></span></button>
               <ul class="dropdown-menu center">
                  <li><a href="/changecurrency?newCurrency=usd">US Dollars</a></li>
                  <li><a href="/changecurrency?newCurrency=yuan">Chinese Yuans</a></li>
                  <li><a href="/changecurrency?newCurrency=eur">Euros</a></li>
                  <li><a href="/changecurrency?newCurrency=cad">Canadian Dollars</a></li>
                  <li><a href="/changecurrency?newCurrency=rub">Russian Ruble</a></li>
                  <li><a href="/changecurrency?newCurrency=idr">Indonesian Rupiah</a></li>
                  <li><a href="/changecurrency?newCurrency=thb">Thai Baht</a></li>
                  <li><a href="/changecurrency?newCurrency=hkd">Hong Kong Dollar</a></li>
                  <li><a href="/changecurrency?newCurrency=zar">SouthAfrican Rand</a></li>
                  <li><a href="/changecurrency?newCurrency=gbp">British Pound</a></li>
                  <li><a href="/changecurrency?newCurrency=ils">Isaeli New Shekel</a></li>
                  <li><a href="/changecurrency?newCurrency=aud">Australian Dollar</a></li>
                  <li><a href="/changecurrency?newCurrency=chf">Swiss Franc</a></li>
                  <li><a href="/changecurrency?newCurrency=gbr">Pound Sterling</a></li>
                  <li><a href="/changecurrency?newCurrency=czk">Chech Republic Koruna</a></li>
                  <li><a href="/changecurrency?newCurrency=jpy">Japanese Yen</a></li>
                  <li><a href="/changecurrency?newCurrency=dkk">Danish Krone</a></li>
                  <li><a href="/changecurrency?newCurrency=sgd">Singapore Dollar</a></li>
                  <li><a href="/changecurrency?newCurrency=nzd">New Zealand Dollar</a></li>
                  <li><a href="/changecurrency?newCurrency=nok">Norwegian Krone</a></li>
                  <li><a href="/changecurrency?newCurrency=krw">South Korean Won</a></li>
               </ul>
	    </div>
         </div>
      </div>

<?php
if($_GET['newCurrency'] == "usd"){
   $newCurrency = "usd";
   $newLongCurrency = "US Dollar";
   $newSymbol = "$";
   changecurrency();
}
else if($_GET['newCurrency'] == "yuan"){
   $newCurrency = "cny";
   $newLongCurrency = "Chinese Yuan";
   $newSymbol = "¥";
   changecurrency();
}
else if($_GET['newCurrency'] == "eur"){
   $newCurrency = "eur";
   $newLongCurrency = "Euro";
   $newSymbol = "€";
   changecurrency();
}
else if($_GET['newCurrency'] == "cad"){
   $newCurrency = "cad";
   $newLongCurrency = "Canadian Dollar";
   $newSymbol = "$";
   changecurrency();
}
else if($_GET['newCurrency'] == "rub"){
   $newCurrency = "rub";
   $newLongCurrency = "Russian Ruble";
   $newSymbol = "&#8381";
   changecurrency();
}
else if($_GET['newCurrency'] == "idr"){
   $newCurrency = "idr";
   $newLongCurrency = "Indonesian Rupiah";
   $newSymbol = "Rp";
   changecurrency();
}
else if($_GET['newCurrency'] == "thb"){
   $newCurrency = "thb";
   $newLongCurrency = "Thai Baht";
   $newSymbol = "฿";
   changecurrency();
}
else if($_GET['newCurrency'] == "hkd"){
   $newCurrency = "hkd";
   $newLongCurrency = "Hong Kong Dollar";
   $newSymbol = "HK$";
   changecurrency();
}
else if($_GET['newCurrency'] == "zar"){
   $newCurrency = "zar";
   $newLongCurrency = "South African Rand";
   $newSymbol = "R";
   changecurrency();
}
else if($_GET['newCurrency'] == "gbp"){
   $newCurrency = "gbp";
   $newLongCurrency = "British Pound";
   $newSymbol = "£";
   changecurrency();
}
else if($_GET['newCurrency'] == "ils"){
   $newCurrency = "ils";
   $newLongCurrency = "Israeli New Shekel";
   $newSymbol = "₪";
   changecurrency();
}
else if($_GET['newCurrency'] == "aud"){
   $newCurrency = "aud";
   $newLongCurrency = "Australian Dollar";
   $newSymbol = "$";
   changecurrency();
}
else if($_GET['newCurrency'] == "chf"){
   $newCurrency = "chf";
   $newLongCurrency = "Swiss franc";
   $newSymbol = "CHF";
   changecurrency();
}
else if($_GET['newCurrency'] == "gbr"){
   $newCurrency = "gbr";
   $newLongCurrency = "Pound Sterling";
   $newSymbol = "£";
   changecurrency();
}
else if($_GET['newCurrency'] == "czk"){
   $newCurrency = "czk";
   $newLongCurrency = "Chech Republic Koruna";
   $newSymbol = "Kč";
   changecurrency();
}
else if($_GET['newCurrency'] == "jpy"){
   $newCurrency = "jpy";
   $newLongCurrency = "Japanese Yen";
   $newSymbol = "¥";
   changecurrency();
}
else if($_GET['newCurrency'] == "dkk"){
   $newCurrency = "dkk";
   $newLongCurrency = "Danish Krone";
   $newSymbol = "kr";
   changecurrency();
}
else if($_GET['newCurrency'] == "sgd"){
   $newCurrency = "sgd";
   $newLongCurrency = "Singapore Dollar";
   $newSymbol = "$";
   changecurrency();
}
else if($_GET['newCurrency'] == "nzd"){
   $newCurrency = "nzd";
   $newLongCurrency = "New Zealand Dollar";
   $newSymbol = "$";
   changecurrency();
}
else if($_GET['newCurrency'] == "nok"){
   $newCurrency = "nok";
   $newLongCurrency = "Norwegian Krone";
   $newSymbol = "kr";
   changecurrency();
}
else if($_GET['newCurrency'] == "krw"){
   $newCurrency = "krw";
   $newLongCurrency = "South Korean Won";
   $newSymbol = "₩";
   changecurrency();
}
else if($_GET['newCurrency']){
   print_r("Invalid currency");
}
?>
</div>
<?php include 'footer.php';?>
