<?php

class Paypal{

    public function __construct(){
        // Your code in here
    }

    public function sendPayment($amount){
        // Paying  via paypal
        echo "Pay via paypal $". $amount;
    }

    public function payAmount($amount){
        // Paying  via paypal
        echo "<p>Pay amount via paypal $". $amount."</p>";
    }
}

// client code 1
// $paypal = new Paypal();
// $paypal->sendPayment(1000);

// Masalah 
/**
 * Beberapa waktu lalu, PayPal mengubah nama metode API dari (sendPayment) menjadi (payAmount)
 * 
 * Ini harus dengan jelas menunjukkan masalah bagi kita yang telah menggunakan sendPaymentmetode ini. Secara khusus, kita perlu mengubah semua  sendPayment pemanggilan metode payAmount. Bayangkan jumlah kode yang perlu kita ubah dan waktu yang perlu kita habiskan untuk menguji setiap fitur sekali lagi.
 */

// Adapter Pattern 
interface paymentAdapter{
    public function pay($amount);
}

class paypalAdapter implements paymentAdapter{
    private $paypal;

    public function __construct(Paypal $paypal){
        $this->paypal = $paypal; 
    }

    public function pay($amount){
        // $this->paypal->sendPayment($amount);
        $this->paypal->payAmount($amount);
    }
}

// Client Code 2
$paypal = new paypalAdapter(new PayPal());
$paypal->pay('2629');

// Concrete Implementation of MoneyBooker Class
class MoneyBooker {

    public function __construct() {
        // Your Code here //
    }

    public function doPayment($amount) {
        // Paying via MoneyBooker //
        echo "<p>Paying via MoneyBooker $".  $amount."</p>";
    }
}

// MoneyBooker Adapter
class moneybookerAdapter implements paymentAdapter {

    private $moneybooker;

    public function __construct(MoneyBooker $moneybooker) {
        $this->moneybooker = $moneybooker;
    }

    public function pay($amount) {
        $this->moneybooker->doPayment($amount);
    }
}

// Client Code 3
$moneybooker = new moneybookerAdapter(new MoneyBooker());
$moneybooker->pay('1000');