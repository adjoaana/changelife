const submitButton = document.querySelector("#button")
const input = document.querySelectorAll("input");

submitButton.addEventListener('click', (e)=>{
    if(input === ''){
        console.log('Put in some details')
    }
})