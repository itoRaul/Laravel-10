<?php

namespace App\DTO\Forums;

use App\Enums\ForumStatus;
use App\Http\Requests\StoreUpdateForum;
use App\Models\Forum;

class CreateForumDTO{

    public function __construct(
        public string $subject,
        public ForumStatus $status,
        public string $body,
    ){}


    public static function makeFromRequest(StoreUpdateForum $request): self{
        return new self(
            $request->subject,
            ForumStatus::A,
            $request->body,
        );
    }
}