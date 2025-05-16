<?php

namespace App\Exceptions;

use App\Traits\JsonResponseTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;
use Throwable;

abstract class BasicException extends \Exception
{
    use JsonResponseTrait;

    private string $errorUid;
    protected string $errorCode;
    protected int $errorHttpCode;
    protected string $errorMsg;
    protected string $translationKey;
    protected array $translationParams;
    protected mixed $errorData;

    /**
     * BasicException constructor.
     *
     * @param string $message
     * @param int $code
     * @param null|Throwable $previous
     * @param array $moreData
     */
    public function __construct(
        string $message = "",
        int $code = 0,
        ?Throwable $previous = null,
        public readonly array $moreData = []
    ) {
        parent::__construct($message, $code, $previous);

        $this->init();
        $this->errorUid = Str::uuid();

        $this->message = class_basename($this);
    }

    /**
     * Render.
     *
     * @return JsonResponse
     */
    public function render(): JsonResponse
    {
        return $this->responseJson(
            $this->wrapError(
                $this->errorMsg,
                $this->errorHttpCode,
                $this->errorCode,
                $this->errorUid,
                $this->errorData
            ),
            $this->errorHttpCode
        );
    }

    /**
     * Get more data field.
     *
     * @return array
     */
    public function getMoreData(): array
    {
        return $this->moreData;
    }

    /**
     * Translate error msg and save translation params.
     *
     * @param string $key
     * @param array $params
     *
     * @return string
     */
    protected function __(string $key, array $params = []): string
    {
        $this->translationKey = $key;
        $this->translationParams = $params;

        return __($key, $params);
    }

    /**
     * Get error data field.
     *
     * @return mixed
     */
    public function getErrorData(): mixed
    {
        return $this->errorData;
    }

    /**
     * Init error data.
     *
     * @return void
     */
    abstract protected function init(): void;
}
