<?php


namespace Source\Models;


use Source\Core\Model;

class Product extends Model
{

    /**
     * Product constructor.
     */
    public function __construct()
    {
        parent::__construct("products", ["id"], ["category", "id", "name", "ingredient", "price"]);
    }

    /**
     * @param string $uri
     * @param string $columns
     * @return Product|null
     * Descrição: [Busca todos registros pela URI]
     */
    public function findByUri(string $uri, string $columns = "*"): ?Product
    {
        $find = $this->find("uri = :uri", "uri={$uri}", $columns);
        return $find->fetch();
    }

    /**
     * @return Category|null
     * Descrição: [Busca a categoria relacionada ao post]
     */
    public function category(): ?Category
    {
        if($this->category)
        {
            return (new Category())->findById($this->category);
        }

        return null;
    }

    public function save(): bool
    {
        /** UPDATE */
        if(!empty($this->id))
        {
            $id = $this->id;
            $this->update($this->safe(), "id = :id", "id={$id}");

            if($this->fail()) {
                $this->message->error("Erro ao tentar atualizar o produto!");
                //echo $this->message->error("Erro ao tentar atualizar o produto!");
                return false;
            }
        }

        /** CREATE*/
        $this->data = $this->findById($id)->data();
        return true;
    }

}