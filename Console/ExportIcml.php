<?php
namespace Retailcrm\Retailcrm\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
// use Retailcrm\Retailcrm\Model\Icml\Icml;

class ExportIcml extends Command
{
	
   protected function configure()
   {
       $this->setName('export:icml');
       $this->setDescription('Export Icml');
       
       parent::configure();
   }
   protected function execute(InputInterface $input, OutputInterface $output)
   {
		$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
		$state = $objectManager->get('Magento\Framework\App\State');
		$state->setAreaCode('frontend');
 
		
		
	   $icml = new \Retailcrm\Retailcrm\Model\Icml\Icml();
	   $icml->generate();
       // $output->writeln("Hello World");
   }
}