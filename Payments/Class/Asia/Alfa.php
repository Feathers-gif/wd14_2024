<?php

namespace Payments\Class\Asia;

use Payments\Abstract\PaymentsAsia;

class Alfa extends PaymentsAsia
{
    public const API_KEY = 'zdxfajsdkhfoqkweghipofqvu';

    public function validation($data): bool
    {
        // TODO: Implement validation() method.
        return false;
    }
}