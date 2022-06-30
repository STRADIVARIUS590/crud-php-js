<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
   
    <style>
        table{
            width: 100%;
        }
        table, td ,th{
            border: 1px solid black;
            border-collapse:separate;
            text-align: center;
        }
        body{
            background-color: white;
        }
    
    </style>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>CRUD CON PHP Y AJAX</h1>
        <div class="row">
            <div class="col-md-6">
                <table id = 'table'>
                    <!--tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Edad</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Joel</td>
                        <td>Verdugo</td> 
                        <td>22</td>
                        <td><button class='btn btn-danger' id=2>Borrar</button></td>
                        <td><button class='btn btn-success'id=2 >Editar</button></td>
                    </tr-->
                </table>
            </div>
            <div class="col-md-6">
                <form>
                    <div class='input-group mb-3'>
                        <span class="input-group-text">Name:</span>
                        <input class='form-control' type="text" id='name' name='name' required = 'true'>
                    </div>
                    <div class='input-group mb-3'> 
                        <span class="input-group-text">Lastname:</span>
                        <input class='form-control' type="text" id='lastname' name='lastname'  required = 'true'>
                    </div>

                    <div class='input-group mb-3'> 
                        <span class="input-group-text">Age:</span>
                        <input class='form-control' type="number" min='0' id='age' name='age'  required = 'true'>
                    </div>
                    <input type="hidden" name ='id' value ='0' id = 'id'> 
                    <input id='btnOk' value='Go!' class='btn btn-success'>
                    <input id='btnNew' value='Reset Form (New Data)' class='btn btn-success'>
                </form>
    
            </div>
        </div>
    </div>
</body>
<script src="js\app.js"></script>

</html>
