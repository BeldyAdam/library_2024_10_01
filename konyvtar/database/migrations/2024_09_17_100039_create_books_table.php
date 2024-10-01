<?php

use App\Models\Book;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
<<<<<<< HEAD
            $table->id('book_id');
            $table->string('author');
            $table->string('title');
=======
            //átnevezzük, Modelben def-ni!
            $table->id('book_id');
            $table->string('author');
            $table->string('title');
            /* $table->integer('pieces'); */
>>>>>>> 237bebc891608ab2c6dac9d2943e396f0ca73568
            $table->timestamps();
        });

        Book::create(['author'=>'Shakespear',
<<<<<<< HEAD
         'title'=> 'Spear'
        ]);

        Book::create(['author'=>'James bond',
         'title'=> 'Mission'
        ]);

        Book::create(['author'=>'John Flaggan',
         'title'=> 'Umbra'
=======
         'title'=> 'Spear',
          /* 'pieces'=> 40 */
        ]);

        Book::create(['author'=>'James bond',
         'title'=> 'Mission',
          /* 'pieces'=> 25 */
        ]);

        Book::create(['author'=>'John Flaggan',
         'title'=> 'Umbra',
          /* 'pieces'=> 10 */
>>>>>>> 237bebc891608ab2c6dac9d2943e396f0ca73568
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
