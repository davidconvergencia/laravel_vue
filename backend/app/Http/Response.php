<?php

namespace App\Http;

class Response
{
    private $data = [];
    private $message = [];
    private $status = null;
    private $statusCode = 'sc';
    private $statusResponse = 200;

    const STATUS_RESPONSE = [
        'sc' => ['success', 'Operação realizada com sucesso.'],
        'nf' => ['not-found', 'Não encontrado.'],
        'er' => ['error', 'Sistema indisponível.'],
        'er-dev' => ['error-dev']
    ];

    public function data($data)
    {
        $this->data = is_array($data) ? $data : [$data];
        return $this;
    }

    public function message($message)
    {
        $this->message = is_array($message) ? $message : [$message];
        return $this;
    }

    public function status($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    public function getStatus()
    {
        return self::STATUS_RESPONSE[$this->statusCode][0];
    }

    public function statusResponse($statusResponse)
    {
        $this->statusResponse = $statusResponse;
        return $this;
    }

    private function prepareData()
    {
        if (array_key_exists($this->statusCode, self::STATUS_RESPONSE)) {
            $this->status = self::STATUS_RESPONSE[$this->statusCode][0];
            $this->message = !empty($this->message) ? $this->message : [self::STATUS_RESPONSE[$this->statusCode][1]];
        } else {
            $this->status = self::STATUS_RESPONSE['er-dev'][0];
            $this->message = ['status code'];
        }
    }

    public function json()
    {
        $this->prepareData();
        return response()->json(['status' => $this->status, 'message' => $this->message, 'data' => $this->data], $this->statusResponse);
    }

    public function Array()
    {
        $this->prepareData();
        return ['status' => $this->status, 'message' => $this->message, 'data' => $this->data];
    }
}
