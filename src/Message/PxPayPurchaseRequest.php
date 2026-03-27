<?php

namespace Omnipay\PaymentExpress\Message;

/**
 * PaymentExpress PxPay Purchase Request
 */
class PxPayPurchaseRequest extends PxPayAuthorizeRequest
{
    protected $action = 'Purchase';

    public function getAction()
    {
        return $this->getParameter('action');
    }

    public function setAction($value)
    {
        return $this->setParameter('action', $value);
    }

    public function getRecurringMode()
    {
        return $this->getParameter('recurringMode');
    }

    public function setRecurringMode($value)
    {
        return $this->setParameter('recurringMode', $value);
    }

    public function getData()
    {
        $this->setAmount($this->getAmount() ? $this->getAmount() : '1.00');

        if ($this->getAction()) {
            $this->action = $this->getAction();
        }

        $data = parent::getData();

        if ($this->getRecurringMode()) {
            $data->RecurringMode = $this->getRecurringMode();
        }

        return $data;
    }
}
