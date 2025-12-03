<?php

namespace App\Console\Commands\CpxSeeders;

use Illuminate\Console\GeneratorCommand;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MigrateStatus extends GeneratorCommand
{
	protected $signature = 'cpx-migrate:status';
	protected $description = 'Execute fresh migrations and optionally seed the database';

	public function handle()
	{
		$this->info("Migration status:");
		$this->call('migrate:status');
		$this->info("Seeder status:");
		$this->call('cpx-seeder:status');
	}

	protected function getStub()
	{
		return "";
	}
}