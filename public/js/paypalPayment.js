paypal.Buttons({
    createOrder: function(data,actions){
        return actions.order.create({
            purchase_units: [{
                amount: {
                    value: prices
                },
            },
        ],
        })
    },
    onApprove: function (data, actions){
        return actions.order.capture().then(function (details){
            console.log(details='Payment succseed');
            if(details == 'Payment succseed'){
                console.log(sessionStorage.getItem('FlightBookingInfo'));
                console.log('yep');
            }

        })
    }
})
.render("#paypal")

