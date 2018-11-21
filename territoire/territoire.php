<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/territoire.css">
	<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>

	<title>Territoire</title>
</head>
	<body>
		<?php require "../inc/navbar.php"; ?>
		<div class="container">
			<div class="row">
				<div class="col-md-4 container text-center" style="border:1px solid #FDFD96;">
					<h2>CTS</h2>
					<p>			
					    <button class="btn btn-primary btn-block" type="button" id="amenagement">Aménagement de territoire</button>		
					    <button class="btn btn-primary btn-block" type="button" id="probleme">Problème de commune</button>	
					    <button class="btn btn-primary btn-block" type="button" id="permanence">Permanence mairie</button>
					    <button class="btn btn-primary btn-block" type="button" id="poubelle">Ramassage poubelle</button>	
					<button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
					   Association
					</button>
					</p>
					<div class="collapse" id="collapseExample">				  
					    <button class="btn btn-primary custom" type="button" id="scolaire">Scolaire</button><br/>
						<button class="btn btn-primary custom" type="button" id="quartier">Quartier</button><br/>  
					    <button class="btn btn-primary custom" type="button" id="sportive">Sportive</button><br/>	
					</div>
				</div>
				<div class="col-md-8 container" style="border:1px solid #FDFD96;">
					<h2>Test</h2>
					<div id="div1"><h2>Rien</h2></div>		
				</div>				
			</div>
		</div>
				<script type="text/javascript">
						$(function () {$("#amenagement").click(function(){$.ajax({url:"amenagement.html",success:function(result){$("#div1").html(result);}});});});
						$(function () {$("#probleme").click(function(){$.ajax({url:"probleme.html",success:function(result){$("#div1").html(result);}});});});
						$(function () {$("#permanence").click(function(){$.ajax({url:"permanence.html",success:function(result){$("#div1").html(result);}});});});
						$(function () {$("#poubelle").click(function(){$.ajax({url:"poubelle.html",success:function(result){$("#div1").html(result);}});});});
					    $(function () {$("#scolaire").click(function(){$.ajax({url:"scolaire.html",success:function(result){$("#div1").html(result);}}); });});				  					
					    $(function () {$("#quartier").click(function(){$.ajax({url:"quartier.html",success:function(result){$("#div1").html(result);}});});});				  
						$(function () {$("#sportive").click(function(){$.ajax({url:"sportive.html",success:function(result){$("#div1").html(result);}});});})	;
					</script>


<hr>
<hr>
    
	</body>
</html>