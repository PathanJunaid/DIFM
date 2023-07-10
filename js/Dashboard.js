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
function Submit(i,pkey){
    let id  = tr[i];
    let td = tr[i].getElementsByTagName('td');
    let table_id = 'Table_'+pkey
    let table_data = document.getElementById(table_id);
    let inputs = table_data.getElementsByTagName('input');
    console.log(document.getElementById(`confirm_${pkey}`))
    document.getElementById(`confirm_${pkey}`).classList.add('d-block')
    document.getElementById(`confirm_${pkey}`).classList.remove('d-none')
    for(var i=0 ;i<4;i++){
        let val = td[i].getElementsByTagName('input')[0].value;
        td[i].getElementsByTagName('input')[0].value=val;
        td[i].getElementsByTagName('input')[0].disabled=true;
        inputs[i].value=val;
    }
}

// View Button Function 
function View(data){
    data.classList.add("posi");
    data.classList.add("position-fixed");
    data.classList.add("show");
    data.classList.remove("d-none")  
    data.classList.remove("hidden") 
    
}
function Login_Page_onclick(event) {
    event.cancelBubble = true; if (event.stopPropagation) event.stopPropagation();
}
// Cancel View Button Modal 

function Cancel(){
    let Data_class = document.querySelectorAll('.Data')
    for(key in Data_class){
        if(Data_class[key].classList.contains('posi')){
            Data_class[key].classList.remove("position-fixed");
            Data_class[key].classList.remove("show");
            Data_class[key].classList.remove("posi");
            Data_class[key].classList.add("d-none");
            Data_class[key].classList.add("hidden");
            break;    
        }
    }
    let confirm_button = document.querySelectorAll('.confirm');
    console.log(confirm_button.length)
    for(let i=0;i<confirm_button.length;i++){
        if(confirm_button[i].classList.contains('d-block')){
            console.log(confirm_button[i]);
            confirm_button[i].classList.remove('d-block');
            confirm_button[i].classList.add('d-none');
        }
    }
    // console.log(confirm_button);
}

// Delete table data 


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