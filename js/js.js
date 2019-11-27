$.ajax({
    type: "POST",
    url: "bin/process.php",
    data: dataString,
    success: function() {
        //display message back to user here
    }
});
return false;