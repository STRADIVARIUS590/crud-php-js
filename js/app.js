
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
