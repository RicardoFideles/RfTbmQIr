<?php
	
	$opcao_1 = $enquete['Enquete']['opcao_1'];
	$opcao_2 = $enquete['Enquete']['opcao_2'];
	$opcao_3 = $enquete['Enquete']['opcao_3'];
	$opcao_4 = $enquete['Enquete']['opcao_4'];
	$opcao_5 = $enquete['Enquete']['opcao_5'];
	
	$resultado_1 = $enquete['Enquete']['resposta_1'];
	$resultado_2 = $enquete['Enquete']['resposta_2'];
	$resultado_3 = $enquete['Enquete']['resposta_3'];
	$resultado_4 = $enquete['Enquete']['resposta_4'];
	$resultado_5 = $enquete['Enquete']['resposta_5'];
	
	$total = 0;
	$total += $resultado_1;
	$total += $resultado_2;
	$total += $resultado_3;
	$total += $resultado_4;
	$total += $resultado_5;
	
	$contador = 0;
	
	
	
	if (!empty($opcao_1)) {
		$contador += 1;
	}
	
	if (!empty($opcao_2)) {
		$contador += 1;
	}
	
	if (!empty($opcao_3)) {
		$contador += 1;
	}
	
	if (!empty($opcao_1)) {
		$contador += 1;
	}
	
	if (!empty($opcao_1)) {
		$contador += 1; 
	}
	
?>



<?php 

	if (!empty($opcao_1)) {
?>

<?php echo $opcao_1; ?>
<?php  $resultado = (100 * $resultado_1) / $total; ?>

<div class="progress progress-danger">
	<div class="bar" style="width: <?php echo $resultado; ?>%"></div>
</div>

<?php
	} 
?>

<?php 
	if (!empty($opcao_2)) {
?>

<?php echo $opcao_2; ?>
<?php $resultado = (100 * $resultado_2) / $total; ?>

<div class="progress progress-danger">
	<div class="bar" style="width: <?php echo $resultado; ?>%"></div>
</div>

<?php
	} 
?>
<?php 
	if (!empty($opcao_3)) {
?>

<?php echo $opcao_3; ?>
<?php $resultado = (100 * $resultado_3) / $total; ?>

<div class="progress progress-danger">
	<div class="bar" style="width: <?php echo $resultado; ?>%"></div>
</div>

<?php
	} 
?>
<?php 
	if (!empty($opcao_4)) {
?>

<?php echo $opcao_4; ?>
<?php  $resultado = (100 * $resultado_4) / $total; ?>

<div class="progress progress-danger">
	<div class="bar" style="width: <?php echo $resultado; ?>%"></div>
</div>

<?php
	} 
?>
<?php 
	if (!empty($opcao_5)) {
?>

<?php echo $opcao_5; ?>
<?php $resultado = (100 * $resultado_5) / $total; ?>

<div class="progress progress-danger">
	<div class="bar" style="width: <?php echo $resultado; ?>%"></div>
</div>

<?php
	} 
?>

<style type="text/css">

.progress {
	height: 20px;
	margin-bottom: 20px;
	overflow: hidden;
	background-color: #f7f7f7;
	background-image: -moz-linear-gradient(top, #f5f5f5, #f9f9f9);
	background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#f5f5f5), to(#f9f9f9));
	background-image: -webkit-linear-gradient(top, #f5f5f5, #f9f9f9);
	background-image: -o-linear-gradient(top, #f5f5f5, #f9f9f9);
	background-image: linear-gradient(to bottom, #f5f5f5, #f9f9f9);
	background-repeat: repeat-x;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff5f5f5', endColorstr='#fff9f9f9', GradientType=0);
	-webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
	-moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
	box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
}

.progress-danger .bar, .progress .z-danger {
	background-color: #dd514c;
	background-image: -moz-linear-gradient(top, #ee5f5b, #c43c35);
	background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ee5f5b), to(#c43c35));
	background-image: -webkit-linear-gradient(top, #ee5f5b, #c43c35);
	background-image: -o-linear-gradient(top, #ee5f5b, #c43c35);
	background-image: linear-gradient(to bottom, #ee5f5b, #c43c35);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffee5f5b', endColorstr='#ffc43c35', GradientType=0);
}
.progress .bar {
	float: left;
	width: 0;
	height: 100%;
	font-size: 12px;
	color: #ffffff;
	text-align: center;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: #0e90d2;
	background-image: -moz-linear-gradient(top, #149bdf, #0480be);
	background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#149bdf), to(#0480be));
	background-image: -webkit-linear-gradient(top, #149bdf, #0480be);
	background-image: -o-linear-gradient(top, #149bdf, #0480be);
	background-image: linear-gradient(to bottom, #149bdf, #0480be);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff149bdf', endColorstr='#ff0480be', GradientType=0);
	-webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
	-moz-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
	box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	-webkit-transition: width 0.6s ease;
	-moz-transition: width 0.6s ease;
	-o-transition: width 0.6s ease;
	transition: width 0.6s ease;
}
	
	
</style>