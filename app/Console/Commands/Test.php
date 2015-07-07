<?php namespace App\Console\Commands;

use Illuminate\Console\Command;

class Test extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'test';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'test command';

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle()
	{
		$this->comment('this is a test command output');
	}

}
