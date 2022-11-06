<?php
namespace Core\Controller;

class DefaultController {

    protected function render (string $viewPath, ?array $parameters = [], string $title, ?array $links = [], ?array $scripts = [])
    {
        ob_start();
            if (isset($parameters)) {
                extract($parameters);
            }
            require ROOT. "/templates/$viewPath.php";
        $content = ob_get_clean();
        require_once ROOT. "/templates/base.php";
    }
}