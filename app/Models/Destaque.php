<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destaque extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoria_id',
        'titulo',
        'subtitulo',
        'url_link',
        'texto_link',
        'data_inicio',
        'data_fim',
        'ordem',
        'status',
        'img_src'
    ];

    public function getDestaques($bloco_slug, $limit = null) {
        $destaques = Destaque::join('destaques_categorias as categ', 'destaques.categoria_id', '=', 'categ.id')
                    ->select(
                        'destaques.titulo',
                        'destaques.subtitulo',
                        'destaques.url_link',
                        'destaques.texto_link',
                        'destaques.img_src',
                        'destaques.data_inicio',
                        'destaques.data_fim',
                        'destaques.ordem',
                        'destaques.status',
                        'categ.titulo as categ_title',
                        'categ.slug as categ_slug')
                    ->where('destaques.status', '1')
                    ->where('categ.slug', $bloco_slug)
                    ->orderBy('destaques.ordem', 'asc')
                    ->limit($limit)
                    ->get();

        return $destaques;
    }

    public function categoria(){
        return $this->belongsTo(CategoriaDestaque::class , 'categoria_id');
    }
}
