@extends('books.layout.default')

@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Books</h2>
            </div>

            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('books.add') }}"> Add Book Information</a>
            </div>
            <div class="pull-right">
                 &nbsp;
            </div>
            
            <div class="pull-right">
            <form action="{{ route('books.search') }}" method="post">
                 {{ csrf_field() }}
                <input type="text" placeholder="search here" name="data">
                <input type="submit" class="btn btn-primary" value="Search">
            </form>
            </div>
            <div class="pull-right">
                    &nbsp;
            </div>
        </div>
    </div>
   <table>
       <tr>
            <th><a href="{{ route('books.sortingOfTitle') }}">Title</a></th>
            <th><a href="{{ route('books.sortingOfISBN') }}">ISBN</a></th>   
            <th><a href="{{ route('books.sortingOfAuthor') }}">Author</a></th>  
            <th><a href="{{ route('books.sortingOfPublisher') }}">Publisher</a></th>   
            <th><a href="{{ route('books.sortingOfYearPublished') }}">Year Published</a></th>    
            <th><a href="{{ route('books.sortingOfCategory') }}">Category</a></th>
            <th>ACTION</th>
       </tr>

       @foreach($show as $shows)  
       <tr>
            <td>{{$shows->title}}</td>
            <td>{{$shows->isbn}}</td>
            <td>{{$shows->author}}</td>
            <td>{{$shows->publisher}}</td>
            <td>{{$shows->yearPublished}}</td>
            <td>{{$shows->category}}</td>
            <td>
                <a class="btn btn-info" href="{{route('books.showed',$shows->id) }}">show</a>
                <a class="btn btn-info" href="{{route('books.edit',$shows->id) }}">edit</a>
                <a class="btn btn-info" href="{{route('books.delete',$shows->id) }}">delete</a>
            </td>
        </tr>
        @endforeach
   </table>
<div>{{ $show->links() }}</div>
@endsection