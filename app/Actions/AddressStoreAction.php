<?php

declare(strict_types=1);

namespace App\Actions;

use App\Models\Address;

class AddressStoreAction
{
    public static function save(array $data): bool
    {
        $address = Address::updateOrCreate(
            ['zipcode' => $data['zipcode']],
            [
                'street' => $data['street'],
                'neighborhood' => $data['neighborhood'],
                'city' => $data['city'],
                'state' => $data['state'],
            ]
        );

        // Verifique se o endereço foi criado (true) ou atualizado (false)
        return $address->wasRecentlyCreated;
    }

}



