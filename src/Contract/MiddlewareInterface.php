<?php
declare(strict_types=1);
/**
 * This file is part of monda-worker.
 *
 * @contact  mondagroup_php@163.com
 *
 */
namespace Framework\Contract;

use Framework\Http\Request;
use Framework\Http\Response;

/**
 * 中间件
 */
interface MiddlewareInterface
{
    /**
     * Process an incoming server request.
     *
     * Processes an incoming server request in order to produce a response.
     * If unable to produce the response itself, it may delegate to the provided
     * request handler to do so.
     * @param Request $request httpRequest
     * @param callable $handler 闭包
     */
    public function process(Request $request, callable $handler);
}
