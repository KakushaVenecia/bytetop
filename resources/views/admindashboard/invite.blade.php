<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>
<body>
    <div class="container">
        <h1>Invite Admin</h1>
        <form action="{{ route('invite.send') }}" method="POST">
            @csrf
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Name" required="" style="width: 300px;">
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Email" required="" style="width: 300px;">
                <br>
                @error('email')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit">Invite</button>
        </form>
    </div>
    <style>
        body {
    font-family: 'Poppins', sans-serif;
    background: rgb(96,145,163);
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
}

h1{
    color: white;    
}

.container {
    width: 30rem;
    height: 30rem;
    background: #001E2C;
    border-radius: 5px;
    padding: 10px;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

label {
	
	color: white;
	display: block;
	padding: 5px;
	margin: 3px;
}

button {
    background-color: #00668A;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
    opacity: 0.9;
    border-radius: 5px;
    text-align: center;
    justify-content: center;
}

button:hover {
  background-color: #f7890b;
}

    </style>
    
</body>
</html>