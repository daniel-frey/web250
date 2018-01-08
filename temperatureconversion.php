<?php
// The functions that do the math

//Fahrenheit to Celsius
function f2c($givenValue)
{
	$celsius=5/9*($givenValue-32);
	return $celsius;
}
//Fahrenheit to kelvin
function f2k($givenValue)
{
	$kelvin=f2c($givenValue) + 273.15;
	return $kelvin;
}
//Celsius to fahrenheit
function c2f($givenValue)
{
	$fahrenheit=$givenValue*9/5+32;
	return $fahrenheit;
}
//Celsius to kelvin 
function c2k($givenValue)
{
	$kelvin=$givenValue+273.15;
	return $kelvin;
}
//Kelvin to fahrenheit
function k2f($givenValue)
{
	$fahrenheit=9/5*($givenValue-273.15)+32;
	return $fahrenheit;
}
//Kelvin to celsius
function k2c($givenValue)
{
	$celsius=$givenValue-273.15;
	return $celsius;
}
?>
<html>
    <head>
        <title>Temperature Conversion</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
        <link href=style.css rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
<body>
    <div class ="wrapper">
        <h2>Temperature Conversion</h2> 
	   <form action="" method="post">
	<table>
		<tr>
			<td>
				<select name="firstTempType">
					<option value="fahrenheit">Fahrenheit</option>
					<option value="celsius">Celsius</option>
					<option value="kelvin"> Kelvin</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<input type="text" name="given_value">
			</td>
		</tr>
		<tr>
			<td>
				<select name="secondTempType">
					<option value="fahrenheit">Fahrenheit</option>
					<option value="celsius">Celsius</option>
					<option value="kelvin">Kelvin</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="button" value="Click to Convert">
			</td>
		</tr>
		<tr>
			<td>
<?php
if(isset($_POST['button']))
{
    
    $firstTempType=$_POST['firstTempType'];
    $secondTempType=$_POST['secondTempType'];
    $givenValue=$_POST['given_value'];
    
    //Fahrenheit to celsius and kelvin
    if ($firstTempType=='fahrenheit') 
    {
        if ($secondTempType=='celsius') 
        {
            $celsius=f2c($givenValue);
            echo "$givenValue Fahrenheit = $celsius Celsius";
        }  elseif ($secondTempType=='kelvin') 
        {
            $kelvin=f2k($givenValue);
            echo "$givenValue Fahrenheit = $kelvin Kelvin";
        }  else 
        {
            echo "$givenValue Fahrenheit";
        }
    }
    //Celsius to fahrenheit and kelvin
    if ($firstTempType=='celsius') 
    {
        if ($secondTempType=='fahrenheit') 
        {
            $fahrenheit=c2f($givenValue);
	        echo "$givenValue Celsius = $fahrenheit Fahrenheit";
        }  elseif ($secondTempType=='kelvin') 
        {
            $kelvin=c2k($givenValue);
            echo "$givenValue Celsius = $kelvin Kelvin";
        }  else 
        {
            echo "$givenValue Celsius";
        }
    }
    //Kelvin to fahrenheit and celsius
    if ($firstTempType=='kelvin') 
    {
        if ($secondTempType=='fahrenheit')
        {
            $fahrenheit=k2f($givenValue);
            echo "$givenValue Kelvin  = $fahrenheit Fahrenheit";
        }  elseif ($secondTempType=='celsius') 
        {
            $celsius=k2c($givenValue);
            echo "$givenValue Kelvin = $celsius Celsius";
        }  else 
        {
            echo "$givenValue Kelvin";
        }
    } 
}
				?>
			</td>
		</tr>
	</table>
    </div>
    </form>
</body>
</html>