<?php
// 生成用户
namespace Dolphin\Ting\Http\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GenerateUserCommand extends Command
{
    // 命令
    protected static $defaultName = 'generate-user';

    protected function configure ()
    {
        $this->setDescription('Generate User.')
             ->addArgument('count', InputArgument::REQUIRED, 'User Count.');
    }

    protected function execute (InputInterface $input, OutputInterface $output)
    {
        $count = $input->getArgument('count');

        $output->writeln($count);

        return 0;
    }
}