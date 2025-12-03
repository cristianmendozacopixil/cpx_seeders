<?php

namespace App\Console\Commands\CpxSeeders;

use Illuminate\Console\GeneratorCommand;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MigrateFresh extends GeneratorCommand
{
	protected $signature = 'cpx-migrate:fresh {--seed}';
	protected $description = 'Execute fresh migrations and optionally seed the database';

	public function handle()
	{
		$this->info("Starting migration process...");

		// Run migrations
		$this->call('migrate:fresh', [
			'--force' => true,
		]);

		$this->info("Migrations completed successfully.");

		// Optionally run seeders
		if ($this->option('seed')) {
			$this->info("Starting database seeding...");

			$this->call('cpx-seeder:seed');

			$this->info("Database seeding completed successfully.");
		}
	}

	protected function getStub()
	{
		return "";
	}
}