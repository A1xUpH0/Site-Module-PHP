document.getElementById("formMess").addEventListener('submit',function(e) {
    e.preventDefault();

    var Error;
    var FirstName = document.getElementById("FirstName");
    var LastName = document.getElementById("LastName");
    var Email = document.getElementById("Email");
    var Message = document.getElementById("Message");

    if (!FirstName.value) {
        Error = "Please enter a First Name"
    }
    else if (!LastName.value) {
        Error = "Please enter a Last Name"
    }
    else if (!Email.value) {
        Error = "Please enter an Email"
    }
    else if (!Message.value) {
        Error = "Please enter a Message"
    }
    else{
        Error = "Hello " + FirstName.value + " " + LastName.value +  "\nForm Send !"
    }

    alert(Error)
})