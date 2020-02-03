<?php

    use function src\slimConfiguration;
    use App\Controllers\LojaController;
    use App\Controllers\ProdutoController;


    $app = new \Slim\App(slimConfiguration());

    // =====================================================

    $app->get('/loja', LojaController::class . ':getLojas');
    $app->post('/loja', LojaController::class . ':insertLoja');
    $app->put('/loja', LojaController::class . ':updateLoja');
    $app->delete('/loja', LojaController::class . ':deleteLoja');

    $app->get('/produtos', ProdutoController::class . ':getProdutos');
    $app->post('/produtos', ProdutoController::class . ':insertProdutos');
    $app->put('/produtos', ProdutoController::class . ':updateProdutos');
    $app->delete('/produtos', ProdutoController::class . ':deleteProdutos');

    

    // =====================================================

    $app->run();