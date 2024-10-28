<?php

declare(strict_types=1);

use Monolog\Formatter\JsonFormatter;
use Monolog\Handler\NullHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\SyslogUdpHandler;
use Monolog\Processor\PsrLogMessageProcessor;
use Premierstacks\LaravelStack\Config\Env;
use Premierstacks\PhpStack\Mixed\Filter;

$env = Env::inject();

return [
    /*
    |--------------------------------------------------------------------------
    | Default Log Channel
    |--------------------------------------------------------------------------
    |
    | This option defines the default log channel that is utilized to write
    | messages to your logs. The value provided here should match one of
    | the channels present in the list of "channels" configured below.
    |
    */

    'default' => Filter::string($env->get('LOG_CHANNEL', 'stack')),

    /*
    |--------------------------------------------------------------------------
    | Deprecations Log Channel
    |--------------------------------------------------------------------------
    |
    | This option controls the log channel that should be used to log warnings
    | regarding deprecated PHP and library features. This allows you to get
    | your application ready for upcoming major versions of dependencies.
    |
    */

    'deprecations' => [
        'channel' => Filter::string($env->get('LOG_DEPRECATIONS_CHANNEL', 'off')),
        'trace' => Filter::bool($env->get('LOG_DEPRECATIONS_TRACE', false)),
    ],

    /*
    |--------------------------------------------------------------------------
    | Log Channels
    |--------------------------------------------------------------------------
    |
    | Here you may configure the log channels for your application. Laravel
    | utilizes the Monolog PHP logging library, which includes a variety
    | of powerful log handlers and formatters that you're free to use.
    |
    | Available drivers: "single", "daily", "slack", "syslog",
    |                    "errorlog", "monolog", "custom", "stack"
    |
    */

    'channels' => [
        'stack' => [
            'driver' => 'stack',
            'channels' => \explode(',', Filter::string($env->get('LOG_STACK', 'single'))),
            'ignore_exceptions' => false,
            'formatter' => JsonFormatter::class,
        ],

        'single' => [
            'driver' => 'single',
            'path' => \storage_path('logs/laravel.log'),
            'level' => Filter::string($env->get('LOG_LEVEL', 'debug')),
            'replace_placeholders' => true,
            'formatter' => JsonFormatter::class,
        ],

        'daily' => [
            'driver' => 'daily',
            'path' => \storage_path('logs/laravel.log'),
            'level' => Filter::string($env->get('LOG_LEVEL', 'debug')),
            'days' => Filter::int($env->get('LOG_DAILY_DAYS', 14)),
            'replace_placeholders' => true,
            'formatter' => JsonFormatter::class,
        ],

        'slack' => [
            'driver' => 'slack',
            'url' => Filter::nullableString($env->get('LOG_SLACK_WEBHOOK_URL', null)),
            'username' => Filter::string($env->get('LOG_SLACK_USERNAME', 'Laravel Log')),
            'emoji' => Filter::string($env->get('LOG_SLACK_EMOJI', ':boom:')),
            'level' => Filter::string($env->get('LOG_LEVEL', 'critical')),
            'replace_placeholders' => true,
        ],

        'papertrail' => [
            'driver' => 'monolog',
            'level' => Filter::string($env->get('LOG_LEVEL', 'debug')),
            'handler' => Filter::string($env->get('LOG_PAPERTRAIL_HANDLER', SyslogUdpHandler::class)),
            'handler_with' => [
                'host' => Filter::nullableString($env->get('PAPERTRAIL_URL', null)),
                'port' => Filter::nullableString($env->get('PAPERTRAIL_PORT', null)),
                'connectionString' => 'tls://' . Filter::nullableString($env->get('PAPERTRAIL_URL', null)) . ':' . Filter::nullableString($env->get('PAPERTRAIL_PORT', null)),
            ],
            'processors' => [PsrLogMessageProcessor::class],
        ],

        'stderr' => [
            'driver' => 'monolog',
            'level' => Filter::string($env->get('LOG_LEVEL', 'debug')),
            'handler' => StreamHandler::class,
            'formatter' => Filter::nullableString($env->get('LOG_STDERR_FORMATTER', null)),
            'with' => [
                'stream' => 'php://stderr',
            ],
            'processors' => [PsrLogMessageProcessor::class],
        ],

        'syslog' => [
            'driver' => 'syslog',
            'level' => Filter::string($env->get('LOG_LEVEL', 'debug')),
            'facility' => Filter::int($env->get('LOG_SYSLOG_FACILITY', \LOG_USER)),
            'replace_placeholders' => true,
        ],

        'errorlog' => [
            'driver' => 'errorlog',
            'level' => Filter::string($env->get('LOG_LEVEL', 'debug')),
            'replace_placeholders' => true,
        ],

        'null' => [
            'driver' => 'monolog',
            'handler' => NullHandler::class,
        ],

        'off' => [
            'driver' => 'monolog',
            'handler' => NullHandler::class,
        ],

        'emergency' => [
            'path' => \storage_path('logs/laravel.log'),
        ],
    ],
];
