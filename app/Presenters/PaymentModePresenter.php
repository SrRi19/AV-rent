<?php

namespace App\Presenters;

use App\Transformers\PaymentModeTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class PaymentModePresenter
 *
 * @package namespace App\Presenters;
 */
class PaymentModePresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PaymentModeTransformer();
    }
}
