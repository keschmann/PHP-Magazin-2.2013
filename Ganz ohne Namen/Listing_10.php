function memoize(&$func) {  $memory = array();  $func = function() use (&$memory, $func) {    $args = func_get_args();    $key  = md5(serialize($args));    if (!array_key_exists($key, $memory)) {      $memory[$key] = call_user_func_array($func, $args);    }    return $memory[$key];  };}