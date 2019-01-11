@extends('layouts.app')
@section('header', 'Order History')
@section('content')
  <div class="card-body">
    <table class="table">
      <thead>
        <th>Order No</th>
        <th>Description</th>
        <th>Total</th>
        <th>Information</th>
      </thead>
      <tbody>
        @foreach ($order as $dataOrder)
          <tr>
            <td>{{$dataOrder->number}}</td>
            <td>
              @if ($dataOrder->type == 1)
                {{number_format($dataOrder->Prepaid->value)}} For {{$dataOrder->Prepaid->phone_number}}
              @else
                {{$dataOrder->Product->product}} that cost {{number_format($dataOrder->Product->price)}}
              @endif
            </td>
            <td>{{number_format($dataOrder->price)}}</td>
            @if ($dataOrder->isCanceled())
              <td class="text-danger">Canceled</td>
            @else
              <td>
                @if ($dataOrder->status == 1)
                  @if ($dataOrder->type == 1)
                    Success
                  @else
                    Shipping Code : {{$dataOrder->Product->shipment_code}}
                  @endif
                @elseif ($dataOrder->status == 2)
                  Fail
                @else
                  <a href="{!! route('paymentForm', ['id' => $dataOrder->number]) !!}" class="btn btn-primary">Pay</a>
                @endif
              </td>
            @endif
          </tr>
        @endforeach
      </tbody>
    </table>
    {{$order->links()}}
  </div>
@endsection
