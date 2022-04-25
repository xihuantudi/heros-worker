<?php
/**
 * This file is part of monda-worker.
 *
 * @contact  mondagroup_php@163.com
 *
 */
namespace framework\annotations;

/**
 * @Annotation
 * @Target({"CLASS"})
 * Class Validator
 */
class Validator
{
    public $class = '';

    public $scene = '';
}
