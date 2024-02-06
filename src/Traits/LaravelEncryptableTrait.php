<?php

namespace VentureDrake\LaravelEncryptable\Traits;

use Illuminate\Contracts\Encryption\DecryptException;

trait LaravelEncryptableTrait
{
    /**
     * If the attribute is in the encryptable array
     * then decrypt it.
     *
     * @param  $key
     *
     * @return $value
     */
    public function getAttribute($key)
    {
        $value = parent::getAttribute($key);
        
        if (config('laravel-encryptable.enabled') && in_array($key, $this->encryptable) && trim($value) !== '') {
            $value = $this->decryptField($value);
        }

        return $value;
    }

    /**
     * If the attribute is in the encryptable array
     * then encrypt it.
     *
     * @param $key
     * @param $value
     */
    public function setAttribute($key, $value)
    {
        if (config('laravel-encryptable.enabled') && in_array($key, $this->encryptable) && $value) {
            $value = encrypt($value);
        }

        return parent::setAttribute($key, $value);
    }

    /**
     * When need to make sure that we iterate through
     * all the keys.
     *
     * @return array
     */
    public function attributesToArray()
    {
        $attributes = parent::attributesToArray();
        foreach ($this->encryptable as $key) {
            if (isset($attributes[$key])) {
                $attributes[$key] = $this->decryptField($attributes[$key]);
            }
        }

        return $attributes;
    }

    public function getEncryptable()
    {
        return $this->encryptable;
    }

    public function decryptField($value)
    {
        try {
            $decrypted = decrypt($value);
        } catch (DecryptException $e) {
        }

        return $decrypted ?? $value;
    }
}
