<?php

use Illuminate\Database\Seeder;
use App\Models\Roles;
use Carbon\Carbon;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        Roles::insert([
            ['name' => 'master-admin', 'permission' => '["createUser","updateUser","viewUser","deleteUser","createRole","updateRole","viewRole","deleteRole","createCurrency","updateCurrency","viewCurrency","deleteCurrency","createCategory","updateCategory","viewCategory","deleteCategory","createProduct","updateProduct","viewProduct","deleteProduct","createTag","updateTag","viewTag","deleteTag","createBanner","updateBanner","viewBanner","deleteBanner","createPage","updatePage","viewPage","deletePage","updateSetting","updateHome","updateProfile","viewContact","deleteContact"]', 'created_by' => 1, 'created_at' => $now],
            ['name' => 'admin', 'permission' => '["createUser","updateUser","viewUser","deleteUser","createRole","updateRole","viewRole","deleteRole","createCurrency","updateCurrency","viewCurrency","deleteCurrency","createCategory","updateCategory","viewCategory","deleteCategory","createProduct","updateProduct","viewProduct","deleteProduct","createTag","updateTag","viewTag","deleteTag","createBanner","updateBanner","viewBanner","deleteBanner","createPage","updatePage","viewPage","deletePage","updateSetting","updateHome","updateProfile","viewContact","deleteContact"]', 'created_by' => 1, 'created_at' => $now],
            ['name' => 'customer', 'permission' => '["updateProfile"]', 'created_by' => 1, 'created_at' => $now],
        ]);
    }
}
