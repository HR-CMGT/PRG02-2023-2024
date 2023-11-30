<?php namespace System\Form\Validation;

use System\Users\User;

/**
 * Class LoginValidator
 * @package System\Form\Validation
 */
class LoginValidator implements Validator
{
    private array $errors = [];

    /**
     * LoginValidator constructor.
     *
     * @param User $user
     * @param string $password
     */
    public function __construct(private readonly User $user, private readonly string $password)
    {
    }

    /**
     * Validate the data
     */
    public function validate(): void
    {
        //Go on if we got an user (which means email is correct)
        if (!empty($this->user->email)) {
            //Validate password
            if (!password_verify($this->password, $this->user->password)) {
                $this->errors[] = 'Your password is incorrect!';
            }
        } else {
            $this->errors[] = 'Your email does not exist!';
        }
    }

    /**
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
}
