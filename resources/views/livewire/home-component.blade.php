<div>
   <div class="col-md-8 mt-5 m-auto">
    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">sr</th>
            <th scope="col">Name</th>
            <th scope="col">Created At</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($students as $student)
          <tr>
            <th scope="row">{{ $student->id }}</th>
            <td>{{ $student->name }}</td>
            <td>{{ $student->created_at}}</td>
            <td>
                <a href="{{ route('edit', ['id' => $student->id]) }}"
                    class="btn btn-sm btn-info">Edit</a>
            </td>
          </tr>
              
          @endforeach
          
        </tbody>
      </table>
   </div>
</div>
