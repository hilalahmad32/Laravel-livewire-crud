<div>
    <div class="container">

        <div class="mt-5">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h3>Users ( {{count($total_students)}} )</h3>
                        <button wire:click='showFrom' class="btn btn-success">Create</button>
                    </div>
                </div>
            </div>
        </div>
        @if ($selectData == true)
        <div class="d-flex justify-content-end">
            <input type="text" wire:model='search' name="search" id="search" placeholder="Search Here ...." class="form-control form-control-lg mt-2 w-50">
        </div>
        {{$search}}
        <div class="table-responsive mt-5">
            <table class="table table-bordered">
                <thead>
                    <tr class="bg-dark text-white">
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Country</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($students as $student)
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->country}}</td>
                        <td><button wire:click='edit({{$student->id}})' class="btn btn-success">Edit</button></td>
                        <td><button wire:click='delete({{$student->id}})' class="btn btn-danger">Delete</button></td>
                    </tr>
                    @empty
                    <h1>Record not found</h1>
                    @endforelse
                </tbody>
            </table>

            <div class="text-center">
                {{$students->links()}}
            </div>
        </div>

        @endif

        @if ($createData == true)
        {{-- create-data --}}
        <div class="row my-5">
            <div class="col-xl-6 col-md-8 col-sm-12 offset-xl-3 offset-md-2 offset-sm-0">
                <div class="card">
                    <div class="card-header">
                        <h1>Add Data</h1>
                    </div>
                    <form action="" wire:submit.prevent='create'>
                        <div class="card-body">
                            <div class="form-group">
                                <label for=""><b>Enter Name</b></label>
                                <input type="text" wire:model='name' name="name" id="name"
                                    class="form-control form-control-lg">
                                <span class="text-danger">
                                    @error('name')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for=""><b>Enter Email</b></label>
                                <input type="email" wire:model='email' name="email" id="email"
                                    class="form-control form-control-lg">
                                <span class="text-danger">
                                    @error('email')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for=""><b>Enter Country</b></label>
                                <input type="text" wire:model='country' name="country" id="country"
                                    class="form-control form-control-lg">
                                <span class="text-danger">
                                    @error('country')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endif

        @if ($updateData == true)
        {{-- update data --}}
        <div class="row my-5">
            <div class="col-xl-6 col-md-8 col-sm-12 offset-xl-3 offset-md-2 offset-sm-0">
                <div class="card">
                    <div class="card-header">
                        <h1>Update Data</h1>
                    </div>
                    <form action="" wire:submit.prevent='update({{$ids}})'>
                        <div class="card-body">
                            <div class="form-group">
                                <label for=""><b>Enter Name</b></label>
                                <input type="text" wire:model='edit_name' name="edit_name" id="edit_name" class="form-control form-control-lg">
                                <span class="text-danger">
                                    @error('edit_name')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for=""><b>Enter Email</b></label>
                                <input type="email" wire:model='edit_email' name="edit_email" id="edit_email" class="form-control form-control-lg">
                                <span class="text-danger">
                                    @error('edit_email')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for=""><b>Enter Country</b></label>
                                <input type="text" wire:model='edit_country' name="edit_country" id="edit_country" class="form-control form-control-lg">
                                <span class="text-danger">
                                    @error('edit_country')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endif

    </div>
</div>