<?php

namespace App\Services;

use App\Models\PaymentMethod;

class PaymentMethodService
{
    public function getPaymentMethod(): PaymentMethod
    {
        return new PaymentMethod(
            1,
            'https://webform.bsm.co.id/asset/img/ico.gif',
            'Bank Jago',
            '112233445566',
            'Unity Enterprise',
            'Bank Transfer'
        );
    }
}
