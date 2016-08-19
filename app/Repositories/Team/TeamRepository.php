<?php

namespace App\Repositories\Team;

use App\Models\Team;
use App\Repositories\BaseRepository;

class TeamRepository extends BaseRepository
{
    public function __construct(Team  $team)
    {
        $this->model = $team;
    }

    public function paginate($limit)
    {
        return $this->model->paginate($limit);
    }
}
