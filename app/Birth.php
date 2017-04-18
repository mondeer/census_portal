<?php

namespace census;

use Illuminate\Database\Eloquent\Model;

class Birth extends Model
{
    protected $fillable =['birthcert', 'f_name', 'm_name', 'l_name', 'district_of_birth', 'constituency', 'location', 'ward', 'dob', 'gender', 'name_of_father', 'name_of_mother'];
}
