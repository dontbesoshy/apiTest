<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

trait JsonResponseTrait
{
    /**
     * Return response in JSON.
     *
     * @param $data
     * @param $code
     *
     * @return JsonResponse
     */
    public function responseJson($data, $code): JsonResponse
    {
        return response()->json($data, $code);
    }

    /**
     * Function that adds extra fields to the result response.
     *
     * @param array $arr
     *
     * @return array
     */
    private function sanitizeResult(array $arr): array
    {
        return $arr;
    }

    /**
     * @param $data
     *
     * @return array
     */
    private function wrapSuccess($data): array
    {
        return $this->sanitizeResult([
            'success' => true,
            'data' => $data,
        ]);
    }

    /**
     * Wrap error to specified structure.
     *
     * @param string $errorMsg
     * @param int $httpCode
     * @param string $errorCode
     * @param string $errorUid
     * @param mixed $errorData
     *
     * @return array
     */
    private function wrapError(
        string $errorMsg,
        int $httpCode,
        string $errorCode,
        string $errorUid = '',
        mixed $errorData = ''
    ): array {
        $array = [
            'success' => false,
            'httpCode' => $httpCode,
            'error' => [
                'code' => $errorCode,
                'message' => $errorMsg,
            ],
        ];

        if ($errorUid != '') {
            $array['error']['uid'] = $errorUid;
        }

        if ($errorData != '') {
            $array['error']['data'] = $errorData;
        }

        return $this->sanitizeResult($array);
    }

    /**
     * 200 - ok.
     *
     * @param mixed $data
     *
     * @return JsonResponse
     */
    protected function OK(mixed $data = []): JsonResponse
    {
        return $this->responseJson($this->wrapSuccess($data), Response::HTTP_OK);
    }
}
