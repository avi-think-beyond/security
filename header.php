#cross site scripting  X-XSS-Protection
header('X-Frame-Options: DENY');
#.Content Security Policy (CSP)
header("Content-Security-Policy: frame-ancestors 'none'");
