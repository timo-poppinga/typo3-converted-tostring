<?php

declare(strict_types=1);

namespace Z3\Statistics\ViewHelpers;


use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;
use Z3\Statistics\Dto\HelloWorldDto;


final class RenderHelloViewHelper extends AbstractViewHelper
{
    use CompileWithRenderStatic;

    protected $escapeOutput = false;

    public  function initializeArguments(): void
    {
        $this->registerArgument('data', HelloWorldDto::class, '', true);
    }

    public static function renderStatic(
        array $arguments,
        \Closure $renderChildrenClosure,
        RenderingContextInterface $renderingContext
    ) {
        $data = $arguments['data'];
        if($data instanceof HelloWorldDto === false) {
            throw new \Exception('', 1697970836);
        }
        $content = $data->text;
        return $content;
    }

}
