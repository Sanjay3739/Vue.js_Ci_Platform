<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MissionMedia extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $primaryKey = 'mission_media_id';
    protected $fillable = [
        'media_name',
        'mission_id',
        'media_type',
        'media_path',
        'default',
        ];


    public function mission() {
        return $this->belongsTo(Mission::class,'mission_id');
    }

    /**
	 * @return mixed
	 */
	public function getFillable() {
		return $this->fillable;
	}

	/**
	 * @param mixed $fillable
	 * @return self
	 */
	public function setFillable($fillable): self {
		$this->fillable = $fillable;
		return $this;
	}
}
