<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Services\PaymentMethodService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\View\View;

class TransactionController extends Controller
{
    /** @var PaymentMethodService */
    protected PaymentMethodService $paymentMethodService;

    public function __construct(PaymentMethodService $paymentMethodService)
    {
        $this->paymentMethodService = $paymentMethodService;
    }

    public function show(string $code): View
    {
        if (Auth::check()) {
            /** @var Transaction $transaction */
            $transaction = Transaction::with(['campaign'])
                ->where('code', $code)
                ->where('user_id', Auth::id())
                ->firstOrFail();

            $paymentMethod = $this->paymentMethodService->getPaymentMethod();

            return view('transactions.show', [
                'transaction' => $transaction,
                'paymentMethod' => $paymentMethod,
            ]);
        }

        /** @var string */
        $cookie = Cookie::get('transactionCodes');

        abort_if(!$cookie, 404);

        /** @var Transaction $transaction */
        $transaction = Transaction::with(['campaign'])
            ->where('code', $code)
            ->firstOrFail();

        /** @var array */
        $transactionCodes = json_decode($cookie);

        abort_if(!in_array($transaction->code, $transactionCodes), 404);

        $paymentMethod = $this->paymentMethodService->getPaymentMethod();

        return view('transactions.show', [
            'transaction' => $transaction,
            'paymentMethod' => $paymentMethod,
        ]);
    }
}
