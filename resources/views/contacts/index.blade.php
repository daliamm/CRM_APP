<!DOCTYPE html>
<html>

<head>
    <title> Contacts</title>
</head>

<body>
@include('navigation')

    <div class="row">
        @foreach ($contacts as $contact)
        <div class="col-md-4">
            <div class="card mb-4">
                <img class="card-img-top"src="{{ $contact->image}}"alt="Contact Image">
                <div class="card-body">
                    <h5 class="card-title">{{ $contact->firstname }} {{ $contact->lastname }}</h5>
                    <p class="card-text"><strong>Email:</strong> {{ $contact->email }}</p>
                    <p class="card-text"><strong>Phone:</strong> {{ $contact->phone }}</p>
                    <p class="card-text"><strong>Language:</strong> {{ $contact->language }}</p>
                    <p class="card-text"><strong>Job:</strong> {{ $contact->job }}</p>
                    <p class="card-text"><strong>Address:</strong> {{ $contact->address }}</p>
                    <p class="card-text"><strong>City:</strong> {{ $contact->city }}</p>
                    <p class="card-text"><strong>Birthday:</strong> {{ $contact->birthday }}</p>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-primary">Edit</a>
                        <a onclick="deleteContact('{{ $contact->id }}', this)" class="btn btn-danger">Delete</a>
                        <a class="btn btn-success" onclick="changeStatus('{{ $contact->id }}')">
                            @if($contact->is_approved)
                            Unapprove
                            @else
                            Approve
                            @endif
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <script>
        function deleteContact(contactId, buttonElement) {
            if (confirm('Are you sure you want to delete this contact?')) {
                fetch(`/api/contacts/${contactId}`, {
                        method: 'DELETE',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                    })
                    .then(response => {
                        if (response.ok) {
                            const card = buttonElement.closest('.card');
                            card.remove();
                        } else {
                            console.error('Failed to delete contact');
                        }
                    })
                    .catch(error => {
                        console.error('An error occurred during the delete operation:', error);
                    });
            }
        }

        function changeStatus(contactId) {
            fetch(`/api/contacts/${contactId}/status`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        contactId
                    }),
                })
                .then(response => {
                    if (response.ok) {
                        const button = document.querySelector(`[onclick="changeStatus('${contactId}')"]`);
                        const isApproved = button.innerText.trim() === 'Unapprove';
                        button.innerText = isApproved ? 'Approve' : 'Unapprove';
                    } else {
                        console.error('Failed to change contact status');
                    }
                })
                .catch(error => {
                    console.error('An error occurred during the status change operation:', error);
                });
        }
        </script>
        <script src="{{asset('admin/assets/js/pages/crud/datatables/data-sources/html.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
</body>

</html>