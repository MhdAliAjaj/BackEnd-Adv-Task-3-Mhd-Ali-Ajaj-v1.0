<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Services\MovieService;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    protected $movieService;

    public function __construct(MovieService $movieService)
    {
        $this->movieService = $movieService;
        
    }

    public function index(Request $request)
    {
        $filters = $request->only(['genre', 'director']);
        $sortField = $request->get('sortField', 'release_year');
        $sortOrder = $request->get('sortOrder', 'asc');
        $perPage = $request->get('perPage', 10);

        return $this->movieService->getMovies($filters, $sortField, $sortOrder, $perPage);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'director' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'release_year' => 'integer',
            'description' => 'nullable|string',
        ]);

        $movie = $this->movieService->createMovie($data);

        return response()->json($movie, 201);
        
       
    }

    public function show(Movie $movie)
    {
        return response()->json($movie);
    }

    public function update(Request $request, Movie $movie)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'director' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'release_year' => 'required|integer',
            'description' => 'nullable|string',
        ]);

        $movie = $this->movieService->updateMovie($movie, $data);

        return response()->json($movie);
    }

    public function destroy(Movie $movie)
    {
        $this->movieService->deleteMovie($movie);

        return response()->json(null, 204);
    }
}

