<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'role' => \Spatie\Permission\Middleware\RoleMiddleware::class,
            'permission' => \Spatie\Permission\Middleware\PermissionMiddleware::class,
            'role_or_permission' => \Spatie\Permission\Middleware\RoleOrPermissionMiddleware::class,
            'role.redirect' => \App\Http\Middleware\RedirectIfHasRole::class,
            'Admin_Utama' => \App\Http\Middleware\Admin::class,
            'Manajer_Toko' => \App\Http\Middleware\Manager::class,
            'Supervisor' => \App\Http\Middleware\Supervisor::class,
            'Pegawai_Gudang' => \App\Http\Middleware\Gudang::class,
            'Kasir'=> \App\Http\Middleware\Kasir::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
