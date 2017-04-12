<?php

namespace census;

use Illuminate\Database\Eloquent\Model;

class Birth extends Model
{
    protected $fillable =['birthcert', 'names', 'constituency', 'location', 'ward', 'dob', 'gender', 'name_of_father', 'name_of_mother'];
}
