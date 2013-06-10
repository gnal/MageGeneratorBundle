<?php

namespace Mage\GeneratorBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Mage\GeneratorBundle\Generator\CrudGenerator;

class GenerateCrudCommand extends ContainerAwareCommand
{
    private $generator;

    protected function configure()
    {
        $this
            ->setDescription('Generates a Magento CRUD')
            ->setName('mage:generate:crud')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $generator = new CrudGenerator();

        $generator->setSkeletonDirs(__DIR__.'/../Resources/skeleton');

        $generator->generate();
    }
}
