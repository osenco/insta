<?php
namespace Insta;

class Payment extends Service {
  function form() {
    echo '<button class="tp_button" data-api_ref="payment-link" data-phone_number="254xxxxxxxx"
        data-email="user@example.com" data-amount="100" data-currency="KES">
        Pay Now
    </button>
    <script src="https://unpkg.com/intasend-inlinejs-sdk@2.0.8/build/intasend-inline.js"></script>
    <script>
        window.IntaSend.setup({
            publicAPIKey: "<YOUR-ACCOUNT-PUBLIC-KEY>",
            // Optional URL to redirect your clients after payment
            redirectURL: "http://example.com", 
            // Set live to false for sandbox environment
            live: true
        })
    </script>';
  }
}
