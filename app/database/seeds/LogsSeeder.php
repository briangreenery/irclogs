<?php

class LogsSeeder extends Seeder
{

	/**
	 * The different message types
	 *
	 * @var array
	 */
	private static $TYPES = array('message', 'message', 'message', 'join', 'quit');

	/**
	 * Bind dependencies
	 */
	public function __construct()
	{
		$this->faker = Faker\Factory::create();
	}

	/**
	 * Generate messages
	 */	
	public function run()
	{
		for ($i = 0; $i < 10000; $i++) {
			$this->generate();
		}
	}
	
	/**
	 * Generate messages
	 */
	public function generate()
	{
		$log = array(
			'type' => $this->faker->randomElement(static::$TYPES),
			'nick' => $this->faker->userName,
			'time' => new MongoDate($this->faker->dateTimeThisYear->getTimestamp()),
		);

		$messageKey = $log['type'] == 'message' ? 'text' : ($log['type'] == 'quit' ? 'reason' : null);
		if ($messageKey) {
			$log[$messageKey] = $this->faker->sentence(rand(3,50));
		}
		
		IrcLog::insert($log);
	}

}
