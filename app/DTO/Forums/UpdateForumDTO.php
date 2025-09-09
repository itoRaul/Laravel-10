<?php

namespace App\DTO\Forums;

use App\Enums\ForumStatus;
use App\Http\Requests\StoreUpdateForum;

class UpdateForumDTO{

    public function __construct(
        public string $id,
        public string $subject,
        public ForumStatus $status,
        public string $body,
    ){}


    public static function makeFromRequest(StoreUpdateForum $request, string $id = null): self{
        return new self(
            $id ?? $request->id,
            $request->subject,
            ForumStatus::A,
            $request->body,
        );
    }
}