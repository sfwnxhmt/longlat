@extends('profile.profile-layout')
@section('profile')
    <div class="card">
        <div class="card-header">Update Profile</div>
        <div class="card-body">
            <form id="edit_profile_form" method="post">
                @csrf
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name">
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" class="form-control" id="Last_name" placeholder="Last Name">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div> 
</div> 

@endsection