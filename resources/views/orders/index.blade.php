

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/orders/orders.css">

	<title>Orders</title>
	<style type="text/css">
        body {
            background: #00000; 
        }
		table {
			border-collapse: collapse;
			width: 100%;
			margin-top: 20px;
            background: #fffff;
            background-color: #f2f2f2;

		}
		th, td {
			text-align: left;
			padding: 8px;
			border-bottom: 1px solid #ddd;
            background-color: #f2f2f2;

		}
		th {
			background-color: #f2f2f2;
		}
		h1 {
			text-align: center;
		}
	</style>
</head>
<body>
<nav>
    <ul>
    <li><a href="{{ route('shop') }}">Home</a></li>
    <li><a href="{{ route('orders') }}">My orders</a></li>
    <li><a href="{{ route('logout') }}">Logout</a></li>
    </ul>
</nav>
<div class="container">

<div class="orders">
@php
    $ventas = App\Models\Ventas::where('Id_usuario', $user_id)->get();
@endphp

@if($ventas)
    <table>
        <tr>
            <th>Pw Adidas Tr Mens Nmd Race Sneakers</th>
            <th>AIR JORDAN 1 RETRO HIGH OFF-WHITE UNIVERSITY BLUE</th>
            <th>G5 | TENIS NIKE OFF-WHITE X DUNK LOW 'UNIVERSITY RED'</th>
        </tr>
        @foreach ($ventas as $venta)
            <tr>
                <td>{{ $venta->articulo_1 }}</td>
                <td>{{ $venta->articulo_2 }}</td>
                <td>{{ $venta->articulo3 }}</td>
            </tr>
       @endforeach
    </table>
@else
    <p class="error">You have no orders yet.</p>
@endif


</div>

</div>

</body>
</html>
