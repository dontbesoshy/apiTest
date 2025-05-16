<?php

namespace App\Traits;

use Illuminate\Support\Facades\DB;
use RuntimeException;
use Throwable;

trait CanThrowTrait
{
    /**
     * Function to throw exceptions.
     *
     * @param $exception
     */
    protected static function throwStatic($exception): void
    {
        throw $exception;
    }

    /**
     * Throw if condition.
     *
     * @param $condition
     * @param $exceptionClass
     * @param mixed ...$args
     */
    protected static function throwStaticIf($condition, $exceptionClass, ...$args): void
    {
        if ($condition) {
            self::throwStatic(new $exceptionClass(...$args));
        }
    }

    /**
     * Function to throw exceptions.
     *
     * @param $exception
     */
    protected function throw($exception): void
    {
        throw $exception;
    }

    /**
     * Throw if condition.
     *
     * @param $condition
     * @param $exceptionClass
     * @param mixed ...$args
     */
    protected function throwIf($condition, $exceptionClass, ...$args): void
    {
        if ($condition) {
            $this->throw(new $exceptionClass(...$args));
        }
    }

    /**
     * Throw if not.
     *
     * @param $condition
     * @param $exceptionClass
     * @param mixed ...$args
     */
    protected function throwIfNot($condition, $exceptionClass, ...$args): void
    {
        $this->throwIf(!$condition, $exceptionClass, ...$args);
    }

    /**
     * Roll back and throw exception.
     *
     * @param \Throwable $exception
     */
    protected function rollBackThrow(\Throwable $exception): void
    {
        $this->safeRollBack();
        $this->throw($exception);
    }

    /**
     * Perform safe rollback.
     *
     * @param null $level
     * @param int $tryNumber
     * @return void
     */
    protected function safeRollBack($level = null, $tryNumber = 0): void
    {
        if ($level !== null && $level < 0) {
            return;
        }

        if ($tryNumber > 5) {
            $this->throw(new RuntimeException('Too many rollbacks'));
        }

        try {
            DB::rollBack($level);
        } catch (Throwable $e) {
            if (str_contains($e->getMessage(), 'SQLSTATE[42000]: Syntax error or access violation: 1305 SAVEPOINT')) {
                $level ??= (DB::transactionLevel() - 1);
                info("RUNNING SAFE ROLLBACK LEVEL {$level} TRY NUMBER {$tryNumber}");
                $this->safeRollBack($level - 1, $tryNumber + 1);
            } else {
                $this->throw($e);
            }
        }
    }
}
