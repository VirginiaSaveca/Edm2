<?php 
	include_once("../_db.php");
	include_once("../_header.php");
?>	
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Produtos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Produtos</a></li>
              <li class="breadcrumb-item active">Lista de Produtos</li>
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

        <div class="text-right divH">
          <a href="add.php"><button type="button" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Adicionar</button></a>
       </div>
	   
	    <br>
        <table class="table table-sm table-striped table-bordered table-list table-hover">
              <thead>
                <th>Id</th>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Preco</th>
                <th>Prazo</th>

				<th>Acões</th> 				
              </thead>
              
		<?php 
		 // faz a seleção do dados na Tabela	
			$data = mysqli_query($conectar, "SELECT * FROM produtos");
		 // lista os dados
			while($value = mysqli_fetch_array($data)){
			?>	
							
			<tr>
				<td><?php echo $value['id'] ?>	</td>
				<td><?php echo $value['name'] ?></td>
        <td><?php echo $value['quantidade'] ?></td>
				<td><?php echo $value['preco'] ?></td>
        <td><?php echo $value['prazo'] ?></td>

		
		<!--  redireciona o botao editar e apagar para os repectivos ficheiros  -->
			    <td>
					<a class="btn btn-sm btn-info " href="edit.php?id=<?php echo $value['id']; ?>"><i class="fas fa-pencil-alt"></i>Editar </a> - 
					<a class="btn btn-sm btn-danger " href="deleteQuery.php?id=<?php echo $value['id']; ?>" onclick="return confirma()"><i class="fas fa-trash"></i> Apagar</a>
				</td>
			</tr>
		 <?php  }?>		
	</table>
	
	
	
		
		 <!-- FIM -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
 
       <script>
        function confirma() {
            if (!confirm("Deseja excluir o registro?")) {
                return false;
            }

            return true;
        }
    </script>             
 
  <?php include_once("../_footer.php");  ?> 