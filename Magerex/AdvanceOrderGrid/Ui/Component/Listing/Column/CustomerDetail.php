<?php

namespace Magerex\AdvanceOrderGrid\Ui\Component\Listing\Column;

use Magento\Ui\Component\Listing\Columns\Column;

class CustomerDetail extends Column
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
                $items['customer_detail']='<b>Customer Name :</b> ' .$items['customer_name'].'<br><br><b>Email :</b>' .$items['customer_email'].'<br><br><b>Group :</b>' .$groupsName[$items['customer_group']];
            }
        }
        return $dataSource;
    }
}