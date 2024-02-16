<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Exception $e)
    {
        if($this->isHttpException($e))
        {
            switch ($e->getStatusCode())
                {
                // not found
                case 404:
                return redirect()->guest('home');
                break;

                // internal error
                case '500':
                return redirect()->guest('home');
                break;

                default:
                    return $this->renderHttpException($e);
                break;
            }
        }
        else
        {
                return parent::render($request, $e);
        }
    }
}
