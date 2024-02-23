<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use InterNACHI\Modular\Console\Commands\Make\Modularize;

class MakeActionCommand extends GeneratorCommand
{
    use Modularize;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:action {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new action class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Action';

    /**
     * Determine if the class already exists.
     *
     * @param string $rawName
     * @return bool
     */
    protected function exists(string $rawName): bool
    {
        return class_exists($rawName);
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub(): string
    {
        return __DIR__ . '/stubs/action.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace): string
    {
        if ($module = $this->module()) {
            $rootNamespace = rtrim($module->namespaces->first(), '\\');
        }

        return $rootNamespace . '\Actions';
    }
}
