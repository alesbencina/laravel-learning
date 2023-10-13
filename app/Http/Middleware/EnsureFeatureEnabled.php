<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureFeatureEnabled {

  /**
   * Handle an incoming request.
   *
   * @param \Illuminate\Http\Request $request
   *   The incoming request.
   * @param \Closure $next
   *   The clojure function.
   * @param string $feature
   *   The feature name.
   *
   * @return \Symfony\Component\HttpFoundation\Response
   */
  public function handle(Request $request, Closure $next, $feature = NULL) {
    if ($feature && !config("features.$feature")) {
      return response()->json(['error' => 'This feature is currently disabled.'], 403);
    }
    return $next($request);
  }

}
