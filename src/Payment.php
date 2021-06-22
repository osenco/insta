<?php
namespace Insta;

class Payment extends Service {
  function form() {
    echo '<script src="https://unpkg.com/intasend-inlinejs-sdk@2.0.8/build/intasend-inline.js"></script>
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
