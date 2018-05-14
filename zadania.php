
<div id="kw1">
	<h3>Kwerenda 1</h3>
<?php

$file=fopen("dane\sygnaly.txt","r") or die ("Unable to open file!");
	$i=1;
while(!feof($file))
{
	$word=$i.fgets($file);

	if($i>39)
		{
			if(!($i%40)) echo $word[10];
		}
				
	$i++;		
}

fclose($file);

?>
</div>

<div id="kw2">
	<h3>Kwerenda 2</h3>
<?php
$max=$r=0;

$file=fopen("dane/sygnaly.txt","r");
	while(!feof($file))
	{
		$word=fgets($file);
		$buffer=substr( repeatCharacter($word),-2);
		//echo $buffer.'<br>';
		if($buffer>$max)
			{
				$max=$buffer;
				$result=$word;
				
			}	
		
	}
	//echo $result.'<br>';
	echo substr(repeatCharacter($result),0,$max+1);
	echo ' '.$max;

fclose($file);


function repeatCharacter($str)
{
	 
	 $strlen=strlen($str);

	 $num=1;
	 for ($i=0; $i<$strlen; $i++)
	 {
		 for($j=65; $j<=97; $j++)
		 {
			$acii=ord($str[$i]);
			$w[$i]=chr($acii); 
		 }	 
	 }
	 
	 //echo $w[0];
	  for ($i=1; $i<$strlen; $i++)
	 {
		//echo $w[$i];
		for ($j=0; $j<$i; $j++)
		{
			if($w[$i]!=$w[$j])
			continue;
			else goto finish;	
		}
		$num++; 
	 }
	 finish:
	  return $str.' '.$num;
}
?>
</div>

<div id="kw3">
	<h3>Kwerenda 3</h3>
<?php
$file=fopen("dane/sygnaly.txt","r");
while(!feof($file))
{
	$string=fgets($file);
	//echo $word.'<br>';
	charDistanceBetween($string);
	
}

fclose($file);

//charDistanceBetween("XXUXXTYVXW");
function charDistanceBetween($word)
{
	
	$lenword=strlen($word);
	for($i=0; $i<$lenword; $i++)
	{
		$acii[$i]=ord($word[$i]);
	}
	//echo $acii[0].'<br>';
	$buffer="";
	if((isset($acii[0]))||(!empty($acii[0])))
	$buffer=$acii[0]; //***The mistake appears when i use $word calling function
					 // when i just put into function string (for example: "AEGG"
					 // everything works correctly
	else echo 'not ok: the code of error is '.error_reporting(E_ALL ^ E_NOTICE);
	
	for($i=1; $i<$lenword; $i++)
	{
		if (abs($buffer-$acii[$i])<=10)
		{
			//echo $acii[$i];
			$buffer=$acii[$i];
		}
		else $word=false;
	}
	echo $word;
}
?>


</div>


