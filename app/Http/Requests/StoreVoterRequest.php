<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreVoterRequest extends Request {

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
			'voterName'=>'required',
			'voter_id' => 'required|min:13|unique:voters,voter_id,',

	];



	}

}
