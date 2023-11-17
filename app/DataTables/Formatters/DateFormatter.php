<?php

namespace App\DataTables\Formatters;

use Carbon\Carbon;
use DateTime;
use Yajra\DataTables\Contracts\Formatter;

class DateFormatter implements Formatter
{
    /**
     * @var string
     */
    public $format;

    public function __construct($format = 'Y-m-d h:m:s')
    {
        $this->format = $format;
    }

    public function format($value, $row)
    {
        if ($value instanceof DateTime) {
            return $value->format($this->format);
        }

        return $value ? Carbon::parse($value)->format($this->format) : '';
    }
}
