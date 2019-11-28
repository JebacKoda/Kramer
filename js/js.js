//Add a JQuery click event handler onto our checkbox.
$('#check').click(function(){
    //If the checkbox is checked.
    if($(this).is(':checked')){
        //Enable the submit button.
        $('#tlacitko1').attr("disabled", false);
    } else{
        //If it is not checked, disable the button.
        $('#tlacitko1').attr("disabled", true);
    }
});