<?php

use App\Http\Resources\QuestionResource;
use App\Models\Question;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $uestions = QuestionResource::collection(
        Question::with('user')->latest()->paginate(15)
    );

    return inertia('Questions/Index', [
        'questions' => $uestions,
    ]);
})->name('questions.index');

Route::get('/questions/{question:slug}', function (Question $question) {
    return inertia('Questions/Show', [
        'question' => QuestionResource::make($question),
    ]);
})->name('questions.show');
