
<?php

use App\Customer;
use App\Repositories\CustomerRepositoryImpl;

class CustomerRepository extends \App\Repositories\Eloquent\EloquentRepository implements CustomerRepositoryImpl
{

    public function getModel()
    {
        // TODO: Implement getModel() method.
        return Customer::class;
    }
}

