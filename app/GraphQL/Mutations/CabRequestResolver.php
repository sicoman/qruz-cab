<?php

namespace App\GraphQL\Mutations;

use App\Repository\Eloquent\Mutations\CabRequestRepository;

class CabRequestResolver
{
    private $cabRequestRepository;

    public function __construct(CabRequestRepository $cabRequestRepository)
    {
        $this->cabRequestRepository = $cabRequestRepository;
    }

    public function search($_, array $args)
    {
        return $this->cabRequestRepository->search($args);
    }

    public function accept($_, array $args)
    {
        return $this->cabRequestRepository->accept($args);
    }

    public function arrived($_, array $args)
    {
        return $this->cabRequestRepository->arrived($args);
    }

    public function start($_, array $args)
    {
        return $this->cabRequestRepository->start($args);
    }

    public function end($_, array $args)
    {
        return $this->cabRequestRepository->end($args);
    }

    public function cancel($_, array $args)
    {
        return $this->cabRequestRepository->cancel($args);
    }
}