<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;

// الصفحة الرئيسية
Route::get('/', [InvoiceController::class, 'index']);

// صفحة المنتجات الخاصة بالفئات (مثال: /categories/3)
Route::get('/categories/{id}', [InvoiceController::class, 'show']);
