<?php

use Illuminate\Database\Seeder;
use App\Models\Page;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::insert([
           ['title' => 'About Us', 'sort_order' => 1, 'slug' => 'about-us', 'image' => 'assets/uploads/page/about.jpg', 'description' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam iste eaque vero autem maxime non natus ipsum voluptate perferendis officiis inventore consequuntur id repellat, deserunt laudantium aliquid totam obcaecati incidunt! Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, magni inventore totam labore tempore ad iste repellendus id numquam asperiores quam exercitationem placeat delectus ipsa dignissimos ducimus ipsam nam praesentium. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint eos hic voluptate sed rem. Atque nihil ex, alias animi aspernatur accusantium qui nostrum omnis corrupti cum, explicabo facilis sint voluptatem? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis non odio cupiditate aspernatur sed, nesciunt consectetur quaerat saepe voluptas dolore incidunt corrupti, officiis tempora! Iusto alias nesciunt commodi pariatur repudiandae?</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus distinctio reiciendis nisi corrupti odit nulla non temporibus ducimus, iusto omnis assumenda iste labore fuga illum cupiditate magnam nostrum sunt commodi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi alias ut ratione odio itaque, expedita est aperiam atque. Magni recusandae natus doloremque consectetur? Provident voluptatum nostrum optio ratione nam? Et. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum suscipit exercitationem earum, commodi libero sapiente dolores! Atque nobis alias facere et porro nisi, necessitatibus adipisci, veritatis reiciendis voluptatem vel consectetur? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium laboriosam rem laudantium sed explicabo numquam delectus odit officia ratione. Eaque tempora soluta possimus suscipit. Delectus consectetur explicabo rerum. Delectus, natus.</p>', 'status' => 1, 'created_at' => now()],
            ['title' => 'Delivery Information', 'sort_order' => 4, 'slug' => 'delivery-information', 'image' => 'assets/uploads/page/about.jpg', 'description' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam iste eaque vero autem maxime non natus ipsum voluptate perferendis officiis inventore consequuntur id repellat, deserunt laudantium aliquid totam obcaecati incidunt! Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, magni inventore totam labore tempore ad iste repellendus id numquam asperiores quam exercitationem placeat delectus ipsa dignissimos ducimus ipsam nam praesentium. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint eos hic voluptate sed rem. Atque nihil ex, alias animi aspernatur accusantium qui nostrum omnis corrupti cum, explicabo facilis sint voluptatem? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis non odio cupiditate aspernatur sed, nesciunt consectetur quaerat saepe voluptas dolore incidunt corrupti, officiis tempora! Iusto alias nesciunt commodi pariatur repudiandae?</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus distinctio reiciendis nisi corrupti odit nulla non temporibus ducimus, iusto omnis assumenda iste labore fuga illum cupiditate magnam nostrum sunt commodi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi alias ut ratione odio itaque, expedita est aperiam atque. Magni recusandae natus doloremque consectetur? Provident voluptatum nostrum optio ratione nam? Et. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum suscipit exercitationem earum, commodi libero sapiente dolores! Atque nobis alias facere et porro nisi, necessitatibus adipisci, veritatis reiciendis voluptatem vel consectetur? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium laboriosam rem laudantium sed explicabo numquam delectus odit officia ratione. Eaque tempora soluta possimus suscipit. Delectus consectetur explicabo rerum. Delectus, natus.</p>', 'status' => 1, 'created_at' => now()],
            ['title' => 'Privacy & Return Policy', 'sort_order' => 3, 'slug' => 'privacy-and-return-policy', 'image' => 'assets/uploads/page/about.jpg', 'description' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam iste eaque vero autem maxime non natus ipsum voluptate perferendis officiis inventore consequuntur id repellat, deserunt laudantium aliquid totam obcaecati incidunt! Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, magni inventore totam labore tempore ad iste repellendus id numquam asperiores quam exercitationem placeat delectus ipsa dignissimos ducimus ipsam nam praesentium. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint eos hic voluptate sed rem. Atque nihil ex, alias animi aspernatur accusantium qui nostrum omnis corrupti cum, explicabo facilis sint voluptatem? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis non odio cupiditate aspernatur sed, nesciunt consectetur quaerat saepe voluptas dolore incidunt corrupti, officiis tempora! Iusto alias nesciunt commodi pariatur repudiandae?</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus distinctio reiciendis nisi corrupti odit nulla non temporibus ducimus, iusto omnis assumenda iste labore fuga illum cupiditate magnam nostrum sunt commodi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi alias ut ratione odio itaque, expedita est aperiam atque. Magni recusandae natus doloremque consectetur? Provident voluptatum nostrum optio ratione nam? Et. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum suscipit exercitationem earum, commodi libero sapiente dolores! Atque nobis alias facere et porro nisi, necessitatibus adipisci, veritatis reiciendis voluptatem vel consectetur? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium laboriosam rem laudantium sed explicabo numquam delectus odit officia ratione. Eaque tempora soluta possimus suscipit. Delectus consectetur explicabo rerum. Delectus, natus.</p>', 'status' => 1, 'created_at' => now()],
            ['title' => 'Terms & Conditions', 'sort_order' => 2, 'slug' => 'terms-and-conditions', 'image' => 'assets/uploads/page/about.jpg', 'description' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam iste eaque vero autem maxime non natus ipsum voluptate perferendis officiis inventore consequuntur id repellat, deserunt laudantium aliquid totam obcaecati incidunt! Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, magni inventore totam labore tempore ad iste repellendus id numquam asperiores quam exercitationem placeat delectus ipsa dignissimos ducimus ipsam nam praesentium. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint eos hic voluptate sed rem. Atque nihil ex, alias animi aspernatur accusantium qui nostrum omnis corrupti cum, explicabo facilis sint voluptatem? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis non odio cupiditate aspernatur sed, nesciunt consectetur quaerat saepe voluptas dolore incidunt corrupti, officiis tempora! Iusto alias nesciunt commodi pariatur repudiandae?</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus distinctio reiciendis nisi corrupti odit nulla non temporibus ducimus, iusto omnis assumenda iste labore fuga illum cupiditate magnam nostrum sunt commodi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi alias ut ratione odio itaque, expedita est aperiam atque. Magni recusandae natus doloremque consectetur? Provident voluptatum nostrum optio ratione nam? Et. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum suscipit exercitationem earum, commodi libero sapiente dolores! Atque nobis alias facere et porro nisi, necessitatibus adipisci, veritatis reiciendis voluptatem vel consectetur? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium laboriosam rem laudantium sed explicabo numquam delectus odit officia ratione. Eaque tempora soluta possimus suscipit. Delectus consectetur explicabo rerum. Delectus, natus.</p>', 'status' => 1, 'created_at' => now()],
        ]);
    }
}
