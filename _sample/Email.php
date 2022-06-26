<?php
    
    if(isset($_POST['submit'])){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $userEmail = $_POST['email'];
        $userZipCode = $_POST['zipCode'];    

        $mailTo = "jcool5848@gmail.com";
        $headers = "From: ".$userEmail;
        $txt = "You have a message ".$firstName".\n\n".$lastName;

        mail($userEmail, $firstName, $lastName, $headers);

        header("Location: Thank you page.html?MessageSent");

    }
    

?>
<script type="text/javascript">
document.addEventListener( "submit", function( event ) {
    location = 'http://jelaniclarke.com/Thank you page.html/';
}, false );
</script>