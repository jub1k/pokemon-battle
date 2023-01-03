<?php


abstract class Controllers
{
    /**
     * @throws Exception
     */
    protected function render(string $view, array $data):void
    {
        $file = __DIR__ . "/../view/$view.view.php";

        if (!file_exists($file)){
            throw new Exception('View not exist');
        }

        require(__DIR__ . "/../view/inc/header.view.php");
        require("$file");
        require(__DIR__ . "/../view/inc/footer.view.php");

    }
}