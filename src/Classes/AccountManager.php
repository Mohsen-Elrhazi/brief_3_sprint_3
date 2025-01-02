<?php
class AccountManager {
    private $pdo;

    public function __construct($host, $dbname, $username, $password) {
            $this->pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    }

    // Ajouter
    public function addAccount(Account $account) {
        $stmt = $this->pdo->prepare("INSERT INTO account (accountNum, holderName, balance) VALUES (:accountNum, :holderName, :balance)");
        $stmt->execute([
            'accountNum' => $account->getAccountNum(),
            'holderName' => $account->getHolderName(),
            'balance' => $account->getBalance()
        ]);
    }

    // Afficher
    public function getAccounts() {
        $stmt = $this->pdo->query("SELECT * FROM account");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // modifier
    public function updateAccount(Account $account) {
        $stmt = $this->pdo->prepare("UPDATE account SET accountNum = :accountNum, holderName = :holderName, balance = :balance WHERE accountID = :id");
        $stmt->execute([
            'accountNum' => $account->getAccountNum(),
            'holderName' => $account->getHolderName(),
            'balance' => $account->getBalance(),
            'id' => $account->getId()
        ]);
    }

    // supprimer
    public function deleteAccount($id) {
        $stmt = $this->pdo->prepare("DELETE FROM account WHERE accountID = :id");
        $stmt->execute(['id' => $id]);
    }
}
?>