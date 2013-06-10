<?php

namespace Mage\GeneratorBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

use Mage\GeneratorBundle\Generator\CrudGenerator;

class GenerateCrudCommand extends ContainerAwareCommand
{
    private $generator;

    protected function configure()
    {
        $this
            ->addArgument('namespace', InputArgument::REQUIRED, 'namespace')
            ->addArgument('module', InputArgument::REQUIRED, 'module')
            ->addArgument('entity', InputArgument::REQUIRED, 'entity')
            ->setDescription('Generates a Magento CRUD')
            ->setName('mage:generate:crud')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $namespace = ucfirst(strtolower($input->getArgument('namespace')));
        $module = ucfirst(strtolower($input->getArgument('module')));
        $entity = ucfirst(strtolower($input->getArgument('entity')));

        $generator = new CrudGenerator();
        $generator->setSkeletonDirs(__DIR__.'/../Resources/skeleton');

        $generator->generate($namespace, $module, $entity);
    }
}
