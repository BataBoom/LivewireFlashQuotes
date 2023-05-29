<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;


class QuotesResource extends JsonResource
{
    public $quotes;

    public function __construct()
    {

    $file = 'assets/fathers.json';
    $this->quotes = Storage::get($file);


    }

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }

    public static function Inspire()
    {
        $file = 'assets/fathers.json';
        $file = Storage::get($file);

        return json_decode($file, true);
    }
}
