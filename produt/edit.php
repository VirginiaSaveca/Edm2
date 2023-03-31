<?php 
	include_once("../_db.php");
	include_once("../_header.php");
	
	$id = $_GET['id'];
	// faz a seleção do dados na Tabela	
		$query = mysqli_query($conectar, "SELECT * FROM produtos WHERE id = '$id' LIMIT 1");
		$result = mysqli_fetch_assoc($query);

?>	



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Usuarios</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Usuarios</a></li>
              <li class="breadcrumb-item active">Cadastrar</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
		 <!-- INICIO -->

    
         <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cadastrar</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="editQuery.php" >
                <div class="card-body">
				<input type="hidden" name="id" value="<?php echo $result['id']; ?>">
				
				<div class="row">
                  <div class="form-group col-md-4">
                    <label>Nome</label>
                    <input type="text" class="form-control" name= "name" value="<?php echo $result['name']; ?>">
                  </div>
                  <div class="form-group col-md-2">
                    <label>Quantidade</label>
                    <input type="number" class="form-control" name= "quantidade" value="<?php echo $result['quantidade']; ?>">
                  </div>
				  
                  <div class="form-group col-md-3">
                    <label>Preco</label>
                    <input type="tel" class="form-control" name= "preco" value="<?php echo $result['preco']; ?>">
                  </div>	
                  <div class="form-group col-md-3">
                    <label>Prazo</label>
                    <input type="tel" class="form-control" name= "preco" value="<?php echo $result['prazo']; ?>">
                  </div>			  
				</div>
				
				

                <!-- /.card-body -->

                <div class="card-footer text-right">
                  <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
		
		 <!-- FIM -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
 
                
 
  <?php include_once("../_footer.php");  ?> 