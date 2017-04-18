<?php

namespace census;

use Illuminate\Database\Eloquent\Model;

class Adult extends Model
{
    protected $fillable = ['birthcert', 'national_id', 'f_name', 'm_name', 'l_name', 'district_of_birth', 'constituency', 'ward', 'location', 'dob', 'gender', 'name_of_father', 'name_of_mother'];
}
