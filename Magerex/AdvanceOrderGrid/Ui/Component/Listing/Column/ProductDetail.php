<?php

namespace Magerex\AdvanceOrderGrid\Ui\Component\Listing\Column;
use Magento\Catalog\Api\ProductRepositoryInterfaceFactory;
use Magento\Catalog\Helper\Image;
use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use \Magento\Sales\Api\OrderRepositoryInterface;
use Magento\Ui\Component\Listing\Columns\Column;

class ProductDetail extends Column
{
    /**
     * @var OrderRepositoryInterface
     */
    private $orderRepository;
    /**
     * @var Image
     */
    private $imageHelper;
    /**
     * @var ProductRepositoryInterfaceFactory
     */
    private $productRepositoryFactory;

    /**
     * ProductDetail constructor.
     * @param ContextInterface $context
     * @param UiComponentFactory $uiComponentFactory
     * @param array $components
     * @param OrderRepositoryInterface $orderRepository
     * @param Image $imageHelper
     * @param ProductRepositoryInterfaceFactory $productRepositoryFactory
     * @param array $data
     */
public function __construct(ContextInterface $context, UiComponentFactory $uiComponentFactory, array $components = [],OrderRepositoryInterface $orderRepository,
                            Image $imageHelper,
                            ProductRepositoryInterfaceFactory $productRepositoryFactory,
                            array $data = [])
{
        $this->orderRepository = $orderRepository;

    parent::__construct($context, $uiComponentFactory, $components, $data);
    $this->imageHelper = $imageHelper;
    $this->productRepositoryFactory = $productRepositoryFactory;
}
    /**
     * @param array $dataSource
     * @return array
     */
    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as &$items)  {
//                $order=$this->orderRepository->get($items['entity_id']);
//                foreach ($order->getAllItems() as $orderItems){
//                 echo '<pre>';   print_r($orderItems->getData('product_id'));
//                    echo '<pre>';   print_r($orderItems->getData('sku'));
//                    $product = $this->productRepositoryFactory->create()->getById($orderItems->getData('product_id'));
//                    echo '<br>';
//                    echo $product->getImage();
//
//                }
                $items['cutomer_products_detail_ext'] = '<img src=""></img>';
            }
        }
//       die('');
//        echo '<pre>';print_r($dataSource); die('');
        return $dataSource;
    }
}