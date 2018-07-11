<?php

namespace app\http\middleware;

use think\facade\Log;

class Logger
{
    public function handle($request, \Closure $next)
    {
		$input = file_get_contents('php://input');
		
        $t   = microtime(true);
        $ms  = explode('.', $t)[1];
        $log = "\ntime = " . date("Y-m-d H:i:s", $t) .'.' . $ms . PHP_EOL;
		$log.= 'input = ' . var_export($input, true) .PHP_EOL;
		
		Log::write($log, 'test');
		
        return $next($request);
    }
}
