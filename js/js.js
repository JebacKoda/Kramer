function terms_changed(termsCheckBox){
    //If the checkbox has been checked
    if(termsCheckBox.checked){
        //Set the disabled property to FALSE and enable the button.
        document.getElementsByClassName("tlacitko1").disabled = false;
    } else{
        //Otherwise, disable the submit button.
        document.getElementsByClassName("tlacitko1").disabled = true;
    }
}