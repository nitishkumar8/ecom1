<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class invoice extends Model
{
	use HasFactory;
	protected $table = 'invoice_image';
	const CREATED_AT = 'date';
}
