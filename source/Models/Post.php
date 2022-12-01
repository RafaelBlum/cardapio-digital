<?php


namespace Source\Models;


use Source\Core\Model;

/**
 * Class Post
 * @package Source\Models
 */
class Post extends Model
{

    /**
     * Post constructor.
     */
    public function __construct()
    {
        parent::__construct("posts", ["id"], ["title", "id", "subtitle", "content"]);
    }


    /**
     * @param string $uri
     * @param string $columns
     * @return Post|null
     * Descrição: [Busca todos registros pela URI]
     */
    public function findByUri(string $uri, string $columns = "*"): ?Post
    {
        $find = $this->find("uri = :uri", "uri={$uri}", $columns);
        return $find->fetch();
    }

    /**
     * @param string|null $terms
     * @param string|null $params
     * @param string $columns
     * @return Model
     * Descrição: [Modificamos o find| Busca todos registros com data menor que atual e status post]
     */
    public function find(?string $terms = null, ?string $params = null, string $columns = "*"): Model
    {
        $terms = "status = :status AND post_at <= NOW()" . ($terms ? " AND {$terms}" : "");
        $params = "status=post" . ($params ? "&{$params}" : "");
        return parent::find($terms, $params, $columns);
    }


    /**
     * @return User|null
     * Descrição: [Busca o user relacionado ao post]
     */
    public function user(): ?User
    {
        if($this->author)
        {
            return (new User())->findById($this->author);
        }

        return null;
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

            //echo var_dump($this->content);

            if($this->fail())
            {
                $this->message->error("Erro ao tentar atualizar o post");
                return false;
            }
        }

        /** CREATE*/
        $this->data = $this->findById($id)->data();
        return true;
    }
}