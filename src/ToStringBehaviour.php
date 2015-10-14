<?php

/**
 * This file is part of the propel-default-order-behavior package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license GPLv2
 */

namespace Weconstudio\Propel\Behavior\ToString;

use Propel\Generator\Model\Behavior;

/**
 * Sets the default order for tables
 *
 * @author Alessandro Cabutto
 */
public class ToStringBehaviour extends Behavior {


    // default parameters value

    protected $parameters = array(
        'columns' => null,
    );
}
