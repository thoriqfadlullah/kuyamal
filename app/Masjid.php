<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nama
 * @property string $kontak
 * @property string $alamat
 * @property string $created_at
 * @property string $updated_at
 */
class Masjid extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'masjid';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['nama', 'kontak', 'alamat', 'tujuan', 'detail', 'nominal', 'bank', 'rekbank', 'atasnama', 'created_at', 'updated_at'];

}
