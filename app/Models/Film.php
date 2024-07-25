<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Aktor;
use App\Models\Kategori;
use App\Models\Genre;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $fillable = ['judul', 'deskripsi', 'foto', 'url_video', 'id_kategori'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
    public function genre()
    {
        return $this->belongsToMany(Genre::class, 'genre_film', 'id_film', 'id_genre');
    }
    public function aktor()
    {
        return $this->belongsToMany(Aktor::class, 'aktor_film', 'id_film', 'id_aktor');
    }
}
