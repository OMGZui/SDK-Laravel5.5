<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class TransformerMakeCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'make:trans';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Trans class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Trans';


    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return resource_path('views').'/stubs/trans.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Transformers';
    }

}
