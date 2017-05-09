<?php

namespace App\Http\GraphQL\Types;

use App\Donor;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Nuwave\Lighthouse\Support\Definition\GraphQLType;
use Nuwave\Lighthouse\Support\Interfaces\RelayType;

class DonorType extends GraphQLType implements RelayType
{
    /**
     * Attributes of type.
     *
     * @var array
     */
    protected $attributes = [
        'name' => 'Donor',
        'description' => 'Name of the Donor'
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
        return Donor::find($id);
    }

    /**
     * Type fields.
     *
     * @return array
     */
    public function fields()
    {
        return [

          'business_name' => Type::string();
          'description' => 'Name of the donor'

          'phone' => Type::string();
          'description' => 'Phone number of the donor'

          'firstname' => Type::string();
          'description' => 'First name of the donor'

          'lastname' => Type::string();
          'description' => 'last name of the donor'

        ];
    }
}
