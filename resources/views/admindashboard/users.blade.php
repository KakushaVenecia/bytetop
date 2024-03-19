@extends('admindashboard.layout')
@section('title', 'Users')
@section('content')
<div class="content">
    <div id="customers">
        <!-- Users content -->
        <h1>Customers</h1>

        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
        <table id="myTable">
                    <tr class="header">
                        <th style="width:60%;">Customer</th>
                        <th style="width:40%;">Email</th>
                    </tr>
                    <tr>
                        <td>Alfreds Futterkiste</td>
                        <td>alfred@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Berglunds snabbkop</td>
                        <td>snabbkobb@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Island Trading</td>
                        <td>traging@gmail.comK</td>
                    </tr>
                    <tr>
                        <td>Koniglich Essen</td>
                        <td>essen@gmail.com</td>
                    </tr>
                    </table> 
        <!-- {{-- @foreach ($customers as $customer) -->
                    
                <!-- <h2>{{ $customer->name }}</h2>
                <p>Email: {{ $customer->email }}</p> -->
               
            </div>
        <!-- @endforeach -->
        <!-- <div class="pagination"> -->
            <!-- {{ $customers->links() }} -->
        <!-- </div> --}} -->
    </div>
</div>

<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
@endsection

