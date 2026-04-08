<?php
require_once 'Produk.php';
require_once 'Service.php';

use App\Produk\Item as ProdukItem;
use App\Service\Item as ServiceItem;

$itemProduk = new ProdukItem("Laptop Asus");
echo $itemProduk->info();

$itemService = new ServiceItem("Instalasi Windows");
echo $itemService->info();