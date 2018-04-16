<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class PostsStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $post = $this->route('post');
        return [
            'title' => 'required|min:3|unique:posts' .( $post ? (',title,' . $post->id) :  ''),
            'description' => 'required|min:10',
            'user_id' => 'exists:users,id'
        ];
    }
}
