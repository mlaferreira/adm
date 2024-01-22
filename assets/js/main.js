const openLink = document.querySelector('#criar-escala');
const boxEscala = document.querySelector('.form-escala');

openLink.addEventListener('click', (e)=>{
    e.preventDefault();

    
    boxEscala.classList.toggle('close');    
    
   
})


