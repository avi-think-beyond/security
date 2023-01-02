#cross site scripting  X-XSS-Protection
header('X-Frame-Options: DENY');
#.Content Security Policy (CSP)
header("Content-Security-Policy: frame-ancestors 'none'");


#all require security headers
header('X-Frame-Options: DENY');
header("Content-Security-Policy: frame-ancestors 'none'");
header("Strict-Transport-Security: max-age=63072000; includeSubDomains; preload");
header("X-Content-Type-Options: nosniff");
header("Referrer-Policy: no-referrer-when-downgrade");
header("Permissions-Policy: self");
