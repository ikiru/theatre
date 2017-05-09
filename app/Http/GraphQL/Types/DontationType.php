<?php

namespace App\Http\GraphQL\Types;

use App\Donation;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Nuwave\Lighthouse\Support\Definition\GraphQLType;
use Nuwave\Lighthouse\Support\Interfaces\RelayType;

class DontationType extends GraphQLType implements RelayType
{
    /**
     * Attributes of type.
     *
     * @var array
     */
    protected $attributes = [
        'name' => 'Donation',
        'description' => 'name of item donated'
    ];

    /**
     * Get model by id.
     *
     * Note: When the root 'node' query is called, this method
     * will be used to resolve the type by providing the id.
     *
     * @param  mixed $id
     * @return mixed
     */
    public function resolveById($id)
    {
        //TODO: Resolve by id.
        return Donation::find($id);

    }

    /**
     * Type fields.
     *
     * @return array
     */
    public function fields()
    {
        return [

          'name' => Type::string();
          'description' => 'Name of the object donated'

          'value' => Type::integer();
          'description' => 'Name of the donor'

        ];
    }
}
