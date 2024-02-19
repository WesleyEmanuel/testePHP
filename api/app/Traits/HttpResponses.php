<?php

namespace App\Traits;
use Illuminate\Support\MessageBag;
use Illuminate\Database\Eloquent\Model;

trait HttpResponses {
  public function response(string $message, string|int $status, array|Model $data = []){
    return response()->json([
      'message' => $message,
      'status' => $status,
      'data' => $data
    ], $status);
  }

  public function error(string $message, string|int $status, array|MessageBag $errors, array $data = []){
    return response()->json([
      'message' => $message,
      'status' => $status,
      'errors' => $errors,
      'data' => $data
    ], $status);
  }
}