<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Booleans</title>
		<style>			
			legend {
				font-size: 16px;
				border: 1px solid black;
				padding: 5px;
				background-color: orange;
				cursor: pointer;
			}			
			i {
				color: #00ff00; // green
			}
			span.blue {
				color: #0000ff; // blue				
			}
			span.red {
				color: #ff0000; // red				
			}
		</style>
	</head>
	<body>

		<?php
			$result1 = true;
			$result2 = false;
			
			echo '
			<fieldset>
			<legend id="legendBooleans">Booleans</legend>
			<div id="divBooleans">
			&emsp;<code><i>// declare boolean variables</i></code><br>
			&emsp;<code>$result1 = true;</code><br>
			&emsp;<code>$result2 = false;</code><br><br>';
			
			echo '
			&emsp;<code><i>// echo the values of the variables</i></code><br>			
			&emsp;<code>Display value of $result1: <span class="red">&lt;?php</span><span class="blue"> echo </span>$result1; <span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';		
			echo '<code>' . $result1 . '</code><br>
			&emsp;<code>Display value of $result2: <span class="red">&lt;?php</span><span class="blue"> echo </span>$result2; <span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';		
			echo '<code>' . $result2 . '</code><br><br>';
			
			echo '
			&emsp;<code><i>// is_bool: returns true if parameter is true or false</i></code><br>	
			&emsp;<code><i>// is_bool(variable)</i></code><br>
			&emsp;<code>Is result2 boolean?: <span class="red">&lt;?php</span><span class="blue"> echo is_bool</span>($result2); <span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';		
			echo '<code>' . is_bool($result2) . '</code><br><br>';
			
			echo '
			&emsp;<code><i>// is_float: returns true if parameter is a decimal</i></code><br>	
			&emsp;<code><i>// is_float(variable)</i></code><br>
			&emsp;<code>Is 3.14 a float?: <span class="red">&lt;?php</span><span class="blue"> echo</span> if(<span class="blue">is_float</span>(3.14)){<span class="blue">echo</span> "It is a float";} <span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
			if(is_float(3.14)){echo '<code>It is a float</code><br><br>';}
			//echo '<code>' .  . '</code><br><br>';
			
			echo '</div></fieldset>';
		?>
				
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendBooleans").on("click", function() {
					$("#divBooleans").slideToggle();
				});				
			});
		</script>
	</body>
</html>
