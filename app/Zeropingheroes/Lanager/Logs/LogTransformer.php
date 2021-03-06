<?php namespace Zeropingheroes\Lanager\Logs;

use League\Fractal;

class LogTransformer extends Fractal\TransformerAbstract {

	/**
	 * Transform resource into standard output format with correct typing
	 * @param  object BaseModel   Resource being transformed
	 * @return array              Transformed object array ready for output
	 */
	public function transform(Log $log)
	{
		return [
			'id'			=> (int) $log->id,
			'created_at'	=> date('c',strtotime($log->created_at)),
			'php_sapi_name'	=> $log->php_sapi_name,
			'level'			=> $log->level,
			'message'		=> $log->message,
		];
	}
}