<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryAddRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'name' => ['bail','required','max:255',Rule::unique('categories')->withoutTrashed()],
            'parent_id' => 'required',
        ];
    }
    public function messages(): array
    {
        //format: 'field.rule' => 'message'
        return [
            'name.required' => 'Tên danh mục không được để trống',
            'name.unique' => 'Tên danh mục đã tồn tại',
            'name.max' => 'Tên danh mục không được quá 255 ký tự',
            'parent_id.required' => 'Danh mục cha không được để trống',
        ];
    }
}
