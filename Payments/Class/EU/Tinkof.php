<?php
namespace Payments\Class\EU;

use Payments\Abstract\PaymentsEU;

class Tinkof extends PaymentsEU
{
    public const API_KEY = 'zdxfajsdkhfoqkweghipofqvu';

    /**
     * Это ПЕРЕГРУЗКА
     * @param array $data
     * @return $this
     */
    public function setData(array $data): static
    {
        $this->data = $data;
        return $this;
    }
}

