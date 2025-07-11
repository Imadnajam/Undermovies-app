<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
{
    /**
     * The names of the cookies that should not be encrypted.
     *
     * @var array<int, string>
     */
    protected $except = [
        // Add cookie names that should remain unencrypted
        // Examples:
        // 'cookie_consent',
        // 'language_preference', 
        // 'theme_setting',
        // 'analytics_tracking_id',
        // 'shopping_cart_guest_id',
        // 'csrf_token',
        // 'remember_web_session'
    ];

    /**
     * Indicates if cookies should be serialized.
     *
     * @var bool
     */
    protected static $serialize = true;

    /**
     * The names of the cookies that should not be encrypted and should be accessible via JavaScript.
     * These cookies will be excluded from encryption and httpOnly protection.
     *
     * @var array<int, string>
     */
    protected $exceptFromEncryption = [
        // Cookies that need to be read by JavaScript
        // 'js_accessible_preference',
        // 'client_timezone',
        // 'user_interface_state'
    ];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, $next)
    {
        // You can add custom logic here before encryption/decryption
        // For example, logging, validation, etc.
        
        return parent::handle($request, $next);
    }

    /**
     * Decrypt the cookies on the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Request
     */
    protected function decrypt($request)
    {
        // Custom decryption logic can be added here
        // This method is called automatically by the parent middleware
        
        return parent::decrypt($request);
    }

    /**
     * Encrypt the cookies on the outgoing response.
     *
     * @param  \Illuminate\Http\Response  $response
     * @return \Illuminate\Http\Response
     */
    protected function encrypt($response)
    {
        // Custom encryption logic can be added here
        // This method is called automatically by the parent middleware
        
        return parent::encrypt($response);
    }

    /**
     * Determine whether encryption has been disabled for the given cookie.
     *
     * @param  string  $name
     * @return bool
     */
    public function isDisabled($name)
    {
        // Custom logic to determine if a cookie should be encrypted
        // You can add dynamic conditions here
        
        return parent::isDisabled($name);
    }
}

// Example usage in a controller:
/*
class ExampleController extends Controller
{
    public function setCookies()
    {
        // This cookie will be encrypted
        $response = response('Hello World');
        $response->cookie('encrypted_data', 'sensitive_information', 60);
        
        // This cookie will not be encrypted if added to $except array
        $response->cookie('public_preference', 'light_theme', 60);
        
        return $response;
    }
    
    public function getCookies(Request $request)
    {
        // Encrypted cookies are automatically decrypted
        $encryptedData = $request->cookie('encrypted_data');
        $publicPreference = $request->cookie('public_preference');
        
        return response()->json([
            'encrypted' => $encryptedData,
            'public' => $publicPreference
        ]);
    }
}
*/

// Registration in app/Http/Kernel.php:
/*
protected $middlewareGroups = [
    'web' => [
        \App\Http\Middleware\EncryptCookies::class,
        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        \Illuminate\Session\Middleware\StartSession::class,
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
        \App\Http\Middleware\VerifyCsrfToken::class,
        \Illuminate\Routing\Middleware\SubstituteBindings::class,
    ],
    
    'api' => [
        'throttle:api',
        \Illuminate\Routing\Middleware\SubstituteBindings::class,
    ],
];
*/

// Configuration in config/session.php:
/*
return [
    'encrypt' => true, // Enable cookie encryption globally
    'cookie' => env('SESSION_COOKIE', 'laravel_session'),
    'secure' => env('SESSION_SECURE_COOKIE', false),
    'http_only' => true,
    'same_site' => 'lax',
];
*/

// Environment variables in .env:
/*
APP_KEY=base64:your-32-character-secret-key-here
SESSION_SECURE_COOKIE=true  // Set to true for HTTPS
COOKIE_DOMAIN=.yourdomain.com
*/
