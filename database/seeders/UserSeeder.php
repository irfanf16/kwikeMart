<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $AdminRole=new Role();
//        $AdminRole->id=Str::uuid()->toString();
        $AdminRole->name='Admin';
//        $AdminRole->slug='admin';
        $AdminRole->save();

        $AdminUser=new User();
//        $AdminUser->id= Str::uuid()->toString();
        $AdminUser->first_name = ' Admin';
        $AdminUser->last_name = ' Admin';
        $AdminUser->phone = ' 030000000';
        $AdminUser->email = 'admin@gmail.com';
        $AdminUser->password = bcrypt('password');
        $AdminUser->save();
        $AdminUser->roles()->attach($AdminRole);


        $RetailerRole=new Role();
//        $RetailerRole->id=Str::uuid()->toString();
        $RetailerRole->name='Retailer';
//        $RetailerRole->slug='retailer';
        $RetailerRole->save();

        $RetailerUser=new User();
//        $RetailerUser->id= Str::uuid()->toString();
        $RetailerUser->first_name = ' Retailer';
        $RetailerUser->last_name = ' Retailer';
        $RetailerUser->phone = ' 0300000200';
        $RetailerUser->email = 'retailer@gmail.com';
        $RetailerUser->password = bcrypt('password');
        $RetailerUser->save();
        $RetailerUser->roles()->attach($RetailerRole);


        $CustomerRole=new Role();
//        $CustomerRole->id=Str::uuid()->toString();
        $CustomerRole->name='Customer';
//        $CustomerRole->slug='customer';
        $CustomerRole->save();

        $CutomerUser=new User();
//        $CutomerUser->id= Str::uuid()->toString();
        $CutomerUser->first_name = ' customer';
        $CutomerUser->last_name = ' customer';
        $CutomerUser->phone = ' 03000240000';
        $CutomerUser->email = 'customer@gmail.com';
//        $CutomerUser->password = bcrypt('password');
        $CutomerUser->save();
        $CutomerUser->roles()->attach($CustomerRole);



        $DriverRole=new Role();
//        $DriverRole->id=Str::uuid()->toString();
        $DriverRole->name='Driver';
//        $DriverRole->slug='driver';
        $DriverRole->save();

        $driverUser=new User();
//        $driverUser->id= Str::uuid()->toString();
        $driverUser->first_name = ' driver';
        $driverUser->last_name = ' driver';
        $driverUser->phone = ' 03000054000';
        $driverUser->email = 'driver@gmail.com';
//        $driverUser->password = bcrypt('password');
        $driverUser->save();
        $driverUser->roles()->attach($DriverRole);

    }
}
