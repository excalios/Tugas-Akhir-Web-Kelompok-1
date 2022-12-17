<?php

namespace App\Http\Requests;

use App\Enums\Category;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Enum;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string',
            'content' => 'required',
            'category' => [new Enum(Category::class), 'required'],
            'rating' => 'nullable|numeric|max:10|min:0',
            'image' => 'required|image'
        ];
    }
}
