const form = document.querySelector('#form');
var input = document.querySelector('#taskInput');
const task_list = document.querySelector('#taks-list');
const tachado = document.querySelector('.task');

form.addEventListener('submit', addTask);



function addTask(e){
    e.preventDefault();
    if(input.value === ""){
        input.style.border = "1px solid red";
        console.log("campo vacio");
        return;
    }else{
        input.style.border = "1px solid black";
        const task = document.createElement("li");
        task.className = "task";
        task.innerText = input.value;
        task_list.appendChild(task);
        input.value = "";
    }
}


