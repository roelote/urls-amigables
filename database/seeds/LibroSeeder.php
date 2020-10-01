<?php

use App\Libro;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        // con eloquent
        Libro::create([
            'slug'=>'url-del-la-pagina',
            'nombre' => 'don quijote de la mancha',
            'contenido' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac diam a purus blandit pulvinar vitae et enim. Mauris convallis sapien ut erat interdum, eu laoreet velit viverra. Curabitur felis eros, vestibulum at diam eu, vulputate cursus augue. Mauris a arcu fermentum, scelerisque massa sed, iaculis arcu. Curabitur fringilla iaculis est. Integer vel ultrices sem ',
        ]);

        //con el constructor de mysql

        DB::table('libros')->insert([
            'slug'=>'url-del-la-pagina-2',
            'nombre' => '50 sombras de gray',
            'contenido' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac diam a purus blandit pulvinar vitae et enim. Mauris convallis sapien ut erat interdum, eu laoreet velit viverra. Curabitur felis eros, vestibulum at diam eu, vulputate cursus augue. Mauris a arcu fermentum, scelerisque massa sed, iaculis arcu. Curabitur fringilla iaculis est. Integer vel ultrices sem, in bibendum odio. Praesent egestas sit amet urna in porttitor. Suspendisse condimentum nunc est, id accumsan odio consectetur eu. ',
        ]);

        DB::table('libros')->insert([
            'slug'=>'url-del-la-pagina-3',
            'nombre' => 'paco yunke',
            'contenido' => ' Mauris mattis sagittis risus non hendrerit. Suspendisse et lorem id arcu ornare auctor tempus ac nulla. Proin a enim a magna laoreet imperdiet in sit amet nisi. Suspendisse varius eleifend pharetra. In hac habitasse platea dictumst. Fusce iaculis erat nec quam vulputate congue. Aliquam cursus augue a nibh vehicula gravida. Maecenas id eleifend tortor, vitae pellentesque neque. Sed lacinia ex at mi semper ornare. Etiam vulputate massa orci, tincidunt venenatis velit ultricies et. Donec non eros arcu. Praesent nec elit sit amet felis vulputate tempus. Proin hendrerit accumsan sapien ut commodo. Vivamus non mattis massa. Etiam elementum lacus eu orci interdum, et tincidunt mi imperdiet. Nam vitae ante nibh. ',
        ]);

        DB::table('libros')->insert([
            'slug'=>'url-del-la-pagina-4',
            'nombre' => 'el zorro',
            'contenido' => ' Integer hendrerit ex in congue molestie. Sed condimentum diam ut ornare scelerisque. In a mi vel metus malesuada pulvinar vel nec lectus. Nullam vitae metus vitae ante eleifend accumsan semper eu lacus. Suspendisse congue euismod neque faucibus sollicitudin. Sed posuere rhoncus mauris non venenatis. Morbi euismod tellus non molestie congue. Phasellus elementum gravida nulla. Aliquam convallis porttitor tortor vel tincidunt. ',
        ]);
    }
}
