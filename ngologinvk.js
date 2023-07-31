const  ngoform=document.getElementById("ngoform");
function storengoDetails(e){
    e.preventDefault();
    const ngo={
        name:ngoform.name.value,
        password:ngoform.password.value
    }
    console.log(ngo);
}


ngoform.addEventListener('submit',storengoDetails);