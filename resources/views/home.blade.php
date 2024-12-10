@extends('layouts.app')

@section('content')


    <div class="offers">
    <h2 class="offer->feedback">Offers</h2>
        <table class="table">
            <th>
                <tr class="t" >
                    <th>Title</th>
                    <th>Enterprise</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Applied</th>
                </tr>
            </th>
            <tb>
                @foreach ($offers as $offer)
                        <tr>
                            <td>{{$offer->title}}</td>
                            <td>{{$offer->enterprise}}</td>
                            <td>{{$offer->description}}</td>
                                <td>
                                    @if ($offer->status===1)
                                    ✅
                                    @else 
                                    ❎
                                    @endif
                                </td>
                            <td>{{$offer->created_at}}</td>
                        <td><a href="{{route('show',$offer->id)}}">🆕</a></td>
                        </tr>    
                @endforeach
            </tb>
        </table>
    </div>
@endsection