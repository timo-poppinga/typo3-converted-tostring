<?php

declare(strict_types=1);

namespace Z3\Statistics\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Backend\Attribute\Controller;
use TYPO3\CMS\Backend\Template\ModuleTemplateFactory;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Z3\Statistics\Dto\HelloWorldDto;

#[Controller]
class TestController extends ActionController
{
    public function __construct(
        protected ModuleTemplateFactory $moduleTemplateFactory,
    ) {
    }

    public function indexAction(): ResponseInterface
    {
        $request = $this->request;
        $moduleTemplate = $this->moduleTemplateFactory->create($request);
        $moduleTemplate->assign('data', new HelloWorldDto());
        $response = $moduleTemplate->renderResponse('Index');
        return $response;
    }
}
