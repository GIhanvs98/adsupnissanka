<?php
/*
 * LaraClassifier - Classified Ads Web Application
 * Copyright (c) BeDigit. All Rights Reserved
 *
 * Website: https://laraclassifier.com
 * Author: BeDigit | https://bedigit.com
 *
 * LICENSE
 * -------
 * This software is furnished under a license and may be used and copied
 * only in accordance with the terms of such license and with the inclusion
 * of the above copyright notice. If you Purchased from CodeCanyon,
 * Please read the full License from here - https://codecanyon.net/licenses/standard
 */

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
	/**
	 * The application's global HTTP middleware stack.
	 *
	 * These middleware are run during every request to your application.
	 *
	 * @var array<int, class-string|string>
	 */
	protected $middleware = [
		// \App\Http\Middleware\TrustHosts::class,
		\App\Http\Middleware\TrustProxies::class,
		\Illuminate\Http\Middleware\HandleCors::class,
		\App\Http\Middleware\PreventRequestsDuringMaintenance::class,
		\Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
		\App\Http\Middleware\TrimStrings::class,
		\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
	];
	
	/**
	 * The application's route middleware groups.
	 *
	 * @var array<string, array<int, class-string|string>>
	 */
	protected $middlewareGroups = [
		'web' => [
			\App\Http\Middleware\EncryptCookies::class,
			\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
			\App\Http\Middleware\StartSessionExtended::class,
			// \Illuminate\Session\Middleware\AuthenticateSession::class,
			\Illuminate\View\Middleware\ShareErrorsFromSession::class,
			\App\Http\Middleware\VerifyCsrfToken::class,
			\Illuminate\Routing\Middleware\SubstituteBindings::class,
			
			\App\Http\Middleware\RequirementsChecker::class,
			\App\Http\Middleware\SetBrowserLocale::class,
			\App\Http\Middleware\SetCountryLocale::class,
			\App\Http\Middleware\SetDefaultLocale::class,
			\App\Http\Middleware\InputRequest::class,
			\App\Http\Middleware\TipsMessages::class,
			\App\Http\Middleware\DemoRestriction::class,
			\App\Http\Middleware\ReferrerChecker::class,
			\App\Http\Middleware\IsVerifiedUser::class,
			\App\Http\Middleware\BannedUser::class,
			\App\Http\Middleware\HttpsProtocol::class,
			\App\Http\Middleware\ResourceHints::class,
			\App\Http\Middleware\LazyLoading::class,
			\App\Http\Middleware\HtmlMinify::class,
		],
		
		'admin' => [
			\App\Http\Middleware\EncryptCookies::class,
			\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
			\App\Http\Middleware\StartSessionExtended::class,
			\Illuminate\View\Middleware\ShareErrorsFromSession::class,
			\App\Http\Middleware\VerifyCsrfToken::class,
			\Illuminate\Routing\Middleware\SubstituteBindings::class,
			
			\App\Http\Middleware\RequirementsChecker::class,
			\App\Http\Middleware\Admin::class,
			\App\Http\Middleware\DemoRestriction::class,
			\App\Http\Middleware\ReferrerChecker::class,
			\App\Http\Middleware\InputRequest::class,
			\App\Http\Middleware\BannedUser::class,
			\App\Http\Middleware\HttpsProtocol::class,
			\App\Http\Middleware\ResourceHints::class,
			\App\Http\Middleware\ScribeUpdater::class,
		],
		
		'api' => [
			\App\Http\Middleware\Installed::class,
			\App\Http\Middleware\VerifyAPIAccess::class,
			\Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
			/*
			 * See the RouteServiceProvider::configureRateLimiting() method
			 */
			\Illuminate\Routing\Middleware\ThrottleRequests::class . ':api',
			\Illuminate\Routing\Middleware\SubstituteBindings::class,
			
			\App\Http\Middleware\RequirementsChecker::class,
			\App\Http\Middleware\IsVerifiedUser::class,
			\App\Http\Middleware\DemoRestriction::class,
			\App\Http\Middleware\LastUserActivity::class,
		],
	];
	
	/**
	 * The application's middleware aliases.
	 *
	 * Aliases may be used to conveniently assign middleware to routes and groups.
	 *
	 * @var array<string, class-string|string>
	 */
	protected $middlewareAliases = [
		'auth'          => \App\Http\Middleware\Authenticate::class,
		'auth.basic'    => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
		'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
		'can'           => \Illuminate\Auth\Middleware\Authorize::class,
		'guest'         => \App\Http\Middleware\RedirectIfAuthenticated::class,
		'signed'        => \Illuminate\Routing\Middleware\ValidateSignature::class,
		'throttle'      => \Illuminate\Routing\Middleware\ThrottleRequests::class,
		'verified'      => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
		'banned.user'   => \App\Http\Middleware\BannedUser::class,
		'install'       => \App\Http\Middleware\Install::class,
		'installed'     => \App\Http\Middleware\Installed::class,
		'clearance'     => \App\Http\Middleware\Clearance::class,
		'no.http.cache' => \App\Http\Middleware\NoHttpCache::class,
		'only.ajax'     => \App\Http\Middleware\OnlyAjax::class,
		'check-guest-ads' => \App\Http\Middleware\CheckGuestAdsMiddleware::class,
	];
	
	/**
	 * The priority-sorted list of middleware.
	 *
	 * This forces non-global middleware to always be in the given order.
	 *
	 * @var array
	 */
	protected $middlewarePriority = [
		\Illuminate\Cookie\Middleware\EncryptCookies::class,
		\App\Http\Middleware\StartSessionExtended::class,
		\Illuminate\View\Middleware\ShareErrorsFromSession::class,
		\App\Http\Middleware\Authenticate::class,
		\Illuminate\Session\Middleware\AuthenticateSession::class,
		\Illuminate\Routing\Middleware\SubstituteBindings::class,
		\Illuminate\Auth\Middleware\Authorize::class,
		\App\Http\Middleware\ReferrerChecker::class,
		\App\Http\Middleware\DemoRestriction::class,
		\App\Http\Middleware\InputRequest::class,
		\App\Http\Middleware\SetBrowserLocale::class,
		\App\Http\Middleware\SetCountryLocale::class,
		\App\Http\Middleware\LazyLoading::class,
		\App\Http\Middleware\ResourceHints::class,
		\App\Http\Middleware\HtmlMinify::class,
	];
}
