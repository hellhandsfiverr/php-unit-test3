<?php

namespace AllDigitalRewards\Omni\Response;

use AllDigitalRewards\Omni\AbstractEntity;
use AllDigitalRewards\Omni\Entities\Transaction;

class GetAccountResponse extends AbstractEntity
{
    private $id;
    private $type;
    private $balance;
    private $created;
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
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return Transaction[]
     */
    public function getTransaction(): array
    {
        return $this->transaction;
    }

    /**
     * @param Transaction[] $transaction
     */
    public function setTransaction(array $transaction)
    {
        $this->transaction = $transaction;
    }
}
