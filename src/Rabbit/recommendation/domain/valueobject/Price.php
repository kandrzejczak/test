<?php


class Price
{
    /**
     * @var int
     */
    private $value;

    /**
     * Price constructor.
     * @param int $value
     */
    public function __construct(int $value)
    {
        if ($value < 0) {
            throw new \InvalidArgumentException('Price value must be greater equal than 0');
        }

        $this->value = $value;
    }
}