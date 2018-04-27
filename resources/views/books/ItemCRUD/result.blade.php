@extends('books.layout.default')

@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Search Result</h2>
            </div>
        </div>
    </div>
   <table>
       <tr>
            <th>Title</th>
            <th>ISBN</th>   
            <th>Author</th>  
            <th>Publisher</th>   
            <th>Year Published</th>    
            <th>Category</th>
       </tr>

       @foreach($result as $results)  
       <tr>
            <td>{{$results->title}}</td>
            <td>{{$results->isbn}}</td>
            <td>{{$results->author}}</td>
            <td>{{$results->publisher}}</td>
            <td>{{$results->yearPublished}}</td>
            <td>{{$results->category}}</td>
        </tr>
        @endforeach
   </table>
@endsection