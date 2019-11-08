<?php 
    namespace MD\Helloworld\Block;
    class Index extends \Magento\Framework\View\Element\Template
    {
        public function __construct(\Magento\Framework\View\Element\Template\Context $context){
            parent::__construct($context);
        }

        public function getHelloworld(){
            return __('Hello World');
        }
        
        public function getPosts(){
            $post = $this->_postFactory->create();
            $collection = $post->getCollection();
            return $collection;
        }
    }
?>