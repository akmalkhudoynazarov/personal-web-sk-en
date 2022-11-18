<?php

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $service = $_POST["service"];
    $message = $_POST["message"];

    $errorEmpty = false;
    $errorEmail = false;

    if (empty($name) || empty($email) || empty($service)) {
        echo "<span class='error'>Vyplňte všetky polia!</span>";
        $errorEmpty = true;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<span class='error'>Zadajte platný e-mail!</span>";
        $errorEmail = true;
    } else {
        $mailTo = "info@digitalweb.sk";
        $headers = "From: " . $email;
        $txt = "Sender: " . $name . ".\n\n" . "Message: " . $message;
        mail($mailTo, $service, $txt, $headers);
        echo "<span class='success'>Správa bola úspešne odoslaná!</span>";
    }
} else {
    echo "Vyskytla sa chyba. Prosím skúste znova!";
}
?>

<script>
    $("#name, #email, #service").removeClass("input-error-error");

    var errorEmpty = "<?php echo $errorEmpty; ?>";
    var errorEmail = "<?php echo $errorEmail; ?>";

    if (errorEmpty == true) {
        $("#name, #email, #service").addClass("input-error");
    }
    if (errorEmail == true) {
        $("#email").addClass("input-error");
    }
    if (errorEmpty == false && errorEmail == false) {
        $("#name, #email, #service, #message").val("");
    }
</script>