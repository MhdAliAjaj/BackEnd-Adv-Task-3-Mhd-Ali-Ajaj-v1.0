<?php
namespace App\Services;

use App\Models\Movie;

class MovieService
{
  
    /**
     * Create a new movie.
     *
     * @param array $data
     * @return \App\Models\Movie
     */

    public function createMovie($data)
    {
        return Movie::create($data);
    }

    /**
     * Update an existing movie.
     *
     * @param \App\Models\Movie $movie
     * @param array $data
     * @return \App\Models\Movie
     */
    public function updateMovie(Movie $movie, $data)
    {
        $movie->update($data);
        return $movie;
    }

    /**
     * Delete a movie.
     *
     * @param \App\Models\Movie $movie
     * @return bool|null
     */
    public function deleteMovie(Movie $movie)
    {
        return $movie->delete();
    }

    /**
     * Get a list of movies with optional filters, sorting, and pagination.
     *
     * @param array $filters
     * @param string $sortField
     * @param string $sortOrder
     * @param int $perPage
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getMovies($filters, $sortField = 'release_year', $sortOrder = 'asc', $perPage = 10)
    {
        $query = Movie::query();

        if (!empty($filters['genre'])) {
            $query->where('genre', $filters['genre']);
        }

        if (!empty($filters['director'])) {
            $query->where('director', $filters['director']);
        }

        return $query->orderBy($sortField, $sortOrder)
                     ->paginate($perPage);
    }
}

?>