<?php
namespace App\Http\Controllers\Admin\Users;

use App\Actions\Admin\Users\Admins\StoreAdminAction;
use App\Actions\Admin\Users\Admins\UpdateAdminAction;
use App\Actions\Admin\Users\Students\StoreStudentAction;
use App\Actions\Admin\Users\Students\UpdateStudentAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\Admins\StoreAdminsRequest;
use App\Http\Requests\admin\Admins\UpdateAdminsRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Spatie\Permission\Models\Role;


class StudentController extends Controller
{
    protected $messageStore;
    protected $messageUpdate;
    protected $messageDelete;
    protected $route;
    protected $Model;
    protected $StoreAction;
    protected $UpdateAction;

    public function __construct(User $admin){
        $this->Model=$admin;
        $this->messageStore='Success Add Student';
        $this->messageUpdate='Update Student';
        $this->messageDelete='Success  Delete Student';
        $this->route='admin.student.index';
        $this->StoreAction=StoreStudentAction::class;
        $this->UpdateAction=UpdateStudentAction::class;
    }

    public function index():View
    {
        $roles = Role::where('name','Student')->first();
        $data =$roles->users;
        return view('admin.student.view',compact('data'));
    }
    public function create():View
    {
        $type = 'Create';
        $method = 'POST';
        $action = route('admin.student.index');
        $roles = Role::pluck('name','name')->all();
        return view('admin.student.crud',compact('type','action','method','roles'));
    }
    public function store(StoreAdminsRequest $request):RedirectResponse
    {
        app($this->StoreAction)->handle($request->validated());
        return redirect()->route('admin.student.index')->with('add',$this->messageStore);
    }
    public function edit($id):View
    {
        $type = 'Create';
        $action = route('admin.student.update', $id);
        $method = 'PUT';
        $admin = $this->Model::find($id);
        $roles = Role::pluck('name','name')->all();
        $AdminRole =  $admin->roles->pluck('name','name')->all();
        return view('admin.student.crud',compact('type','action','method','roles','admin','AdminRole'));
    }
    public function update(UpdateAdminsRequest $request, $id):RedirectResponse
    {
        $data = $this->Model::find($id);
        app($this->UpdateAction)->handle($data,$request->validated());
        return redirect()->route($this->route)->with('edit',$this->messageUpdate);
    }
    public function destroy($id):RedirectResponse
    {
        $data = $this->Model::find($id);
        $data->delete();
        return redirect()->route($this->route)->with('delete',$this->messageDelete);
    }
}
