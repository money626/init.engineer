<?php

namespace App\Http\Transformers\Social;

use App\Models\Social\Comments;
use League\Fractal\TransformerAbstract;

/**
 * Class CommentsTransformer.
 */
class CommentsTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @param Comments $comments
     * @return array
     */
    public function transform(Comments $comments)
    {
        return [
            'name' => $comments->user_name,
            'avatar' => $comments->user_avatar,
            'content' => $comments->content,
            'created_at' => $comments->created_at,
        ];
    }
}
