<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdvertisementStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // You can implement authorization logic here if needed
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'status' => 'required|boolean',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'حقل العنوان مطلوب.',
            'description.required' => 'حقل الوصف مطلوب.',
            'image.image' => 'يجب أن يكون الملف المرفوع صورة.',
            'image.mimes' => 'يجب أن يكون نوع الملف صورة بصيغة JPEG، PNG، JPG، أو GIF.',
            'image.max' => 'يجب أن يكون حجم الصورة أقل من 2 ميجابايت.',
            'start_date.required' => 'حقل تاريخ البدء مطلوب.',
            'start_date.date' => 'يجب أن يكون تاريخ البدء تاريخًا صحيحًا.',
            'end_date.required' => 'حقل تاريخ الانتهاء مطلوب.',
            'end_date.date' => 'يجب أن يكون تاريخ الانتهاء تاريخًا صحيحًا.',
            'end_date.after' => 'يجب أن يكون تاريخ الانتهاء بعد تاريخ البدء.',
            'status.required' => 'حقل الحالة مطلوب.',
            'status.boolean' => 'يجب أن تكون الحالة صحيحة أو خاطئة.',
        ];
    }
}


