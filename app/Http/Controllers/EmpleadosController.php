<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\empleados;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos=empleados::select("empleados.id","empleados.nombre","empleados.apellido_paterno","empleados.apellido_materno",
        "empleados.area_trabajo","empleados.sueldo_dia","empleados.dias_trabajados","empleados.total_neto","empleados.total","empleados.bruto")
        ->orderby("empleados.id","ASC")
        ->paginate(15);
        return view('empleados.index',['empleados'=>$datos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $campos=['nombre'=>'required|string|max:100',
      'apellido_paterno'=>'required|string|max:100',
      'apellido_materno'=>'required|string|max:100',
      'area_trabajo'=>'required|string|max:100',
      'sueldo_dia'=>'required|string|max:100000',
      'dias_trabajados'=>'required|string|max:10000',
      'total_neto'=>'required|string|max:100000',
      'total'=>'required|string|max:100000',
      'bruto'=>'required|string|max:100000'];

        $Mensaje=["required"=>':attribute es requerido'];

        $this->validate($request,$campos,$Mensaje);

        $datosEmpleado=request()->except('_token');

        empleados::insert($datosEmpleado);
        return redirect('empleados')->with('Mensaje','Empleado agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $empleado=empleados::findOrFail($id);

        return view('empleados.edit',compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $campos=['nombre'=>'required|string|max:100',
      'apellido_paterno'=>'required|string|max:100',
      'apellido_materno'=>'required|string|max:100',
      'area_trabajo'=>'required|string|max:100',
      'sueldo_dia'=>'required|double|max:100000',
      'dias_trabajados'=>'required|int|max:10000',
      'total_neto'=>'required|double|max:100000',
      'total'=>'required|double|max:100000',
      'bruto'=>'required|double|max:100000'];

        $Mensaje=["required"=>':attribute es requerido'];

        $this->validate($campos,$Mensaje);


        $datosEmpleado=request()->except(['_token','_method']);

        empleados::where('id','=',$id)->update($datosEmpleado);

       //$empleado=Empleados::findOrFail($id);
       //return view('empleados.edit',compact('empleado'));
       return redirect('empleados')->with('Mensaje','Empleado modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $empleado=empleados::findOrFail($id);
        empleados::destroy($id);
        return redirect('empleados')->with('Mensaje','Empleado eliminado con exito');

    }
}
