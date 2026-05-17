<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ManualOrderInvoice extends Mailable
{
    use Queueable, SerializesModels;

    public $order;

    public function __construct($order)
    {
        $this->order = $order;
    }

    public function build()
    {
        return $this->subject('CakePlaza Manual Order Number - #' . $this->order->id)
                    ->view('website.manual_order_invoice')
                    ->with(['order' => $this->order]);
    }
}
