



<?php

	include ("./connection.php");
	
	$id=$_GET['id'];
	
	$sql = "SELECT id_trabalho,descricao,nome_trabalho,foto,data FROM trabalhos WHERE id_trabalho=$id";

    $result = mysqli_query($db,$sql);

    if ($data = mysqli_fetch_array($result)){ ?>
		<center>
		 <img  class="card-img-top2"	src="foto/<?php echo $data['foto']; ?>"/>
		 </center>
		
<?php	} ?>