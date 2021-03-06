<?php namespace Zeropingheroes\Lanager\Api\v1;

use Zeropingheroes\Lanager\Achievements\AchievementService,
	Zeropingheroes\Lanager\Achievements\AchievementTransformer;

class AchievementsController extends BaseController {

	/**
	 * Set the service and transformer classes
	 */
	public function __construct()
	{
		parent::__construct();
		$this->service = new AchievementService($this);
		$this->transformer = new AchievementTransformer;
	}

}