<?php


class ProductRepository extends BaseRepository
{
    /**
     * @param ProductModel $productModel
     */
    public function save(BaseModel $productModel)
    {
        $this->getConnection()->save($productModel);
    }

    /**
     * @param ProductModel $productModel
     */
    public function delete(BaseModel $productModel)
    {
        $this->getConnection()->delete($productModel);
    }
}