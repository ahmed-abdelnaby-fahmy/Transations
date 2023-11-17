<?php

namespace App\Traits;

use Carbon\Carbon;

trait DateFormattingTrait
{

    protected function formatDateColumn($value, $column)
    {
        if (in_array($column, $this->dates??[])&&!empty($value)) {
            return Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('Y-m-d H:i:s');
        }
        return $value;
    }

    public function getAttribute($key)
    {
        $value = parent::getAttribute($key);
        return $this->formatDateColumn($value, $key);
    }
}
