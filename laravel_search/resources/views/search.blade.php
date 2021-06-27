<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<div class="container">
    <div class="row">
        <div class="col-md-6" style="margin-top: 40px">
            <h4>Search</h4><hr>
            <form action="{{ route('web.search') }}" method="GET">
                <div class="form-group">
                    <label for=""></label>
                    <input type="text" class="form-control" name="query" placeholder="Search here...">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>
            <br>
            <br>
            <hr>
            <br>
                <table class="table table-hover">
                    <thread>
                        <tr>
                            <tr>Name</tr>
                        </tr>
                    </thread>
                    <tbody
                    @if(isset($countries))
                         @foreach($countries as $country)
                             <tr>
                                 <td>{{ $country->name }}</td>
                             </tr>
                         @endforeach
                    @endif
                    </tbody>
                </table>
        </div>
    </div>
</div>
