//First step start here
<?php

$name=array("Montashir", "Billah", "Kamal", "Rohim");
			sort($name);
			for($i=0;$i<4;$i++)
			{
				echo $name[$i]."<br/>";
			}
?>

//End First step here



//Second step start here
<?php

$name=array("Montashir", "Billah", "Kamal", "Rohim");
			sort($name);
			$length=count($name);
			for($i=0;$i<$length;$i++)
			{
				echo $name[$i]."<br/>";
			}
?>
//End Second step here



//Thrid step start here
<?php
$name=array(25, 5, 15, 30, 20);
			sort($name);
			$length=count($name);
			for($i=0;$i<$length;$i++)
			{
				echo $name[$i]."<br/>";
			}
?>
//End third step here



//Fourth step strat here
<?php
$name=array(25, 5, 15, 30, 20);
			rsort($name);
			$length=count($name);
			for($i=0;$i<$length;$i++)
			{
				echo $name[$i]."<br/>";
			}
?>
//End fourth step here
//fifth step start here
<?php
// Assanding sort value Method
$age=array("Jamal"=>"40", "Kamla"=>"28", "Rohim"=>"21");
			asort($age);
			foreach($age as $key=> $value)
			{
				echo "Key=".$key." Value=" .$value;
				echo "<br/>";
			}
?>
//End fifth step here


//sixth step start here
<?php
// k sort key Method
$age=array("Jamal"=>"40", "Kamla"=>"28", "Rohim"=>"21");
			ksort($age);
			foreach($age as $key=> $value)
			{
				echo "Key=".$key." Value=" .$value;
				echo "<br/>";
			}
?>
//End sixth step here