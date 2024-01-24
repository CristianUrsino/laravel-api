<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;
    public function content(): Content
    {
        return new Content(
            view: 'mails.new-contact-mail',
        );
    }
}