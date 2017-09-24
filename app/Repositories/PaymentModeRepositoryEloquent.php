<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\PaymentModeRepository;
use App\Entities\PaymentMode;
use App\Validators\PaymentModeValidator;

/**
 * Class PaymentModeRepositoryEloquent
 * @package namespace App\Repositories;
 */
class PaymentModeRepositoryEloquent extends BaseRepository implements PaymentModeRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return PaymentMode::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return PaymentModeValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
