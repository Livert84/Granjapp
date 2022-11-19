<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Create test users
        // 2 Administrador
        // 200 Cliente
        // 12 Manager
        // 40 VIP + Cliente



        $admin_users = \App\Models\User::factory()->create([
            'name' => 'Liborio Dibilio',
            'email' => 'admin@granjapp.es',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role' => 'Administrador',

        ]);
        // Create Cliente Users

        $client_users = \App\Models\User::factory(100)->create([
            'role' => 'Cliente'
        ]);


        //  C A T E G O R Y   S E E D E R
        $this->call(CategorySeeder::class);

        //  P R O D U C T   S E E D E R
        $this->call(ProductSeeder::class);

        $clients = \App\Models\User::where('role', 'Cliente')->get();

        foreach ($clients as $client) {
            $order_amount = random_int(0, 4);       // Number of orders that we will assign to the user
            for ($i = 0; $i < $order_amount; $i++) {
                $order = \App\Models\Order::factory()->create([
                    "user_id" => $client->id,
                    "status" => "processing"
                ]);
                $products = \App\Models\Product::inRandomOrder()->limit(random_int(1,10))->get();
                foreach ($products as $product) {
                    $units = random_int(1, 5);
                    $order->products()->attach($product, ["units" => $units]);
                    $order->total_price += $product->price * $units;
                }
                $order->save();
            }
        }
    }
}
