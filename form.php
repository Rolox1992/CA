<?php include('include/header.php');

?>
<link rel="stylesheet" href="style.css"
<style>
<table>
<table class="table table-condensed">
<table class="table table-hover">
    <tr><th>Country</th><th>Capital</th></tr> 

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

    foreach($countries as $x => $x_value)
    {
        echo "<tr><td>$x</td><td>$x_value</td></tr>";
    }
    

?>
</table>
</style>
<?php include('include/footer.php');

?>