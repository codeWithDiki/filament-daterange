<?php

namespace Codewithdiki\FilamentDaterange\Forms;

use Filament\Forms\Components\Field;

class DateRange extends Field
{

    protected string $opens = "left";

    protected string $date_format = "YYYY-MM-DD";

    protected string $date_separator_format = "-";

    protected string $view = "filament-daterange::components.forms.date-range";

    public function opens(string $open = "left") : static
    {
        $this->opens = $open;

        return $this;
    }

    public function getOpen() : string
    {
        return $this->opens;
    }

    public function dateFormat(string $date_format = "YYYY-MM-DD") : static
    {
        $this->date_format = $date_format;

        return $this;
    }

    public function getDateFormat() : string
    {
        return $this->date_format;
    }

    public function dateSeparatorFormat(string $separator = "-") : static
    {
        $this->date_separator_format = $separator;

        return $this;
    }

    public function getDateSeparatorFormat() : string
    {
        return $this->date_separator_format;
    }
}