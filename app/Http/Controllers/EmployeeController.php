<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Http\JsonResponse;

class EmployeeController extends Controller
{
    public function getAllData(Request $request): \Illuminate\Http\JsonResponse
    {
        try{
            $data = Employee::all();

            if ($data) {
                return $this->returnJson(
                    $data,
                    message: 'Berhasil Mengambil Riwayat Pekerjaan Aktif'
                );
            } else {
                return $this->returnJson(
                    null,
                    code: 404,
                    message: 'Biodata tidak ditemukan'
                );
            }
        } catch(\Exception $exception){
            return $this->returnJson(
                code: 500,
                message: 'Gagal Mengambil Riwayat Pekerjaan Aktif: ' . $exception->getMessage()
            );
        }
    }
}
