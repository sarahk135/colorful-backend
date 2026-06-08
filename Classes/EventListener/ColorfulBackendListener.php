<?php

declare(strict_types=1);

namespace sarahk135\ColorfulBackend\EventListener;

use TYPO3\CMS\Backend\Controller\Event\BeforeBackendPageRenderEvent;
use TYPO3\CMS\Core\Attribute\AsEventListener;


#[AsEventListener(
    identifier: 'colorful_backend/backend/before-backend-page-render',
)]
final readonly class ColorfulBackendListener
{
    
    public function __invoke(BeforeBackendPageRenderEvent $event): void
    {
        
        if($GLOBALS['BE_USER']->uc['colorful_icons']){
            $event->pageRenderer->addCssFile('EXT:colorful_backend/Resources/Public/Css/cbe_backend.css');
        }     
        
    }
}