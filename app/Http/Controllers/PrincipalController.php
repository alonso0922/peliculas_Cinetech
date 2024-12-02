<?php

namespace App\Http\Controllers;

use App\Models\Peliculas;
use App\Models\Series;
use Illuminate\Http\Request;


class PrincipalController extends Controller
{

    public function index()
    {
        $peliculas = Peliculas::paginate(8);
        $series = Series::paginate(8);
        return view('index', compact('peliculas', 'series'));
    }

    public function agregarP()
    {
        $pel = Peliculas::all();
        return view('agregarP', compact('pel'));
    }

    public function agregarS()
    {
        $ser = Series::all();
        return view('agregarS', compact('ser'));
    }

    public function creadores()
    {
        return view('creadores');
    }

    public function peliculas()
    {
        $peliculasPredefinidas = [
            [ 'id' => 1,'nombre'=>'Extraction','sinopsis'=>'Tyler Rake (Hemsworth) es un mercenario que ofrece sus servicios en el mercado negro, y al que contratan para una peligrosa misión: rescatar al hijo secuestrado del príncipe jefe de la mafia india que se encuentra en prisión. Secuestrado por un capo de la mafia tailandesa, una misión que se preveía suicida se convierte en un desafío casi imposible que cambiará para siempre las vidas de Tyler y el chico.','duracion'=>'1h 56m','categoria'=>'Accion','personaje'=>'Tyler Rake','imagen'=>'/imagenes/Extraction.jpg','trailer'=>'https://www.youtube.com/embed/MPywd1FVFd0?si=WT5xRWAB117SgXFj'],
                        ['id' => 2,'nombre'=>'Avengers: Endgame','sinopsis'=>'Después de los eventos devastadores de "Avengers: Infinity War", el universo está en ruinas debido a las acciones de Thanos, el Titán Loco. Con la ayuda de los aliados que quedaron, los Vengadores deberán reunirse una vez más para intentar detenerlo y restaurar el orden en el universo de una vez por todas.','duracion'=>'3h 1m','categoria'=>'Ciencia Ficcion','personaje'=>'Iron-Man,Captain America,Thanos','imagen'=>'/imagenes/endgame.jpg','trailer'=>'https://www.youtube.com/embed/KdL8ucqi1F8?si=qGKdSCB3liZBpp40" '],
                        ['id' => 3,'nombre'=>'John Wick','sinopsis'=>'La ciudad de Nueva York se llena de balas cuando John Wick, un exasesino a sueldo, regresa de su retiro para enfrentar a los mafiosos rusos, liderados por Viggo Tarasov, que destruyeron todo aquello que él amaba y pusieron precio a su cabeza.','duracion'=>'1h 45m','categoria'=>'Accion','personaje'=>'Jonathan Wick','imagen'=>'/imagenes/john.jpg','trailer'=>'https://www.youtube.com/embed/r1u1zWsY4DU?si=7sktNCjbUesxaKTQ' ],
                        ['id' => 4,'nombre'=>'Cars','sinopsis'=>'El aspirante a campeón de carreras Rayo McQueen parece que está a punto de conseguir el éxito. Su actitud arrogante se desvanece cuando llega a una pequeña comunidad olvidada que le enseña las cosas importantes de la vida que había olvidado.','duracion'=>'1h 57m','categoria'=>'Infantil/comedia','personaje'=>'Lightning McQueen Mate','imagen'=>'/imagenes/cars.jpg','trailer'=>'https://www.youtube.com/embed/nuQDFYpPUh4?si=DDNBZDR6V4MkoRt7'],
                        ['id' => 5,'nombre' => 'Forrest Gump','sinopsis'=>'Sentado en un banco en Savannah, Georgia, Forrest Gump espera al autobús. Mientras éste tarda en llegar, el joven cuenta su vida a las personas que se sientan a esperar con él. Aunque sufre un pequeño retraso mental, esto no le impide hacer cosas maravillosas. Sin entender del todo lo que sucede a su alrededor, Forrest toma partido en los eventos más importantes de la historia de los Estados Unidos.', 'duracion'=> '2h 22m', 'categoria'=> 'Comedia/Romance', 'personaje' => 'Forest Gump','imagen'=>'/imagenes/forest.jpg','trailer'=>'https://www.youtube.com/embed/GIs2gpWpBiQ?si=VcPFAG-ZYuvNjK5N']
        ];

        $peliculasBaseDatos = Peliculas::all();
        $peliculas = collect($peliculasPredefinidas)->merge($peliculasBaseDatos);
        return view('peliculas', compact('peliculas'));
    }

