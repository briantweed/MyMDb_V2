<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;


class MakeFormClass extends GeneratorCommand
{

    protected $name = 'make:form';

    protected $description = 'Create a new form';

    protected $type = 'Console command';


    protected function replaceClass($stub, $name)
    {
        $stub = parent::replaceClass($stub, $name);

        return str_replace('dummy:command', $this->option('command'), $stub);
    }


    protected function getStub()
    {
        return __DIR__.'/stubs/form.stub';
    }


    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Forms';
    }


    protected function getArguments()
    {
        return [
            ['name', InputArgument::REQUIRED, 'The name of the command.'],
        ];
    }


    protected function getOptions()
    {
        return [
            ['command', null, InputOption::VALUE_OPTIONAL, 'The terminal command that should be assigned.', 'command:name'],
        ];
    }

}
