<?php
namespace Unit1\FirstModule\MagentoU;

class Test
{
    protected  $productRepository;
    protected  $productFactory;
    protected  $session;
    protected  $justAParameter;
    protected  $data;

    public function __construct(
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        \Magento\Catalog\Model\ProductFactory $productFactory,
        \Magento\Checkout\Model\Session $session,
        $justAParameter = false,
        array $data
    )
    {
        $this->productRepository = $productRepository;
        $this->productFactory = $productFactory;
        $this->session = $session;
        $this->justAParameter = $justAParameter;
        $this->data = $data;
    }

    public function log()
    {
        echo '<br/>';
        echo get_class($this->productRepository).'<br/>';
        echo get_class($this->productFactory).'<br/>';
        echo $this->justAParameter.'<br/>';
        print_r($this->data);
    }
}