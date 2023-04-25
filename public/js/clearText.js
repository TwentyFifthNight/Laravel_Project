const textArea = document.getElementById('textArea');

const btn = document.getElementById('cancel');

btn.addEventListener('click',function handleClick(){
   textArea.value = ''; 
});