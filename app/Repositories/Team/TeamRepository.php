<?php

namespace App\Repositories\Team;

use App\Repositories\BaseRepository;

class TeamRepository extends BaseRepository
{
    public function __construct(Team $user)
    {
        $this->model = $user;
    }
}
