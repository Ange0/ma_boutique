var stripe = Stripe('pk_test_51HdbNoIvcdlShppO4SJP9Z8KgbPMglxzUMtB9Dm2i4XzpGeOPsVoy703ViJs1yApwSXihnCwpyOXjbvA00lazyS800guxVXZAA');

var elements = stripe.elements();

var style = {
    base: {
        color: "#32325d",
        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
        fontSmoothing: "antialiased",
        fontSize: "16px",
        "::placeholder": {
            color: "#aab7c4"
        }
    },
    invalid: {
        color: "#fa755a",
        iconColor: "#fa755a"
    }
};

var card = elements.create("card", {
    style: style
});
var displayError = document.getElementById('card-errors');

card.mount("#card-element");
card.on('change', function(event) {

    if (event.error) {
       /*  displayError.classList.add('alert', 'alert-warning'); */
        displayError.textContent = event.error.message;

    } else {
       /*  displayError.classList.remove('alert', 'alert-warning'); */
        displayError.textContent = '';
    }
});


var form = document.getElementById('payment-form');

form.addEventListener('submit', function(ev) {
    ev.preventDefault();
    // If the client secret was rendered server-side as a data-secret attribute
    // on the <form> element, you can retrieve it here by calling `form.dataset.secret`
    stripe.confirmCardPayment("{{ $client_secret }}", {
        payment_method: {
            card: card,
        }
    }).then(function(result) {
        if (result.error) {
            // Show error to your customer (e.g., insufficient funds)
            console.log(result.error.message);
           

        } else {
            // The payment has been processed!
            if (result.paymentIntent.status === 'succeeded') {
                // Show a success message to your customer
                // There's a risk of the customer closing the window before callback
                // execution. Set up a webhook or plugin to listen for the
                // payment_intent.succeeded event that handles any business critical
                // post-payment actions.

                console.log(result.paymentIntent);
            }
        }
    });
});
