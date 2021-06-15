<?php
namespace CompanyAccount\Companies\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    //const MENU_ID = 'CompanyAccount_Companies::menu1';

    private $pageFactory;
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        $this->pageFactory = $resultPageFactory;
        parent::__construct($context);
    }
    public function execute()
    {
        //die("Page found");
        $resultPage = $this->pageFactory->create();
        //$resultPage->setActiveMenu(static::MENU_ID);
        $resultPage->getConfig()->getTitle()->prepend(__('List of Companies'));
        return $resultPage;
    }


} 
