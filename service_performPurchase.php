<?php
require __DIR__ . '/model/model_getProductDetail.php';

$product_details = array();
if (!empty($_SESSION['_cart']))
{
    foreach ($_SESSION['_cart']['products'] as $id => $units)
    {
        $product_details[$id] = [
            'price' => getProductDetail($id)['Price'],
            'units' => $units,
        ];
    }

    try
    {
        $dbh = buildConnection();

        $invoice_insertion = $dbh->prepare("INSERT INTO invoice (ClientID, Quantity, Price, Date) VALUES (:c_ID, :qt, :p, CURDATE())");
        $invoice_params = [
            'c_ID' => $_SESSION['user_id'],
            'qt' => $_SESSION['_cart']['total_units'],
            'p' => $_SESSION['_cart']['total_price'],
        ];
        $invoice_insertion->execute($invoice_params);

        $invoice_id = $dbh->lastInsertId();
        $sale_insertion = $dbh->prepare("INSERT INTO sales (InvoiceID, ProductID, SellQuantity, SellPrice) VALUES (:i_ID, :p_ID, :s_qty, :s_p)");

        $dbh->beginTransaction();
        foreach ($product_details as $id => $data)
        {
            $sale_params = [
                'i_ID' => $invoice_id,
                'p_ID' => $id,
                's_qty' => $data['units'],
                's_p' => $data['price'],
            ];
            $sale_insertion->execute($sale_params);
        }
        $dbh->commit();

        $_SESSION["_cart"] = null;
        header("Location: /index.php?action=purchaseConfirmation");
    }
    catch (PDOException $exception)
    {
        echo $exception->getMessage();
    }
}
