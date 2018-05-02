@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Control</div>
                <div class="panel-body"> 

                  <div class="bs-example" data-example-id="panel-without-body-with-table">
                    <div class="panel panel-default">
                      <div class="panel-heading">Panel heading</div>

                      <table class="table">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>E-mail</th>
                            <th>Role</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                          <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                              <div class="form-group" style="margin-bottom: 0px;">
                                @if (Auth::user()->role == 2 | $user->id == 1)
                                    <b>Disabled</b>
                                @else
                                  <form method="post" action="/update-role/{{ $user->id }}">
                                  {{ csrf_field() }}
                                    <select class="form-control" name="role" onchange="this.form.submit();">
                                      <option value="1" {{ ($user->role == 1) ? 'selected' : null}}>Admin</option>
                                      <option value="2" {{ ($user->role == 2) ? 'selected' : null}}>Manager</option>
                                      <option value="3" {{ ($user->role == 3) ? 'selected' : null}}>User</option>
                                    </select>
                                  </form>
                                @endif
                              </div>
                            </td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div> 
                  </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection