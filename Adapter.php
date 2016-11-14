<?php

/**
 * No Adapter
 *
 * $user = new User();
 * $user->CreateOrUpdate( // параметры );
 *
 * $profile = new Profile();
 * $profile->CreateOrUpdate( // параметры );
 */

class Account
{
    public function NewAccount( $param )
    {
        $user = new User();
        $user->CreateOrUpdate( $param );

        $profile = new Profile();
        $profile->CreateOrUpdate( $param );
    }
}



$account_domain = new Account();
$account_domain->NewAccount( $param );