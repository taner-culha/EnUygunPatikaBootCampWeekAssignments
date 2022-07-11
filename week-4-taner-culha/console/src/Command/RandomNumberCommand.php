<?php

// src/Command/RandomNumberCommand.php
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RandomNumberCommand extends Command
{
  // the name of the command (the part after "bin/console")
  protected static $defaultName = 'app:random-number';
  protected static $defaultDescription = 'Generate a random numbers.';

  protected function configure(): void
  {
    $this
      ->setHelp('This command allows you to create a user...');

    $this
      ->addArgument('number', InputArgument::REQUIRED, '-');
  }

  protected function execute(InputInterface $input, OutputInterface $output): int
  {
    $number = $input->getArgument('number');

    $numbers = array();
    for ($i = 0; $i < $number; $i++) {
      $numbers[$i] = rand();
    }

    $output->writeln("Üretilen sayı : " . count($numbers));
    $output->writeln("En Büyük Sayı : " . max($numbers));
    $output->writeln("En Küçük Sayı : " . min($numbers));

    return Command::SUCCESS;
  }
}
