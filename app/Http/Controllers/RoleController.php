<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use function GuzzleHttp\Promise\all;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Role::all();
        return view('auth.user.role.index',[
            'user_data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $per = json_encode($request->per);
        Role::create([
           'name' => $request->name,
           'slug' => str::slug($request->name),
            'permission' => $per,
        ]);
        return redirect()->route('role.index')->with('success','role created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function roles(){
        $all_data = Role::all();
        $output = '';
        $i=1;
        foreach ($all_data as $data){

            $permission = json_decode($data->permission);
            if ($data->status=='Published'){
                $status = '<span class="badge badge-success">Published</span>';
            }else{
                $status = '<span class="badge badge-danger">Unpublished</span>';
            }

            if ($data->status=='Published'){
                $status_btn = '<a id="status_btn" class="btn btn-sm btn-info" status_id="'.$data->id.'" href="">view</a>';
            }else{
                $status_btn = '<a id="status_btn" class="btn btn-sm btn-danger" status_id="'.$data->id.'" href="">view</a>';
            }


            $output .='<tr>';
            $output .='<td>'.$i.'</td>';
            $output .='<td>'.$data->name.'</td>';
            $output .='<td>'.$data->slug.'</td>';
            $output .='<td>'.implode(',',$permission).'</td>';
            $output .='<td>'.$status.'</td>';
            $output .='<td>'.$status_btn.'<a class="btn btn-sm btn-warning" href="">edit</a><a class="btn btn-sm btn-success" href="">delete</a></td>';
            $output .='</tr>';
            $i++;
        }
        return $output;
    }
    public function statusmethod($id){
        $update_data = Role::find($id);

        if ($update_data->status=='Published'){
            $update_data->status = 'Unpublished';
            $update_data->update();
        }elseif ($update_data->status=='Unpublished'){
            $update_data->status = 'Published';
            $update_data->update();
        }



    }


}
