<?php
require_once './src/Classes/Account.php';
require_once './src/Classes/AccountManager.php';

$manager = new AccountManager('localhost', 'db_banque', 'root', '');

if (isset($_POST['ajouter'])) {
    $accountNum = $_POST['numberAccount'];
    $holderName = $_POST['holderName'];
    $balance = $_POST['balance'];
    $accountType = $_POST['accountType'];

    $newAccount = new Account($accountNum, $holderName, $balance);

    $manager->addAccount($newAccount);

    $accountId = $manager->LastInsertId();

}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création de Compte Bancaire</title>
</head>

<body>
    <form action="" method="POST">
        <h1>Create Account</h1>
        <label for="numberAccount">Number Account</label>
        <input id="numberAccount" type="text" name="numberAccount" required>

        <label for="holderName">Holder Name</label>
        <input id="holderName" type="text" name="holderName" required>

        <label for="balance">Balance</label>
        <input id="balance" type="number" name="balance" step="0.01" required>

        <label for="accountType">Type Account</label>
        <select id="accountType" name="accountType" required>
            <option value="currentAccount">Current Account</option>
            <option value="savingAccount">Saving Account</option>
            <option value="businessAccount">Business Account</option>
        </select>

        <button type="submit" name="ajouter">Ajouter</button>
    </form>
</body>

</html>