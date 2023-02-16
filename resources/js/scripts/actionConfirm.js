const submitBtn = document.querySelector('form button');

submitBtn.addEventListener('click', (event)=>{
    const userConfirm = confirm('are you sure?');
    if(!userConfirm){
        //se l'utente non conferma l'evento viene bloccato
        event.preventDefault();
    }
})