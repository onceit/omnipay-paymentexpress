<?php

namespace Omnipay\PaymentExpress\Message;

/**
 * PaymentExpress PxPay Purchase Request
 */
class PxPayCVCCaptureRequest extends PxPayAuthorizeRequest
{
    protected $action = 'CVCCapture';
}
