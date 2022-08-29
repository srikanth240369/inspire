<?php
namespace Srikanth240369\Inspire\Controllers;

use Illuminate\Http\Request;
use Srikanth240369\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire) {
        $quote = $inspire->justDoIt();
        return $quote;
    }
}