<?php 
    include("db/core.php");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Aplicación To Do list</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <style>
            .subrayado{
                text-decoration:line-through;
            }
        </style>
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main class="container">
        <br>
        <div class="card">
            <div class="card-header">
                Todo List
            </div>
            <div class="card-body">
                    
                    <div class="mb-3">
                        <form action="" method="post">
                            <label for="tarea" class="form-label">Tarea:</label>
                            
                            <input
                                type="text"
                                class="form-control"
                                name="tarea"
                                id="tarea"
                                aria-describedby="helpId"
                                placeholder="Indique aqui la tarea que desea ingresar"/>

                            <br/>
                            <input name="agregar_tarea" id="agregar_tarea" class="btn btn-success" type="submit" value="Agregar tarea"/>
                        </form>
                        
                    </div>

                <ul class="list-group">
                    
                    <?php 
                    foreach($resultados as $resultado){
                    
                    ?>

                    <li class="list-group-item">

                    <form action="" method="post">
                    <input type="hidden" name="id" value="<?php echo $resultado['id']; ?>">
                    <input class="form-check-input float-start" 
                        type="checkbox" 
                        name="completado"
                        value="<?php echo $resultado['completado']; ?>" id="" 
                        onChange="this.form.submit()"
                        <?php echo ($resultado['completado']==1)?'checked':''; ?> >
                        
                    </form>
                        
                        <span 
                        class="float-start  <?php echo ($resultado['completado']==1)?'subrayado':''; ?> ">
                        &nbsp; <?php echo $resultado['tarea']; ?>
                        </span>
                        <h6 class="float-start">
                            &nbsp; <a href="?id=<?php echo $resultado['id'];?>"><span class="badge bg-danger"> x </span></a>

                        </h6>
                        
                    </li>

                    <?php }?>
                   
                </ul>
                

            </div>
            <div class="card-footer text-muted"></div>
        </div>
        

        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
