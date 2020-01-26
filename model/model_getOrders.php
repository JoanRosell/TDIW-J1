<?php
require_once __DIR__ . '/buildConnection.php';
require_once __DIR__ . '/model_getProductDetail.php';
require_once  __DIR__ . '/model_getUserInfo.php';

function getOrders($user_id) : array
{
    $orders = array();
    try {
        $dbh = buildConnection();
        $invoices_query = "SELECT * FROM invoice WHERE ClientID = " . $user_id;
        $stmt = $dbh->prepare($invoices_query);
        $stmt->execute();
        $invoices = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($invoices))
        {
            $orders['client_info'] = getClientInfo($_SESSION['user_id']);

            foreach ($invoices as $invoice)
            {
                $orders[$invoice['InvoiceID']] = [
                    'qty' => $invoice['Quantity'],
                    'total_price' => $invoice['Price'],
                    'date' => $invoice['Date'],
                    'sales' => []
                ];

                $sales_query = "SELECT * FROM sales WHERE InvoiceID = " . $invoice['InvoiceID'];
                $stmt = $dbh->prepare($sales_query);
                $stmt->execute();
                $sales = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($sales as $sale)
                {
                    $orders[$invoice['InvoiceID']]['sales'][$sale['SaleID']] = [
                        'units' => $sale['SellQuantity'],
                        'price' => $sale['SellPrice'],
                        'info' => getProductDetail($sale['ProductID'])
                    ];
                }
            }
        }
    }
    catch (PDOException $exception)
    {
        echo $exception->getMessage();
    }

    return $orders;
}
