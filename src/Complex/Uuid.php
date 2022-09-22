<?php

declare(strict_types=1);

namespace MichaelRubel\ValueObjects\Complex;

use Illuminate\Support\Traits\Conditionable;
use Illuminate\Support\Traits\Macroable;
use MichaelRubel\ValueObjects\ValueObject;

/**
 * @method static static make(string $uuid, string $name)
 */
class Uuid extends ValueObject
{
    use Macroable, Conditionable;

    /**
     * Create a new instance of the value object.
     *
     * @param  string|null  $uuid
     * @param  string|null  $name
     */
    public function __construct(
        protected ?string $uuid,
        protected ?string $name = null,
    ) {
        //
    }

    /**
     * @return string
     */
    public function uuid(): string
    {
        return $this->value();
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return (string) $this->name;
    }

    /**
     * Get the object value.
     *
     * @return string
     */
    public function value(): string
    {
        return (string) $this->uuid;
    }

    /**
     * Get an array representation of the value object.
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'name'  => $this->name(),
            'value' => $this->value(),
        ];
    }
}
