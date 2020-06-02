<?php
	include "db.php";
	$id = $_GET['id'];
	$sql = "SELECT * FROM corretores.corretor where id = '$id'";
  $sql_query = "SELECT * FROM corretores.corretor";

	$rows = $db->query($sql);
	$row 	= $rows->fetch_assoc();

  $each = $db->query($sql_query);

	if(isset($_POST['enviar'])){
		$nome 	= $_POST['nome'];
		$cpf 		= $_POST['cpf'];
		$creci	=	$_POST['creci'];

		$request = "UPDATE corretores.corretor set nome = '$nome', cpf = '$cpf', creci = '$creci' where id = '$id'";
		$db->query($request);
		if ($request == true) {
			echo "true";
    	header('location: add.php'); 
		}else {
			echo "error";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>
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
      Atualizar dados do corretor
    </span>

    <div class="itens">
      <div class="name-label">
        <input class="first-input" type="text" minlength="2" name="creci" placeholder="Digite seu Creci" value="<?php echo $row['creci']?>">
      </div>
      <div class="cpf-label">
        <input type="text" class="cpf" name="cpf"  maxlength="11" placeholder="Digite seu CPF" value="<?php echo $row['cpf']?>">
      </div>
      <div class="creci-label">
        <input type="text" name="nome" minlength="2" placeholder="Digite seu Nome" value="<?php echo $row['nome']?>">
      </div>
    </div>

    <div class="submit">
      <button type="submit" name="enviar">Salvar</button>
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
          <?php while($eachone = $each->fetch_assoc()):?>
            <tr>
              <th><?php echo $eachone["id"]?></th>
              <th><?php echo $eachone['nome']?></th>
              <th><?php echo $eachone["cpf"]?></th>
              <th><?php echo $eachone["creci"]?></th>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </section>

</body>
</html>