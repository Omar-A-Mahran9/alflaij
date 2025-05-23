<?php

namespace App\Http\Requests;

use App\Rules\NotNumbersOnly;
use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
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
            'question_ar' => ['required', new NotNumbersOnly()],
            'question_en' => ['required', new NotNumbersOnly()],
            'answer_ar' => ['required', new NotNumbersOnly()],
            'answer_en' => ['required', new NotNumbersOnly()],
        ];
    }
}
