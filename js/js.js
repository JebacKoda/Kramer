//Add a JQuery click event handler onto our checkbox.
$('#terms_and_conditions').click(function(){
    //If the checkbox is checked.
    if($(this).is(':checked')){
        //Enable the submit button.
        $('#submit_button').attr("disabled", false);
    } else{
        //If it is not checked, disable the button.
        $('#submit_button').attr("disabled", true);
    }
});