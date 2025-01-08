<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Config;
use App\Models\Permi;
use App\Models\Formation;
use App\Models\Contact;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

      /*  User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/

        Config::create([
            "description"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem illum at corrupti odit nostrum ducimus, itaque minus eveniet voluptatum exercitationem rerum natus. Soluta possimus quod reiciendis cumque enim provident ad. Commodi non qui laudantium amet delectus, est eveniet, quia ipsam praesentium sint, facere fugiat explicabo! Numquam cumque est sapiente suscipit unde facilis perspiciatis officia possimus quae quam odit, nisi ea? Esse inventore optio dolore culpa nobis quo, maiores sapiente! Nulla nobis dignissimos, maxime a debitis dicta doloribus sunt perferendis voluptates iure, commodi quibusdam quam quod ad magnam sed temporibus delectus. Culpa, assumenda quae porro numquam non rem, hic odit, quo modi itaque libero dignissimos veniam saepe omnis officia obcaecati. Laborum iste recusandae cumque fuga, officiis molestias error repellendus aspernatur eos? Nam, cum modi tempora hic provident aliquam magni! Veritatis ab perspiciatis aliquam obcaecati cupiditate atque, totam sapiente deserunt nostrum maiores pariatur tempore rem. Fugit tempore, voluptates aliquid eius laudantium odit. Qui voluptatum, ea assumenda laboriosam quisquam optio tenetur veniam doloribus, quis, quaerat a fuga tempore eum rem unde. Amet sequi veritatis dolore aliquam fugit maiores eum possimus ",
            "tel_1"=> "699999999",
            "tel_2"=> "688888888",
            "email"=> "auto@gmail.com"
        ]);


        Permi::create([
            "name"=>"Permis Auto A",
            "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga in veniam, nostrum tempora eum sequi amet earum veritatis voluptas cumque praesentium consequuntur facilis explicabo sunt expedita facere aliquid accusamus? Nihil!",
        ]);

        Permi::create([
            "name"=>"Permis Auto AB",
            "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga in veniam, nostrum tempora eum sequi amet earum veritatis voluptas cumque praesentium consequuntur facilis explicabo sunt expedita facere aliquid accusamus? Nihil!",
        ]);

        Permi::create([
            "name"=>"Permis Auto ABE",
            "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga in veniam, nostrum tempora eum sequi amet earum veritatis voluptas cumque praesentium consequuntur facilis explicabo sunt expedita facere aliquid accusamus? Nihil!",
        ]);


        Formation::create([
            "name"=>"Permis Permis A2",
            "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga in veniam, nostrum tempora eum sequi amet earum veritatis voluptas cumque praesentium consequuntur facilis explicabo sunt expedita facere aliquid accusamus? Nihil!",
        ]);

        Formation::create([
            "name"=>"Passerelle A2 > A",
            "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga in veniam, nostrum tempora eum sequi amet earum veritatis voluptas cumque praesentium consequuntur facilis explicabo sunt expedita facere aliquid accusamus? Nihil!",
        ]);


        Contact::create([
            "name"=>"Estuaire emploi",
            "tel"=>"685788888",
            "email"=>"estuaire@gmail.com",
            "message"=>"message"
        ]);

        Contact::create([
            "name"=>"Estuaire assur",
            "tel"=>"685788888",
            "email"=>"assur@gmail.com",
            "message"=>"message assur"
        ]);
    }
}
