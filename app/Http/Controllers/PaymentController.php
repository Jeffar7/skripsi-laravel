<?php

namespace App\Http\Controllers;

use App\Payment;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function notification(Request $request)
    {

        dd($request);

        $payload = $request->getContent();
        $notification = json_decode($payload);

        $validSignatureKey = hash("sha256", $notification->order_id . $notification->status_code . $notification->gross_amount . 'SB-Mid-server-HZY-aOf9nZeHfGbnmua-avk3');

        if ($notification->signature_key != $validSignatureKey) {
            return response(['message' => 'Invalid Siganture'], 403);
        }

        $this->initPaymentGateway();
        $statusCode = null;

        $paymentNotification = new \Midtrans\Notification();
        $transaction = $paymentNotification->transaction_status;
        $type = $paymentNotification->payment_type;
        $orderId = $paymentNotification->order_id;
        $type = $paymentNotification->payment_type;
        $fraud = $paymentNotification->fraud_status;

        $vaNumber = null;
        $vendorName = null;
        if (!empty($paymentNotification->va_numbers[0])) {
            $vaNumber = $paymentNotification->va_numbers[0]->va_number;
            $vendorName = $paymentNotification->va_numbers[0]->bank;
        }

        $paymentStatus = null;
        if ($transaction == 'capture') {
            // For credit card transaction, we need to check whether transaction is challenge by FDS or not
            if ($type == 'credit_card') {
                if ($fraud == 'challenge') {
                    // TODO set payment status in merchant's database to 'Challenge by FDS'
                    // TODO merchant should decide whether this transaction is authorized or not in MAP
                    $paymentStatus = Payment::CHALLENGE;
                } else {
                    // TODO set payment status in merchant's database to 'Success'
                    $paymentStatus = Payment::SUCCESS;
                }
            }
        } else if ($transaction == 'settlement') {
            // TODO set payment status in merchant's database to 'Settlement'
            $paymentStatus = Payment::SETTLEMENT;
        } else if ($transaction == 'pending') {
            // TODO set payment status in merchant's database to 'Pending'
            $paymentStatus = Payment::PENDING;
        } else if ($transaction == 'deny') {
            // TODO set payment status in merchant's database to 'Denied'
            $paymentStatus = PAYMENT::DENY;
        } else if ($transaction == 'expire') {
            // TODO set payment status in merchant's database to 'expire'
            $paymentStatus = PAYMENT::EXPIRE;
        } else if ($transaction == 'cancel') {
            // TODO set payment status in merchant's database to 'Denied'
            $paymentStatus = PAYMENT::CANCEL;
        }

        $paymentParams = [
            'order_id' => session()->get('code'),
            'number' => Payment::generateCode(),
            'amount' => $paymentNotification->gross_amount,
            'method' => 'midtrans',
            'status' => $paymentStatus,
            'token' => $paymentNotification->transaction_id,
            'payloads' => $payload,
            'payment_type' => $paymentNotification->payment_type,
            'va_number' => $vaNumber,
            'vendor_name' => $vendorName,
            'biller_code' => $paymentNotification->biller_code,
            'bill_key' => $paymentNotification->bill_key,
        ];
    }

    public function completed(Request $request)
    {
    }

    public function unfinish(Request $request)
    {
    }

    public function failed(Request $request)
    {
    }
}
