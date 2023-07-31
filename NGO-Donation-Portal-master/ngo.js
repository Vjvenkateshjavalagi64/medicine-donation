function storengoSignup(e){
    //e.preventDefault();
    const ngo_signup={
        name:signup.ngoName.value,
        phone:signup.Contact.value,
        email:signup.Email.value,
        location:signup.Location.value,
        password1:signup.Password.value,

    }
    console.log(ngo_signup);

}
signup.addEventListener('submit',storengoSignup);
