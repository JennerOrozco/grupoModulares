<script>
    function validateFormContact(variable) {
        let name = document.getElementById("name").value;
        let email = document.getElementById("email").value;
        let phone = document.getElementById("phone").value;
        let message = document.getElementById("message").value;
        let subject = document.getElementById("subject").value;

        $.ajax({
            type: "POST",
            url: "./api/req/email/sendMailContact.php",
            data: JSON.stringify({
                name: name,
                email: email,
                phone: phone,
                subject: subject,
                message: message
            }),
            success: function(params) {
                if (params.status) {
                    window.location.reload()
                }
            }
        });
        return false
    }
</script>