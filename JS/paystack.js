// PAYMENT FUNCTION
function payWithPaystack() {

    //preventDefault();

    let handler = PaystackPop.setup({
        key: 'pk_live_bd5356607a881f3a0d6843b75d3172b74b9675cd', // Replace with your public key
        email: document.getElementById("email").value,
        amount: document.getElementById("amount").value * 100,
        currency: 'GHS',
        //ref: 'YOUR_REFERENCE', // Replace with a reference you generated
        onClose: function () {
            alert('Transaction was not completed, Window closed.');
        },
        callback: function (response) {

            // send email, amount and reference to our server using AJAX
            $.ajax({
                url: '../Actions/payment_proc.php?reference=' + response.reference,
                method: "get",
                data: { 'email': document.getElementById("email").value, 'amount': document.getElementById("amount").value, 'reference': response.reference },
                success: function (response) {
                    alert(response)
                },
                error: function (error) {
                    alert('error')
                }
            });
        },
    });
    handler.openIframe();
}
