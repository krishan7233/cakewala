<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QueryFormInvoice extends Mailable
{
    use Queueable, SerializesModels;

    public $query;
    public function __construct($query)
    {
        $this->query = $query;
    }

    public function build()
    {
        return $this->subject('CakePlaza Query Data - #' . $this->query->id)
                    ->view('website.query_invoice')
                    ->with(['query' => $this->query]);
    }
}
