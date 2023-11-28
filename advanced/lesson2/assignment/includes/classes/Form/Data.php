<?php namespace Form;

/**
 * Class Data
 * @package Form
 */
class Data
{
    /**
     * Data constructor.
     *
     * @param array $post
     */
    public function __construct(private readonly array $post)
    {
    }

    /**
     * Check if a var exists in the current post state
     *
     * @param string $var
     * @return bool
     */
    public function varExists(string $var): bool
    {
        return array_key_exists($var, $this->post);
    }

    /**
     * Retrieve a var from the post array
     *
     * @param string $var
     * @return mixed
     */
    public function getPostVar(string $var): string
    {
        return htmlentities($this->post[$var]);
    }
}
