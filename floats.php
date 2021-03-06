<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Floating Point Numbers</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
	<a href="home.php"><button id="home">Home</button></a>
		<?php
			$float = 3.14;
			$integer = 3;
			echo '
			<fieldset>
			<legend id="legendFloats">Floating Point Numbers</legend>
			<div id="divFloats">
			<code class="indent01"><i>// declare variable $float</i></code><br>
			<code class="indent01">$float = 3.14;</code><br>
			<code class="indent01">$integer = 3;</code><br>
			<code class="indent01"><b>Calculation results:</b> </code><br>
			<code class="indent02">Addition (<span class="red">&lt;?php</span><span class="blue"> echo</span> $float + 7; <span class="red">?&gt;</span>): ' . ($float + 7) . '</code><br>
			<code class="indent02">Division (<span class="red">&lt;?php</span><span class="blue"> echo</span> $float / 3; <span class="red">?&gt;</span>): ' . ($float / 3) . '</code><br>
			';
			
			echo '
			<code class="indent01"><i>// round: function that rounds up or down</i></code><br>
			<code class="indent01"><i>// round(float_to_round, number_of_decimal_places)</i></code><br>
			<code class="indent01">Round : <span class="red">&lt;?php</span><span class="blue"> echo round</span>($float, 1); <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . (round($float, 1)) . '</code><br><br>';
			
			echo '
			<code class="indent01"><i>// ceil: function that rounds up to the next whole number</i></code><br>
			<code class="indent01"><i>// ceil(float_to_round_up)</i></code><br>
			<code class="indent01">Round : <span class="red">&lt;?php</span><span class="blue"> echo ceil</span>($float); <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . (ceil($float)) . '</code><br><br>';
			
			echo '
			<code class="indent01"><i>// floor: function that rounds down to the previous whole number</i></code><br>
			<code class="indent01"><i>// floor(float_to_round_down)</i></code><br>
			<code class="indent01">Round : <span class="red">&lt;?php</span><span class="blue"> echo floor</span>($float); <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . (floor($float)) . '</code><br><br>';
			
			echo '
			<code class="indent01"><i>// is_int: function that returns 1 if parameter is an integer</i></code><br>
			<code class="indent01"><i>// is_int(value_to_test)</i></code><br>
			<code class="indent01">Is 3 an integer?: <span class="red">&lt;?php</span><span class="blue"> echo</span> "Is {$integer} an integer? " . <span class="blue">is_int</span>($integer); <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . (is_int($integer)) . '</code><br>';
			
			echo '			
			<code class="indent01">Is 3.14 an integer?: <span class="red">&lt;?php</span><span class="blue"> echo</span> "Is {$float} an integer? " . <span class="blue">is_int</span>($float); <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . (is_int($float)) . '</code><br><br>';
			
			echo '
			<code class="indent01"><i>// is_float: function that returns 1 if parameter is a decimal</i></code><br>
			<code class="indent01"><i>// is_float(value_to_test)</i></code><br>
			<code class="indent01">Is 3 a float?: <span class="red">&lt;?php</span><span class="blue"> echo</span> "Is {$integer} a float? " . <span class="blue">is_float</span>($integer); <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . (is_float($integer)) . '</code><br>';
			
			echo '			
			<code class="indent01">Is 3.14 a float?: <span class="red">&lt;?php</span><span class="blue"> echo</span> "Is {$float} a float? " . <span class="blue">is_float</span>($float); <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . (is_float($float)) . '</code><br><br>';
			
			echo '
			<code class="indent01"><i>// is_numeric: function that returns 1 if parameter is a number</i></code><br>
			<code class="indent01"><i>// is_numeric(value_to_test)</i></code><br>
			<code class="indent01">Is 3 a numeric?: <span class="red">&lt;?php</span><span class="blue"> echo</span> "Is {$integer} a numeric? " . <span class="blue">is_numeric</span>($integer); <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . (is_numeric($integer)) . '</code><br>';
			
			echo '			
			<code class="indent01">Is 3.14 a numeric?: <span class="red">&lt;?php</span><span class="blue"> echo</span> "Is {$float} a numeric? " . <span class="blue">is_numeric</span>($float); <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . (is_numeric($float)) . '</code><br>';
			
			echo '</div></fieldset>';
		?>
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendFloats").on("click", function() {
					$("#divFloats").slideToggle();
				});				
			});
		</script>
	</body>
</html>
