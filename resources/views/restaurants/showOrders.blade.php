Ordini ricevuti
@foreach ($orders as $order )
    <div>{{$order->customer_name}}</div>
    <div>{{$order->customer_email}}</div>
    <div>{{$order->customer_address}}</div>
    <div>{{$order->customer_phone}}</div>
    <div>{{$order->created_at}}</div>
    <div>{{$order->total_order}}€</div>
@endforeach