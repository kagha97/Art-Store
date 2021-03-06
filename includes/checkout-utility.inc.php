<?php

$filePath = 'includes/config.inc.php';
if(file_exists($filePath)) {
    include($filePath);
}
else {
    include('../' . $filePath);
}

function getShippingTypes() {
    try {
        $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT shipperID, shipperName, shipperDescription, shipperAvgTime, shipperClass, shipperBaseFee, shipperWeightFee
                    FROM TypesShippers";
        $statement = $pdo->prepare($sql);
        $statement->execute();
        while ($row = $statement->fetch()) {
            $ashipper['shipperName'] = $row['shipperName'];
            $ashipper['shipperDescription'] = $row['shipperDescription'];
            $ashipper['shipperAvgTime'] = $row['shipperAvgTime'];
            $ashipper['shipperClass'] = $row['shipperClass'];
            $ashipper['shipperBaseFee'] = $row['shipperBaseFee'];
            $ashipper['shipperWeightFee'] = $row['shipperWeightFee'];
            $ashipper['totalFee'] = $ashipper['shipperBaseFee'] + $ashipper['shipperWeightFee'];
            $shipperTypes[$row['shipperID']] = $ashipper;
        }
        $pdo = null;
        return $shipperTypes;
    }
    catch (PDOException $e) {
        die($e->getMessage());
        return null;
    }
}

function showShippingType() {
    $shipperTypes = getShippingTypes();
    $checked = "checked";
    foreach ($shipperTypes as $key => $value) {
        echo "<div>
                <input type='radio' name='ShippingID' value='".$key."' ".$checked."><label class='shipping-details'>".$value['shipperName']."</label>
                    <label class='shipping-details'> | ".$value["shipperAvgTime"]." | </label>
                    <label class='shipping-details'> | ".$value["shipperBaseFee"]." | </label>
                    <label class='shipping-details'> | ".$value["shipperWeightFee"]." | </label>
            </div>";
        $checked = "";
    }
}

function getMattID($match) {
    try {
        $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT MattID FROM TypesMatt WHERE Title = ? ";
        $statement = $pdo->prepare($sql);
        $statement->bindValue(1, $match);
        $statement->execute();
        $row = $statement->fetch();
        $pdo = null;
        return $row[0];
    }
    catch (PDOException $e) {
        die($e->getMessage());
        return null;
    }
}

function getFrameID($match) {
    try {
        $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT FrameID FROM TypesFrames WHERE Title = ? ";
        $statement = $pdo->prepare($sql);
        $statement->bindValue(1, $match);
        $statement->execute();
        $row = $statement->fetch();
        $pdo = null;
        return $row[0];
    }
    catch (PDOException $e) {
        die($e->getMessage());
        return null;
    }
}

function getGlassID($match) {
    try {
        $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT GlassID FROM TypesGlass WHERE Title = ? ";
        $statement = $pdo->prepare($sql);
        $statement->bindValue(1, $match);
        $statement->execute();
        $row = $statement->fetch();
        $pdo = null;
        return $row[0];
    }
    catch (PDOException $e) {
        die($e->getMessage());
        return null;
    }
}



?>