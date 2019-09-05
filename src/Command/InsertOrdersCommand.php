<?php

namespace App\Command;

use App\Entity\Orders;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\Common\Persistence\ManagerRegistry;

class InsertOrdersCommand extends Command
{
    protected static $defaultName = 'app:insert-orders-command';
    private $em;

    public function __construct(ManagerRegistry $em)
    {
        $this->em = $em->getManager();
        parent::__construct();
    }

    protected function configure()
    {
        $this->setDescription('extract orders from xml files and save them in db');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $xml = simplexml_load_file(dirname(__DIR__) . '/../var/data/orders-test.xml',
            'SimpleXMLElement', LIBXML_NOCDATA);
        $Orders = $xml->orders->order;

        foreach ($Orders as $order) {
            $orderObject = new Orders();
            $orderObject->setMarketPlace($order->marketplace);
            $orderObject->setIdFlux(intval($order->idFlux));
            $orderObject->setOrderRefid(intval($order->order_refid));
            $orderObject->setOrderRefid(intval($order->order_mrid));
            $orderObject->setOrderAmount(intval($order->order_amount));
            $this->em->persist($orderObject);
        }
        $this->em->flush();

    }
}