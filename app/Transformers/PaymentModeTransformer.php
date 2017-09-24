<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\PaymentMode;

/**
 * Class PaymentModeTransformer
 * @package namespace App\Transformers;
 */
class PaymentModeTransformer extends TransformerAbstract
{

    /**
     * Transform the \PaymentMode entity
     * @param \PaymentMode $model
     *
     * @return array
     */
    public function transform(PaymentMode $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