    public function series()
    {
        $seriesPredefinidas = [
            [
                'id' => 1, 'nombre'=>'THE BOYS','sinopsis'=>'THE BOYS es una mirada irreverente sobre la idea de qué sucedería si los superhéroes, quienes son tan populares como las celebridades, más influyentes que los políticos y venerados como dioses, abusaran de sus poderes en vez de dedicarse a hacer el bien.','episodios'=>'32','duracion'=> '60 min','categoria'=>'Peliculas de Superheroes','personaje' => 'Homelander','imagen'=>'/imagenes/theboys.jpg','trailer'=>'https://www.youtube.com/embed/F0cvD8kzgkA?si=jOj3d6hKoxnYap_I'],
           ['id' => 2, 'nombre'=>'The Walking Dead','sinopsis'=>'En un mundo devastado por un apocalipsis zombi, una banda multicolor de sobrevivientes se une buscando la seguridad y las respuestas dentro de los muros del CDC', 'episodios' => '177','duracion'=> '60 min', 'categoria' => 'Thriller','personaje' => 'Rick Grimes,Negan,Daryl Dixon','imagen'=>'/imagenes/walking.jpg','trailer'=>'https://www.youtube.com/embed/sfAc2U20uyg?si=-eVI5pgjza2PT2SS'],
          ['id' => 3,'nombre'=>'Breaking Bad','sinopsis'=>'Un profesor de química con cáncer terminal se asocia con un exalumno suyo para fabricar y vender metanfetamina a fin de que su familia no pase apuros económicos','episodios' => '62','duracion'=> '	43–58 minutos', 'categoria' => 'Drama','personaje' => 'Walter White,Jesse Pinkman','imagen'=>'/imagenes/breaking.jpg','trailer'=>'https://www.youtube.com/embed/HhesaQXLuRY?si=-7V-1jju-Nd_IuUS'
    ],
    ['id' => 4,'nombre' => 'Peaky Blinders', 'sinopsis' => 'Narra la historia de la banda criminal del mismo nombre. Liderados por Thomas Shelby, controlan Birmingham durante las décadas de 1920 y 1930. A través del soborno, la violencia, la extorsión y el tráfico ilegal, consolidan su control sobre la ciudad.', 'episodios' => '36', 'duracion'=> '60 min','categoria' => 'Drama','personaje' => 'Thomas Shelby,Arhur Shelby','imagen'=>'/imagenes/peaky.jpg','trailer'=>'https://www.youtube.com/embed/X3PGOaEfCmQ?si=xaJ6odUuahh67JUG'
],
['id' => 5,'nombre' => 'Cobra kai','sinopsis' => ' Cobra Kai es la secuela de la famosa saga cinematográfica Karate Kid. La serie sigue la historia 30 años después del campeonato de 1984, en el que Johnny no se encuentra en el mejor momento de su vida por lo que decide volver a abrir el famoso Dojo Cobra Kai',
        'episodios' => '45','duracion'=> '	22-48 min', 'categoria' => 'Acción','personaje' => 'Johny Lawrence,Miguel Diaz','imagen'=>'/imagenes/cobra.jpg','trailer'=>'https://www.youtube.com/embed/CfOuYm8EnBA?si=BBDemcmZlrGDpPue']
];
    

        $seriesBaseDatos = Series::all();
        $series = collect($seriesPredefinidas)->merge($seriesBaseDatos);
        return view('series', compact('series'));
    }

