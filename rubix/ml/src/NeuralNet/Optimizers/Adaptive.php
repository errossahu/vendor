<?php

namespace Rubix\ML\NeuralNet\Optimizers;

use Rubix\ML\NeuralNet\Parameter;

interface Adaptive extends Optimizer
{
    /**
     * Warm the parameter cache.
     *
     * @param \Rubix\ML\NeuralNet\Parameter $param
     */
    public function warm(Parameter $param) : void;
}
