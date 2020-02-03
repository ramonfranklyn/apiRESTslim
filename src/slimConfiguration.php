<?php 

    namespace src;

    function slimConfiguration(): \Slim\Container{
        $configuration = [
            'settings' => [
                'displayErrorDetails' => getenv('DYSPLAY_ERROS_DETAILS'),
            ],
        ];
        return new \Slim\Container($configuration);
    

    }