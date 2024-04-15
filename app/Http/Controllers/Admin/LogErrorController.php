<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LogError;
use App\Http\Requests\StoreLogErrorRequest;
use App\Http\Requests\UpdateLogErrorRequest;
use Exception;

class LogErrorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $log_errors = LogError::all();
        return view('admin.logError.index', compact('log_errors'));
    }

    public function show(LogError $logError)
    {
        //$logError = LogError::find($id);
        //$logError = $logError->id;

        return view('admin.logError.details', compact('logError'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLogErrorRequest $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LogError $logError)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLogErrorRequest $request, LogError $logError)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LogError $logError)
    {
        try {

            $logError->delete();
            return to_route('admin.logError.index')->with('deleted', 'Excepción eliminada con éxito.');
        } catch (Exception $e) {
            $errorMessage = $e->getMessage();

            LogError::create([
                'message' => 'Error al eliminar una excepción',
                'user_email' => auth()->user()->email,
                'user_name' => auth()->user()->name,
                'exception' => $errorMessage,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            return back()->with('error', 'Ha ocurrido un error');
        }
    }
}
