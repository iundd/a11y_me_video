<?php
namespace iundd\A11yMeVideo\EventListener;

use TYPO3\CMS\Backend\Form\Exception;
use TYPO3\CMS\Backend\Form\FormDataCompiler;
use TYPO3\CMS\Backend\Form\FormDataGroup\TcaDatabaseRecord;
use TYPO3\CMS\Backend\View\Event\PageContentPreviewRenderingEvent;
use TYPO3\CMS\Backend\View\PageLayoutView;
use TYPO3\CMS\Backend\View\PageLayoutViewDrawItemHookInterface;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Fluid\View\StandaloneView;

class VideoPlayerPreview
{
    /**
     * @var array
     */
    protected $supportedContentTypes = [
        'a11ymevideo_videoplayer' => 'Videoplayer',
        'a11ymevideo_videoplayer2' => 'Videoplayer2',
    ];

    protected StandaloneView $view;

    /**
     * Preprocesses the preview rendering of a content element.
     *
     * @param PageLayoutView $parentObject
     * @param bool $drawItem
     * @param string $headerContent
     * @param string $itemContent
     * @param array $row
     */
    public function __invoke(PageContentPreviewRenderingEvent $event)
    {
        $row = $event->getRecord();

        if (!isset($this->supportedContentTypes[$row['CType'] ?? ''])) {
            return;
        }
        
        $formDataGroup = GeneralUtility::makeInstance(TcaDatabaseRecord::class);
        $formDataCompiler = GeneralUtility::makeInstance(FormDataCompiler::class, $formDataGroup);
        $formDataCompilerInput = [
            'command' => 'edit',
            'tableName' => 'tt_content',
            'vanillaUid' => (int)$row['uid'],
        ];
        try {
            $result = $formDataCompiler->compile($formDataCompilerInput);
            $processedRow = $this->getProcessedData($result['databaseRow'], $result['processedTca']['columns']);
            
            $this->configureView($result['pageTsConfig'], $row['CType']);
            $this->view->assignMultiple(
                [
                    'row' => $row,
                    'processedRow' => $processedRow,
                ]
            );

            $event->setPreviewContent($this->view->render());
        } catch (Exception $exception) {
            $message = $GLOBALS['BE_USER']->errorMsg;
            if (empty($message)) {
                $message = $exception->getMessage() . ' ' . $exception->getCode();
            }

            $event->setPreviewContent($message);
        }
    }

    /**
     * @param array $pageTsConfig
     * @param string $contentType
     */
    protected function configureView(array $pageTsConfig, $contentType)
    {
        $this->view = GeneralUtility::makeInstance(StandaloneView::class);

        if (empty($pageTsConfig['mod.']['web_layout.']['tt_content.']['preview.'])) {
            return;
        }

        $previewConfiguration = $pageTsConfig['mod.']['web_layout.']['tt_content.']['preview.'];
        list($extensionKey) = explode('_', $contentType, 2);
        $extensionKey .= '.';
        if (!empty($previewConfiguration[$extensionKey]['templateRootPath'])) {
            $this->view->setTemplateRootPaths([
                'EXT:a11y_me_video/Resources/Private/Backend/Templates/Content/',
                $previewConfiguration[$extensionKey]['templateRootPath'],
            ]);
        }
        if (!empty($previewConfiguration[$extensionKey]['layoutRootPath'])) {
            $this->view->setLayoutRootPaths([
                $previewConfiguration[$extensionKey]['layoutRootPath'],
            ]);
        }
        if (!empty($previewConfiguration[$extensionKey]['partialRootPath'])) {
            $this->view->setPartialRootPaths([
                $previewConfiguration[$extensionKey]['partialRootPath'],
            ]);
        }
        $this->view->setTemplate($this->supportedContentTypes[$contentType]);
    }

    /**
     * @param array $databaseRow
     * @param array $processedTcaColumns
     * @return array
     */
    protected function getProcessedData(array $databaseRow, array $processedTcaColumns)
    {
        $processedRow = $databaseRow;
        foreach ($processedTcaColumns as $field => $config) {
            if (!isset($config['children'])) {
                continue;
            }
            $processedRow[$field] = [];
            foreach ($config['children'] as $child) {
                if (!$child['isInlineChildExpanded']) {
                    $formDataGroup = GeneralUtility::makeInstance(TcaDatabaseRecord::class);
                    $formDataCompiler = GeneralUtility::makeInstance(FormDataCompiler::class, $formDataGroup);
                    $formDataCompilerInput = [
                        'command' => 'edit',
                        'tableName' => $child['tableName'],
                        'vanillaUid' => $child['vanillaUid'],
                    ];
                    $child = $formDataCompiler->compile($formDataCompilerInput);
                }
                $processedRow[$field][] = $this->getProcessedData($child['databaseRow'], $child['processedTca']['columns']);
            }
        }

        return $processedRow;
    }
}
