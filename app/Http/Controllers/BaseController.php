<?php

namespace App\Http\Controllers;

use App\Enums\SessionFlashType;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function flashMessage(string $message, SessionFlashType $type): void
    {
        session()->flash('session_message', $message);
        session()->flash('session_message_type', $type->value);
    }

    public function successFlashMessage(string $message): void
    {
        $this->flashMessage($message, SessionFlashType::SUCCESS());
    }

    public function errorFlashMessage(string $message): void
    {
        $this->flashMessage($message, SessionFlashType::DANGER());
    }
}
