const donate_form=document.getElementById('donate-form');

function storeDonateData(e){
  //  e.preventDefault();
    const donate_data={
      Mname:donate_form.Mname.value,
      Mquantity:donate_form.Mquantity.value,
        emaMdateil:donate_form.Mdate.value,
        MLoaction:donate_form.MLoaction.value,
    }
    console.log(donate_data);
}

donate_form.addEventListener('submit',storeDonateData);