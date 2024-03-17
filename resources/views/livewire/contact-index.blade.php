<div class="">
    @livewire('contact-create')
    <table class="table table-bordered ">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 0
            @endphp
            @foreach ($contacts as $contact)
            <tr>
                <th scope="row" > {{++$i}}</th>
                <td>{{$contact->name}}</td>
                <td>{{$contact->phone}}</td>
                <td>
                    <button class="btn btn-sm btn-info text-white">Edit</button>
                    <button class="btn btn-sm btn-danger text-white">Delete</button>
                </td>
            </tr>


            @endforeach

        </tbody>
    </table>

</div>
