<?php

namespace ConfrariaWeb\TemplateColugo\Models;

use Illuminate\Database\Eloquent\Model;

class TemplateColugo extends Model
{
    public function template()
    {
        return $this->morphOne('ConfrariaWeb\Template\Models\Template', 'templateable');
    }
}
