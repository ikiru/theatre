<?php

namespace App\Http\GraphQL\Queries;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Nuwave\Lighthouse\Support\Definition\GraphQLQuery;

class DonorListQuery extends GraphQLQuery
{
    /**
     * Type query returns.
     *
     * @return Type
     */
    public function type()
    {
        return GraphQL::type('Donor');
    }

    /**
     * Available query arguments.
     *
     * @return array
     */
    public function args()
    {
        return [];
    }

    /**
     * Resolve the query.
     *
     * @param  mixed  $root
     * @param  array  $args
     * @return mixed
     */
    public function resolve($root, array $args)
    {
        // TODO: Resolve query

        return Donor();

    }
}
