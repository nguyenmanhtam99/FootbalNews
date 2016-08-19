<?php

namespace App\Repositories\Country;

use App\Models\Country;

use App\Repositories\BaseRepository;
use Auth;

class CountryRepository extends BaseRepository
{
    public function __construct(Country $contry)
    {
        $this->model = $contry;
    }

    public function lists($column, $key = null)
    {
        return $this->model->lists($column, $key);
    }
}