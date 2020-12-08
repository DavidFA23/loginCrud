<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Registro de reporte</title>
  </head>
  <body >
  <header>
            
          

    <nav class="navbar navbar-expand-lg dd navbar-dark bg-dark">
  <a class="navbar-brand" href="">Usuario :<?php echo session('usuario'); ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
    <li class="active"><a href="<?php echo base_url('/logout') ?>"><i class="fa fa-link"></i> <h2>Salir</h2></a></li>
      <li class="nav-item dropdown">
        
      
        
      </li>
    </ul>
  </div>
</nav>
            </header>
                
                  
           
    <body>
<section aling ="center" style="background:	#054e98 "> 


                <div class="container" align="center">
                <div class="row" >
                <div class="col-sm-8">
                <div class="col-sm-8">
                <h1 >Informe de gastos </h1>
                <form method="POST" action="<?php echo base_url().'/crear' ?>">
                <label for="nombre">concepto_de_gasto</label>
                <input type="text" name="concepto_de_gasto" id=concepto_de_gasto class="form-control">

                <label for="paterno">monto_de_gasto</label>
                <input type="text" name="monto_de_gasto" id=monto_de_gasto class="form-control">
                <label for="materno">fecha</label>
                <input type="text" name="fecha" id=fecha class="form-control">
                <br>
                <button class="btn btn-primary">Guardar</button>
                </form>
                </div>
                </div>
                </div>
                </div>

            <hr>
            <h2 >Listado de personas </h2>
                <div class="row" aling ="center" >
                <div class="col-sm-12">
                <div class ="table table-responsive">
                <table class=" table table-hover table-bordered">
                <tr>
                <th>concepto_de_gasto <br></th>
                <th>monto_de_gasto</th>
                <th>fecha</th>

                <th>Editar</th>
                <th>Eliminar</th>
                </tr>
                <?php foreach($datos as $key): ?>
                <tr>
                
                <td><?php echo $key->concepto_de_gasto ?></td>
                <td><?php echo $key->monto_de_gasto ?></td>
                <td><?php echo $key->fecha ?></td>
                <td>
                <a href="<?php echo base_url().'/obtenerdatos/'.$key->id_gasto ?>" class="btn btn-warning btn-sm">Editar</a> 
                
                </td>
                <td>
                <a href="<?php echo base_url().'/eliminar/'.$key->id_gasto ?>" class= "btn btn-danger btn-sm">Eliminar</a>
                </td>
                </tr>
                <?php endforeach; ?>
                </table>
                </div>
                </div>
                
                
                </div>
                </div>
                    <!-- Optional JavaScript -->
                    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
                    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                
                    <script type="text/javascript"> 
		let mensaje = '<?php echo $mensaje ?>';

		if(mensaje == '1'){
			swal('😃','Agregado con exito', 'success');
			
		}else if(mensaje == '0'){

			swal('🙁','Falló al agregar', 'error');
			
		}else if(mensaje == '2'){

			swal('xD','Actualizado correctamente', 'success');

		}else if(mensaje == '3'){

			swal('🙁','Falló al actualizar', 'error');

		}else if(mensaje == '4'){

			swal('xD','Eliminado con exito', 'success');

		}else if(mensaje == '5'){

			swal('🙁','Falló al eliminar', 'error');

		}


                   
    

            

                

                
                
                </script>



</section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <style>
    body{
      color: ;
      background: blue;
    }
    </style>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>