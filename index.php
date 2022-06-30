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
<<<<<<< HEAD
<script>


function loadTable(){
        const xmlhttp = new XMLHttpRequest(); 
        xmlhttp.onload = function(){
            document.getElementById('table').innerHTML = this.responseText;
            setListener();
        }
        xmlhttp.open('GET', 'loadTable.php', true);
        xmlhttp.send();
    }loadTable();



    function setListener(){       
        document.querySelectorAll('td button').forEach(el=>{
        el.addEventListener('click',(e)=>{ActionListener(e);}
        )}
    );
    }

   function ActionListener(e){
       if(e.target.classList.contains('delete')){
      //     console.log('Se borra el elemento' , e.target.id)
            resetForm();
            formAction(e);
        }else if(e.target.classList.contains('edit')){
           // console.log('Se edita el elemento',  e.target.id);
            setFormData(getTableData(e.target.parentElement.parentElement));
        }
    }

    function getTableData(selectedRow){
        let values = selectedRow.getElementsByTagName('td');
    /*  console.log(values[0].innerText);
        console.log(values[1].innerText);
        console.log(values[2].innerText);
        console.log(values[3].innerText);
    */
        return {
            id:values[0].innerText,
            name:values[1].innerText,
            lastname:values[2].innerText,
            age:values[3].innerText

        }
    }

    function setFormData(objData){
        const inputId = document.getElementById('id');
        inputId.value = objData.id;

        const inputName = document.getElementById('name');
        inputName.value = objData.name; 

        const inputLastname = document.getElementById('lastname');
        inputLastname.value = objData.lastname;

        const inputAge = document.getElementById('age');
        inputAge.value = objData.age;
        
     
        //console.log(inputId);
        
    }

  function  getFormData(){
        return {
            id: document.getElementById('id').value,
            name: document.getElementById('name').value,
            lastname: document.getElementById('lastname').value,
            age: document.getElementById('age').value
        }
    }

//console.log(document.querySelectorAll('td button'));

//   loadTable(); push 

document.getElementById('btnOk').onclick = formAction; 

function formAction(e){
    let data = getFormData();
  // console.log(data, e.target.classList , 'putoooooooooooooooooooooooooooooooooos');
    if(data.name.trim()!='' &&  data.lastname.trim() !='' && data.age !='' && data.id!=''){
        if(data.id == 0){
            //console.log('save');
            requestAction(data,'save');
        }else if (data.id > 0){
         //   console.log('EDIT');
            // editar datos
            requestAction(data, 'edit');    
        }
    }else{
        //console.log('borrar', e.target);
        //if(e.target.classList.contains('delete')){
           // resetForm();
            requestAction(e.target, 'delete');
        //}
        return;   // hay datos vacios
    }
}

function requestAction(data, to){
    console.log(data);    
    const METHOD = 'GET';
    const URL = `${to}.php?id=${data.id}&name=${data.name}&lastname=${data.lastname}&age=${data.age}`;
    const xmlhttp = new XMLHttpRequest(); 
        xmlhttp.onload = function(){
            ///document.getElementById('table').innerHTML = this.responseText;
 
            loadTable();    
            resetForm();
            //console.log('edit');
        }
        xmlhttp.open(METHOD, URL, true);       
        xmlhttp.send();

    
}

document.getElementById('btnNew').onclick = resetForm;

function resetForm(){
    setFormData(
        {
            name:'',
            id:0,
            lastname:'',
            age:0
        }
    );
}

</script>

</html>
