<?php

namespace Magerex\AdvanceOrderGrid\Ui\Component\Listing\Column;

use Magento\Ui\Component\Listing\Columns\Column;

class BillingAndShipping extends Column
{
    /**
     * @param array $dataSource
     * @return array
     */
    public function prepareDataSource(array $dataSource)
    {
        $groupsName=array(
            '0'=>'NOT LOGGED IN',
            '1'=>'General',
            '2'=>'Wholesale',
            '3'=>'Retailer',
            '999'=>'Seller'
        );
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as &$items)  {
                $items['billing_and_shippong_ext']='<b>Bill To - :</b> ' .$items['billing_name'].'<br>'.$items['billing_address'].'<br><br><b>Shipp To - </b>' .$items['shipping_name'].'<br>'.$items['shipping_address'].'<br><br><b>Shipping Info :</b>' .$items['shipping_information'].'<br><br><b>Shipping and Handing </b>'. $items['shipping_and_handling'];
            }
        }
//        echo '<pre>';print_r($dataSource); die('');
        return $dataSource;
    }
}