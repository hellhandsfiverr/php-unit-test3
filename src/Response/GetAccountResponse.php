<?php

namespace AllDigitalRewards\Omni\Response;

use AllDigitalRewards\Omni\AbstractEntity;
use AllDigitalRewards\Omni\Entities\Transaction;
use AllDigitalRewards\Omni\Entities\User;

class GetAccountResponse extends AbstractEntity
{
    private $id;
    private $type;
    private $balance;
    private $created;
    /**
     * @var User|null
     */
    private $user;
    /**
     * @var Transaction[]
     */
    private $transaction;

    public function __construct($data = null)
    {
        if (!is_null($data)) {
            $this->hydrate($data);
        }
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param mixed $balance
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param mixed $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return User|null
     */
    public function getUser(): ?User
    {
        return $this->user;
    }

    /**
     * @param array|null $user
     */
    public function setUser(?array $user)
    {
        if (is_null($user) === true) {
            $this->user = null;
            return;
        }
        $this->user = new User($user);
    }

    /**
     * @return Transaction[]
     */
    public function getTransaction(): array
    {
        return $this->transaction;
    }

    /**
     * @param array $transactions
     */
    public function setTransaction(array $transactions)
    {
        foreach ($transactions as $transaction) {
            $this->transaction[] = new Transaction($transaction);
        }
    }
}
