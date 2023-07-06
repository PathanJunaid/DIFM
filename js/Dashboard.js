// Main Table Data 

var id1 = document.getElementById('Table1');
var tr = id1.getElementsByTagName("tr");

// Edit Button 
function Edit(key){
    let id  = tr[key];
    let td = tr[key].getElementsByTagName('td');
    for(var i=0 ;i<4;i++){
        td[i].getElementsByTagName('input')[0].removeAttribute("disabled")
    }
}
// Submit Button 
function Submit(key){
    let id  = tr[key];
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

// View Button Function 
function View(val){
    let data = document.querySelector(`#${val}`)
    data.classList.add("posi");
    data.classList.remove("d-none")  
    
}
function Login_Page_onclick(event) {
    event.cancelBubble = true; if (event.stopPropagation) event.stopPropagation();
}
// Cancel View Button Modal 

function Cancel(){
    let Data_class = document.querySelectorAll('.Data')
    for(key in Data_class){
        if(Data_class[key].classList.contains('posi')){
            Data_class[key].classList.remove("posi");
            Data_class[key].classList.add("d-none");
            break;
            
        }
    }  
}

// Delete table data 

function Trash(val){
    let id=document.querySelector(`#${val}`)
    id.classList.add('d-none')
}

function mouseover_tr(val){
    var td = tr[val].getElementsByTagName('td');
    for(let i=0;i<4;i++){
        var inp = td[i].getElementsByTagName('input')[0];
        inp.style.background="rgba(255,255,255,.1)";
    }
    }
function mouseleave_tr(val){
    var td = tr[val].getElementsByTagName('td');
    for(let i=0;i<4;i++){
        var inp = td[i].getElementsByTagName('input')[0];
        inp.style.background="#fff";
    }
    }