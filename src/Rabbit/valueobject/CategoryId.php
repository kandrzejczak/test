<?php


class CategoryId
{
    /**
     * @var int
     */
    private $id;

    /**
     * CategoryId constructor.
     * @param int $id
     */
    public function __construct(int $id)
    {
        if ($id < 0) {
            throw new \InvalidArgumentException('Id value must be greater than 0');
        }

        $this->id = $id;
    }
}