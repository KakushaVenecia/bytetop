@extends('admindashboard.layout')
@section('title', 'Users')

@section('content')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

<div class="search">
    <span class="search-icon material-symbols-outlined">search</span>
    <input class="search-input" type="search" placeholder="Search">
</div>
<div class="content">
    <div id="UsersList">
        <h1>Users List</h1>
        <table class="users_list">
            <thead>
                <tr>
                    <th class="id">Name</th>
                    <th class="name">Email</th>
                    <th class="email">Invited_By</th>
                    <th class="phone-number">Status</th>
                    <th class="gender">Role</th>
                    <th class="gender">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr class="user">
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->invited_by }}</td>
                    <td>{{ $user->status }}</td>
                    <td>{{ $user->role }}</td>
                    <td>
                        @if($user->status === 'pending')
                            <form action="{{ route('admin.deleteuser', $user->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button button-delete">Delete</button>
                            </form>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


<style>
	*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
   
}
	h1 {
  display: inline;
  font-family: "Times New Roman", Times, serif;
  font-size: 30px;
  margin-top: 10px;
  margin-bottom: 40px;
  margin-left: 10%;
  margin-right: 0;
  font-weight: bold;
  padding-left: 40px;
  padding-bottom: 40px;
  line-height: 3;
}

table {
  border-collapse: collapse;
  width: 100%;
  padding: 20px;
  line-height: 3;
  }
th{
	height:30px;
	background: #001E2C;
	color:white;
}
th{
	font-family: Arial, Helvetica, sans-serif;
	font-size:15px;
}
td{
	font-family: Arial, Helvetica, sans-serif;
	font-size:12px;
	}
tbody>tr>:nth-child(5){
 	width:200px;
 	text-align:center;
 	background-clip: padding-box;
    border-radius: 20px;
    background-color: #F0F0F0;
    color: red;
    padding: 5px 50px 5px 50px;
    display: inline;
}
table th,td {
    text-align: center;
}

.id:after,
.name:after,
.email:after,
.phone-number:after,
.gender:after{
  content: ' ';
  position: relative;
  left: 2px;
  border: 8px solid transparent;
}

.id:after,
.name:after,
.email:after,
.phone-number:after,
.gender:after{
  top: 10px;
  border-top-color: silver;
}

.id:after,
.name:after,
.email:after,
.phone-number:after,
.gender:after{
  padding-right: 0px;
}

.search{
  width: max-content;
  display: flex;
  align-items: center;
  padding: 18px;
  margin-top: 14px;
  border-radius: 28px;
  background: #f6f6f6;
  transition: box-shadow 0.1s;
  float:right;
}

.search:focus-within {
  box-shadow: 0 0 2px rgba (0, 0, 0, 0.75);
}

.search-input{
  font-size: 16px;
  font-family: 'Lexend', sans-serif;
  color: #333333;
  margin-left: 14px;
  outline: none;
  border:none;
  background: transparent;
  width: 300px
}

.search-input::placeholder,
.search-icon{
  color: rgba(0, 0, 0, 0.5)
}

.button {
  border: none;
  color: white;
  padding: 15px;
  border-radius: 28px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 22px 20px;
  cursor: pointer;
  float: right;
}

.button1 {background-color: #001E2C;}

@media only screen and (max-width: 768px) {
        .content {
            padding: 0 10px;
        }
        .button {
            margin: 10px 0;
            float: none;
        }
        .search {
            margin-top: 10px;
            float: none;
        }
        .search-input {
            width: 100%;
        }
        .id:after,
        .name:after,
        .email:after,
        .phone-number:after,
        .gender:after {
            display: none;
        }
        table {
            font-size: 14px;
        }
    }

    @media only screen and (max-width: 480px) {
        h1 {
            font-size: 24px;
        }
        table {
            font-size: 12px;
        }
        .button {
            margin: 10px auto;
            float: none;
        }
    }
</style>
@endsection