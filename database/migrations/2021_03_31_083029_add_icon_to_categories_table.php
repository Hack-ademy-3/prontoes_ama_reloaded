<?php

use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIconToCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->string('icon')->nullable()->after('name');
        });
        
        $icons=['bx-car', 'bxs-t-shirt', 'bx-mobile-alt', 'bx-cycling', 'bx-book-reader', 'bxs-wrench'];
        foreach (Category::all() as $pos=>$category) {
            $category->icon=$icons[$pos]; 
            $category->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('icon');
        });
    }
}
