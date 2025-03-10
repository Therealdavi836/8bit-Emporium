<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class APIController extends Controller
{
    //El metodo devuelve todo los JSON de las apis involucradas
    public function index()
    {
        $apiKey = env('GIANTBOMB_API_KEY');

        // Obtener juegos populares entre 2024 y 2025
        $response = Http::get("https://www.giantbomb.com/api/games/", [
            'api_key' => $apiKey,
            'format' => 'json',
            'limit' => 100,
            'sort' => 'original_release_date:desc', // Ordenamos por los más recientes
            'filter' => 'original_release_date:2024-01-01|2025-12-31' 
        ]);

        $games = $response->json();

        // Obtener reseñas de GiantBomb
        $reviewsResponse = Http::get("https://www.giantbomb.com/api/reviews/", [
            'api_key' => $apiKey,
            'format' => 'json',
            'limit' => 100, // Aumentamos el límite para mejorar el filtrado
            'sort' => 'publish_date:desc'
        ]);

        // Verificamos que la respuesta tenga datos antes de filtrar
        if (isset($reviews['results']) && !empty($reviews['results'])) {
            $reviews['results'] = collect($reviews['results'])->filter(function ($review) {
                if (!isset($review['publish_date'])) {
                    return false;
                }
                $year = date('Y', strtotime($review['publish_date']));
                return $year >= 2024;
            })->values()->all(); // Resetear índices
        }

         // Obtener videos de GiantBomb
        $videosResponse = Http::withHeaders([
            'User-Agent' => 'Laravel App',
            'Accept' => 'application/json'
        ])->get("https://www.giantbomb.com/api/videos/", [
            'api_key' => $apiKey,
            'format' => 'json',
            'limit' => 50, // Puedes ajustar el límite
            'sort' => 'publish_date:desc' // Ordenar por fecha de publicación más reciente
        ]);

        $videos = $videosResponse->json();

        $reviews = $reviewsResponse->json();

        // Llamar a la API de CheapShark con más resultados
        $response = Http::get('https://www.cheapshark.com/api/1.0/deals', [
            'pageSize' => 200 // Aumenta la cantidad de juegos a obtener
        ]);

        // Convertir la respuesta en un array
        $deals = $response->json();

        return view('discover.index', compact('games','deals','reviews','videos'));
    }
}
