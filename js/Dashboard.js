var id1 = document.getElementById('Table1');
var tr = id1.getElementsByTagName("tr");


function Edit(key){
    let id  = tr[key];
    console.log(id)
    let td = tr[key].getElementsByTagName('td');
    for(var i=0 ;i<4;i++){
        console.log(td[i].getElementsByTagName('input')[0].removeAttribute("disabled"));
    }
}
function Submit(key){
    let id  = tr[key];
    console.log(id)
    let td = tr[key].getElementsByTagName('td');
    let table_data = document.getElementById(`table_data_${key}`);
    let table_data_td = table_data.getElementsByTagName("tr")[0].getElementsByTagName("td");

    for(var i=0 ;i<4;i++){
        let val = td[i].getElementsByTagName('input')[0].value;
        td[i].getElementsByTagName('input')[0].value=val;
        table_data_td[i].innerHTML=val;
        td[i].getElementsByTagName('input')[0].disabled=true;
    }
}
function View(val){
    let data = document.querySelector(`#${val}`)
    data.classList.add("position-fixed");
    data.classList.remove("d-none")
    console.log(val)
    
}
function Cancel(){
    let Data_class = document.querySelectorAll('.Data')
    for(key in Data_class){
        if(Data_class[key].classList.contains('position-fixed')){
            Data_class[key].classList.remove("position-fixed");
            Data_class[key].classList.add("d-none");
            break;
            
        }
    }  
}
function Trash(val){
    let id=document.querySelector(`#${val}`)
    id.classList.add('d-none')
    console.log(id);
}

