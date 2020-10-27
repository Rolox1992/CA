<html>
<body>

Country is <?php echo $_GET["country"]; ?><br>

<?php
$countries = array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
"Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
"Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United 
Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech
Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest",
"Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna",
"Poland"=>"Warsaw") ;
foreach($countries as $name => $x_capital)
if(in_array("Ireland", $countries))
{
    echo "Match";
}
else{
     echo "no";
}

?>
</body>
</html>