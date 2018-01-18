<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
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
        return [
            'title' => 'required|min:6',
            'description' => 'required|min:6',
            'status' => 'required',
            'start' => 'required',
            'end' => 'required',
            'images' => 'required',
        ];
    }

    /**
     * [messages description]
     * @return [type] [description]
     */
    public function messages()
    {
        return [

            'title.required' => 'Vui long nhập tên sự kiện',
            'title.min' => 'Tên sự kiện không nhỏ hơn 6 kí tự',

            'description.required' => 'Vui lòng nhập thông tin sự kiện',
            'description.min' => 'Thông tin chi tiết không nhỏ hơn 6 kí tự',

            'status.required' => 'Vui lòng nhập thông tin trạng thái',

            'start.required' => 'Vui lòng chọn ngày bắt đầu',

            'end.required' => 'Vui lòng chọn ngày kết thúc',

            'images.required' => 'Vui lòng cung cấp ảnh',
            'images.mimes' => 'Ảnh bạn cung cấp không đúng định dạng JPEG, JPG, PNG',
        ];
    }
}
