<?php

namespace Magerex\AdvanceOrderGrid\Ui\Component\Listing\Column;

use Magento\Ui\Component\Listing\Columns\Column;

class OrderDetail extends Column
{
    /**
     * @param array $dataSource
     * @return array
     */
    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as &$items)  {
                $items['cutomer_order_detail_ext']='<b>ID : </b>'. $items['increment_id'].'<br><br><b>Subtotal = </b>'. $items['subtotal'].'<br><br><b>Grand Total(Base) = </b>'.$items['base_grand_total'].'<br><br><b>Grand Total(Purchase) =</b>'. $items['grand_total'];
            }
        }
        return $dataSource;
    }
}