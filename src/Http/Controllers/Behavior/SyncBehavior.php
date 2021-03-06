<?php

namespace Recca0120\LaravelPayum\Http\Controllers\Behavior;

use Illuminate\Http\Request;
use Recca0120\LaravelPayum\Service\PayumService;

trait SyncBehavior
{
    /**
     * sync.
     *
     * @method sync
     *
     * @param \Recca0120\LaravelPayum\Service\Payum $payumService
     * @param \Illuminate\Http\Request              $request
     * @param string                                $payumToken
     *
     * @return mixed
     */
    public function sync(PayumService $payumService, Request $request, $payumToken)
    {
        return $payumService->receiveSync($request, $payumToken);
    }
}
