<?php
	include ("db.php");
	if(isset($_POST['enviar'])){
		$creci = $_POST["creci"];
		$cpf 	 = $_POST["cpf"];
		$name  = $_POST["nome"];

		$sql = "INSERT INTO corretores.corretor (`creci`, `cpf`, `nome`) VALUES ('$creci', '$cpf', '$name') ";
		// $result = $db->query($sql);
		$result = $db->query($sql);
		

		
		if($result == true) {
			echo "Sucessfully to inserted";
			header('location: add.php');
		}else{
			echo "error";
		}

	}
   $sql = "SELECT * FROM corretores.corretor";

   $rows = $db->query($sql);
   $row = $rows->fetch_assoc();
?>


<!DOCTYPE html>
<html>
<head>
	<title>
		Formulario de cadastro
	</title>
  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script  src="jquery.js"></script>
  <script  src="mapage.js"></script>
  <script src="jquery_mask.js"></script>
</head>
<body>
  <form method="POST" class="form" >
    <span class="title">
      Cadastro de corretor
    </span>

    <div class="itens">
      <div class="name-label">
        <input class="first-input" type="text" minlength="2" name="creci" placeholder="Digite seu Creci">
      </div>
      <div class="cpf-label">
        <input type="text" class="cpf" name="cpf"  maxlength="11" placeholder="Digite seu CPF">
      </div>
      <div class="creci-label">
        <input type="text" name="nome" minlength="2" placeholder="Digite seu Nome">
      </div>
    </div>

    <div class="submit">
      <button type="submit" name="enviar">Cadastrar</button>
    </div>
  </form>
   <section class="container">
    <center>Imobiliaria TecSur</center>
    <div class="col-md-10 col-md-offset-1">
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nome</th>
            <th scope="col">CPF</th>
            <th scope="col">CRECI</th>
          </tr>
        </thead>
        <tbody>
          <?php while($row = $rows->fetch_assoc()):?>
            <tr>
              <th><?php echo $row["id"]?></th>
              <th><?php echo $row['nome']?></th>
              <th><?php echo $row["cpf"]?></th>
              <th><?php echo $row["creci"]?></th>
              <td><a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Deletar</a></td>
              <td><a href="edit.php?id=<?php echo $row["id"];?>" class="btn btn-success">Editar</a></td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </section>
</body>
</html>