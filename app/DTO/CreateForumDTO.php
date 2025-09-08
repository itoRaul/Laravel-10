<?php

namespace App\DTO;

use App\Http\Requests\StoreUpdateForum;

class CreateForumDTO{

    public function __construct(
        public string $subject,
        public string $status,
        public string $body,
    ){}


    public static function makeFromRequest(StoreUpdateForum $request): self{
        return new self(
            $request->subject,
            'a', //status default como 'a' para ativo
            $request->body,
        );
    }
}