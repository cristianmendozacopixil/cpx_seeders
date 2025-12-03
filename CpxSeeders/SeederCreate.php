<?php

namespace App\Console\Commands\CpxSeeders;

use Illuminate\Console\GeneratorCommand;

use Illuminate\Support\Str;

class SeederCreate extends GeneratorCommand
{
	protected $signature = 'cpx-seeder:create {name : Entity (Example: "User", "Student").}';
	protected $description = 'Create seeder file';

	public function handle()
	{
		$name = ucfirst($this->getNameInput());
		$directory = $this->laravel['path.database'].'/cpx_seeders/';
		//The function makeDirectory accepts a path with file name to create his directory
		$this->makeDirectory($directory.date('Y_m_d_His_').Str::snake($name)."Seeder.php");

		$template = __DIR__.'/stubs/seeder.stub';

		$content = $this->files->get($template);
		$content = str_replace('{{seederName}}', Str::studly($name)."Seeder", $content);

		$this->files->put($directory.date('Y_m_d_His_').Str::snake($name)."_seeder.php", $content);
		$this->info('Seeder '.$name.' created successfully.');
	}

	protected function getStub()
	{
		return "";
	}
}