    public function guardarP(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'sinopsis' => 'required',
            'duracion' => 'required',
            'categoria' => 'required',
            'personaje' => 'required|string',
            'imagen' => 'required|image',
            'trailer' => 'required',
        ]);

        $imagen = $request->file('imagen');
        $nombreImagen = time() . '.' . $imagen->getClientOriginalExtension();
        $imagen->move(public_path('imagenes'), $nombreImagen);

        Peliculas::create([
            'nombre' => $request->nombre,
            'sinopsis' => $request->sinopsis,
            'duracion' => $request->duracion,
            'categoria' => $request->categoria,
            'personaje' => $request->personaje,
            'imagen' => $nombreImagen,
            'trailer' => $request->trailer
        ]);

        return redirect()->route('index')->with('mensaje', 'Película agregada correctamente');
    }

    
    public function guardarS(Request $request)
    {
        $request->validate([
            'imagen' => 'required|image',
            'nombre' => 'required',
            'sinopsis' => 'required',
            'episodios' => 'required|numeric',
            'duracion' => 'required',
            'categoria' => 'required',
            'personaje' => 'required|string',
            'trailer' => 'required',
        ]);

        $imagen = $request->file('imagen');
        $nombreImagen = time() . '.' . $imagen->getClientOriginalExtension();
        $imagen->move(public_path('imagenes'), $nombreImagen);

        Series::create([
            'nombre' => $request->nombre,
            'sinopsis' => $request->sinopsis,
            'episodios' => $request->episodios,
            'duracion' => $request->duracion,
            'categoria' => $request->categoria,
            'personaje' => $request->personaje,
            'imagen' => $nombreImagen,
            'trailer' => $request->trailer
        ]);

        return redirect()->route('index')->with('mensaje2', 'Serie agregada correctamente');
    }
    public function buscarS(Request $request)
{
    $buscar = $request->input('buscar');
    
    // Paginación para Películas
    $peliculas = Peliculas::query()
    ->where('nombre', 'LIKE', '%' . $buscar . '%')
    ->orWhere('sinopsis', 'LIKE', '%' . $buscar . '%')
    ->orWhere('categoria', 'LIKE', '%' . $buscar . '%')
    ->orWhere('personaje', 'LIKE', '%' . $buscar . '%')
    ->paginate(5);
   
    
    // Paginación para Series
    $series = Series::query()
    ->where('nombre', 'LIKE', '%' . $buscar . '%')
    ->orWhere('sinopsis', 'LIKE', '%' . $buscar . '%')
    ->orWhere('sinopsis', 'LIKE', '%' . $buscar . '%')
    ->orWhere('categoria', 'LIKE', '%' . $buscar . '%')
    ->orWhere('personaje', 'LIKE', '%' . $buscar . '%')
    ->paginate(5);
    return view('index', compact('peliculas', 'series')); // Pasar las variables a la vista
}


    public function eliminar($id)
{
    // Buscar la serie por el ID
    $serie = Series::find($id);

    if ($serie) {
        // Eliminar la serie
        $serie->delete();

        // Redirigir con un mensaje de éxito
        return redirect()->route('index')->with('mensaje2', 'Serie eliminada correctamente');
    } 
}

    public function eliminar1($id)
    {
        // Buscar la serie por el ID
        $pelicula = Peliculas::find($id);
    
        if ($pelicula) {
           
            $pelicula->delete();
    
            // Redirigir con un mensaje de éxito
            return redirect()->route('index')->with('mensaje', 'Pelicula eliminada correctamente');

    }

}
    
    public function editarP($id)
{
    $pelicula = Peliculas::find($id);
    if (!$pelicula) {
        return redirect()->route('index')->with('mensaje', 'Película no encontrada');
    }
    return view('editarP', compact('pelicula'));
}

public function actualizarP(Request $request, $id)
{
    $request->validate([
        'nombre' => 'required',
        'sinopsis' => 'required',
        'duracion' => 'required',
        'categoria' => 'required',
        'personaje' => 'required|string',
        'imagen' => 'image' // Esta es opcional, ya que puede no querer cambiar la imagen
    ]);

    $pelicula = Peliculas::find($id);
    if (!$pelicula) {
        return redirect()->route('index')->with('mensaje', 'Película no encontrada');
    }

    // Si se sube una nueva imagen
    if ($request->hasFile('imagen')) {
        $imagen = $request->file('imagen');
        $nombreImagen = time() . '.' . $imagen->getClientOriginalExtension();
        $imagen->move(public_path('imagenes'), $nombreImagen);
        $pelicula->imagen = $nombreImagen;
    }

    $pelicula->nombre = $request->nombre;
    $pelicula->sinopsis = $request->sinopsis;
    $pelicula->duracion = $request->duracion;
    $pelicula->categoria = $request->categoria;
    $pelicula->personaje = $request->personaje;
    $pelicula->save();

    return redirect()->route('index')->with('mensaje', 'Película actualizada correctamente');
}

public function editarS($id)
{
    $serie = Series::find($id);
    if (!$serie) {
        return redirect()->route('index')->with('mensaje2', 'Serie no encontrada');
    }
    return view('editarS', compact('serie'));
}

public function actualizarS(Request $request, $id)
{
    $request->validate([
        'nombre' => 'required',
        'sinopsis' => 'required',
        'episodios' => 'required|numeric',
        'duracion' => 'required',
        'categoria' => 'required',
        'personaje' => 'required|string',
        'imagen' => 'image' // Esta es opcional, ya que puede no querer cambiar la imagen
    ]);

    $serie = Series::find($id);
    if (!$serie) {
        return redirect()->route('index')->with('mensaje2', 'Serie no encontrada');
    }

    // Si se sube una nueva imagen
    if ($request->hasFile('imagen')) {
        $imagen = $request->file('imagen');
        $nombreImagen = time() . '.' . $imagen->getClientOriginalExtension();
        $imagen->move(public_path('imagenes'), $nombreImagen);
        $serie->imagen = $nombreImagen;
    }

    $serie->nombre = $request->nombre;
    $serie->sinopsis = $request->sinopsis;
    $serie->episodios = $request->episodios;
    $serie->duracion = $request->duracion;
    $serie->categoria = $request->categoria;
    $serie->personaje = $request->personaje;
    $serie->save();

    return redirect()->route('index')->with('mensaje2', 'Serie actualizada correctamente');
}
}

